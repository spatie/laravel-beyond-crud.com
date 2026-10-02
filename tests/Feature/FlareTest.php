<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;
use Spatie\LaravelFlare\FlareConfig;
use Spatie\LaravelFlare\FlareServiceProvider;

afterEach(function () {
    FlareServiceProvider::flushConfigurationCallbacks();
});

it('reports exceptions to Flare', function () {
    FlareServiceProvider::configure(function (FlareConfig $config): void {
        $config->apiToken = 'fake-flare-key';
    });

    $this->refreshApplication();

    Http::fake();

    Route::get('flare-test', fn () => throw new RuntimeException('Flare test exception'));

    $this->get('flare-test')->assertServerError();

    app(Api::class)->sendQueue();

    Http::assertSent(fn ($request) => str_contains($request->url(), 'flareapp.io')
        && str_contains($request->body(), 'Flare test exception'));
});
