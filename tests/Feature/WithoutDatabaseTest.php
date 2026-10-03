<?php

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Http;

beforeEach(function () {
    Http::preventStrayRequests();

    config()->set('session.driver', 'cookie');
    config()->set('cache.default', 'file');
    config()->set('database.default', 'unavailable');
    config()->set('database.connections.unavailable', [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => 1,
        'database' => 'unavailable',
    ]);
    config()->set('honeypot.enabled', false);
    config()->set('services.mailcoach.subscription_uuid', 'test-uuid');

    Event::listen(QueryExecuted::class, fn (QueryExecuted $query) => throw new RuntimeException("Unexpected query: {$query->sql}"));
});

it('serves the pages without a database', function (string $url) {
    $this->get($url)->assertOk();
})->with([
    '/',
    '/sample-chapter',
    '/terms-of-use',
    '/privacy',
    '/up',
]);

it('subscribes to the waiting list without a database', function () {
    app()->detectEnvironment(fn () => 'production');

    Http::fake(['spatie.be/mailcoach/subscribe/*' => Http::response()]);

    $this->post('/subscribe', ['email' => 'freek@spatie.be'])
        ->assertRedirect('/?subscribed=1');
});

it('does not resolve a database connection', function () {
    $this->get('/')->assertOk();

    expect(DB::getConnections())->toBeEmpty();
});
