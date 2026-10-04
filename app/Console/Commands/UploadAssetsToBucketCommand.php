<?php

namespace App\Console\Commands;

use App\Support\BucketAssets;
use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use League\MimeTypeDetection\GeneratedExtensionToMimeTypeMap;
use Symfony\Component\Finder\SplFileInfo;

class UploadAssetsToBucketCommand extends Command
{
    protected $signature = 'upload-assets-to-bucket';

    protected $description = 'Upload the static files in the public directory to the assets bucket';

    /** @var array<int, string> */
    protected array $filesServedByTheApp = [
        'index.php',
        'web.config',
        'robots.txt',
        'hot',
        'favicon.ico',
        'site.webmanifest',
        'browserconfig.xml',
        'mix-manifest.json',
    ];

    protected int $versionsToKeep = 5;

    protected int $daysToKeepSupersededVersions = 14;

    public function handle(): int
    {
        if (! config('filesystems.disks.assets.bucket')) {
            $this->comment('No assets bucket configured, the app will serve its own assets.');

            return self::SUCCESS;
        }

        $disk = Storage::disk('assets');

        $files = $this->publicFiles();

        $version = $this->version($files);

        $disk->exists("{$version}/.uploaded")
            ? $this->info("Version `{$version}` is already in the bucket.")
            : $this->upload($disk, $files, $version);

        File::put(BucketAssets::versionFilePath(), $version);

        $this->removeSupersededVersions($disk, $version);

        $this->comment('Assets are served from '.BucketAssets::url());

        return self::SUCCESS;
    }

    /** @return Collection<int, SplFileInfo> */
    protected function publicFiles(): Collection
    {
        return collect(File::allFiles(public_path()))
            ->reject(fn (SplFileInfo $file) => in_array($file->getRelativePathname(), $this->filesServedByTheApp))
            ->reject(fn (SplFileInfo $file) => str_starts_with($file->getRelativePathname(), 'storage/'))
            ->reject(fn (SplFileInfo $file) => $file->getExtension() === 'php')
            ->sortBy(fn (SplFileInfo $file) => $file->getRelativePathname())
            ->values();
    }

    /** @param Collection<int, SplFileInfo> $files */
    protected function version(Collection $files): string
    {
        $fingerprint = $files
            ->map(fn (SplFileInfo $file) => $file->getRelativePathname().':'.sha1_file($file->getPathname()))
            ->implode("\n");

        return substr(sha1($fingerprint), 0, 12);
    }

    /** @param Collection<int, SplFileInfo> $files */
    protected function upload(Filesystem $disk, Collection $files, string $version): void
    {
        $this->info("Uploading {$files->count()} files as version `{$version}`...");

        $mimeTypes = new GeneratedExtensionToMimeTypeMap;

        $files->each(function (SplFileInfo $file) use ($disk, $version, $mimeTypes) {
            $path = $file->getRelativePathname();

            $this->line("Uploading `{$path}`...");

            $contents = $file->getContents();

            if ($file->getExtension() === 'css') {
                $contents = $this->prefixAbsoluteUrls($contents, $version);
            }

            $disk->put("{$version}/{$path}", $contents, [
                'ContentType' => $mimeTypes->lookupMimeType(strtolower($file->getExtension())) ?? 'application/octet-stream',
                'CacheControl' => 'public, max-age=31536000, immutable',
            ]);
        });

        $disk->put("{$version}/.uploaded", now()->toIso8601String());
    }

    /**
     * Absolute urls in a stylesheet resolve against the host of that stylesheet,
     * so they need the version prefix to keep pointing to files of this version.
     */
    protected function prefixAbsoluteUrls(string $css, string $version): string
    {
        return preg_replace('/url\(\s*([\'"]?)\/(?!\/)/', "url($1/{$version}/", $css);
    }

    protected function removeSupersededVersions(Filesystem $disk, string $currentVersion): void
    {
        $history = collect($disk->exists('versions.json') ? json_decode($disk->get('versions.json'), true) : []);

        if (($history->last()['version'] ?? null) !== $currentVersion) {
            $history = $history
                ->reject(fn (array $entry) => $entry['version'] === $currentVersion)
                ->push(['version' => $currentVersion, 'activated_at' => now()->toIso8601String()])
                ->values();
        }

        $removableVersions = $history
            ->slice(0, max($history->count() - $this->versionsToKeep, 0))
            ->filter(function (array $entry, int $index) use ($history) {
                $supersededAt = Carbon::parse($history[$index + 1]['activated_at']);

                return $supersededAt->lt(now()->subDays($this->daysToKeepSupersededVersions));
            });

        $removableVersions->each(function (array $entry) use ($disk) {
            $this->info("Removing version `{$entry['version']}`...");

            $disk->deleteDirectory($entry['version']);
        });

        $remainingHistory = $history
            ->reject(fn (array $entry) => $removableVersions->contains('version', $entry['version']))
            ->values();

        $disk->put('versions.json', json_encode($remainingHistory->all(), JSON_PRETTY_PRINT), [
            'ContentType' => 'application/json',
            'CacheControl' => 'no-store',
        ]);
    }
}
