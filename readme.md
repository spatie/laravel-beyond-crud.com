## laravel-beyond-crud.com

This repo contains the source code of laravel-beyond-crud.com

## Deployment

This site runs on [Laravel Cloud](https://cloud.laravel.com). Every push to `main` is deployed automatically.

The static files in `public` are served from a public Laravel Cloud bucket, so requests for them never wake the app. The build command ends with `php artisan upload-assets-to-bucket`, which uploads them under a versioned prefix with a long `Cache-Control` header and points `asset()` and `mix()` to that prefix. The bucket is attached to the Cloud environment as the `assets` disk (not the default disk). Locally, the disk can be configured with the `ASSETS_BUCKET`, `ASSETS_BUCKET_ENDPOINT`, `ASSETS_BUCKET_URL`, `ASSETS_BUCKET_ACCESS_KEY_ID` and `ASSETS_BUCKET_SECRET_ACCESS_KEY` environment variables. Without a bucket, the app serves its own assets.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-beyond-crudcom.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-beyond-crud.com)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).