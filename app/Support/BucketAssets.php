<?php

namespace App\Support;

class BucketAssets
{
    public static function url(): ?string
    {
        $bucketUrl = config('filesystems.disks.assets.url');

        if (! $bucketUrl) {
            return null;
        }

        $version = static::version();

        if (! $version) {
            return null;
        }

        return rtrim($bucketUrl, '/')."/{$version}";
    }

    public static function version(): ?string
    {
        $versionFilePath = static::versionFilePath();

        if (! is_file($versionFilePath)) {
            return null;
        }

        $version = trim(file_get_contents($versionFilePath));

        return $version !== '' ? $version : null;
    }

    public static function versionFilePath(): string
    {
        return base_path('bootstrap/cache/asset-version');
    }
}
