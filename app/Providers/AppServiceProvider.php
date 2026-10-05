<?php

namespace App\Providers;

use App\Support\BucketAssets;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->throwOnFailedAssetUploads();
    }

    public function boot(): void
    {
        Model::unguard();

        Blade::directive('markdown', function () {
            return "<?php echo (new \League\CommonMark\CommonMarkConverter())->convertToHtml(<<<HEREDOC";
        });

        Blade::directive('endmarkdown', function () {
            return 'HEREDOC); ?>';
        });

        $this->serveAssetsFromBucket();
    }

    protected function serveAssetsFromBucket(): void
    {
        $bucketAssetsUrl = BucketAssets::url();

        if (! $bucketAssetsUrl) {
            return;
        }

        URL::useAssetOrigin($bucketAssetsUrl);

        config()->set('app.mix_url', $bucketAssetsUrl);
    }

    /**
     * Laravel Cloud replaces the config of the disk of an attached bucket and
     * turns off throwing, which would let a failed asset upload pass silently.
     */
    protected function throwOnFailedAssetUploads(): void
    {
        config()->set('filesystems.disks.assets.throw', true);
    }
}
