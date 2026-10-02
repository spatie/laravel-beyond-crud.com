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
    Http::fake(['spatie.be/api/*' => Http::response(status: 500)]);

    $this->get($url)->assertOk();
})->with([
    '/',
    '/sample-chapter',
    '/terms-of-use',
    '/privacy',
    '/up',
]);

it('subscribes to the waiting list without a database', function () {
    Http::fake(['spatie.be/mailcoach/subscribe/*' => Http::response()]);

    $this->from('/')
        ->post('/subscribe', ['email' => 'freek@spatie.be'])
        ->assertRedirect('/');

    expect(flash()->message)->toContain('Thanks for your interest');
});

it('does not resolve a database connection', function () {
    Http::fake(['spatie.be/api/*' => Http::response(status: 500)]);

    $this->get('/')->assertOk();

    expect(DB::getConnections())->toBeEmpty();
});
