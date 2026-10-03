<?php

use Illuminate\Support\Facades\Http;

beforeEach(function () {
    Http::preventStrayRequests();

    config()->set('honeypot.enabled', false);
    config()->set('services.mailcoach.subscription_uuid', 'test-uuid');
});

it('subscribes an email address to the waiting list in production', function () {
    app()->detectEnvironment(fn () => 'production');

    Http::fake(['spatie.be/mailcoach/subscribe/*' => Http::response()]);

    $this->post('/subscribe', ['email' => 'freek@spatie.be'])
        ->assertRedirect('/?subscribed=1');

    Http::assertSent(fn ($request) => $request->url() === 'https://spatie.be/mailcoach/subscribe/test-uuid'
        && $request['email'] === 'freek@spatie.be'
        && $request['tags'] === 'laravel-beyond-crud-waiting-list');
});

it('does not subscribe outside of production', function () {
    Http::fake();

    $this->post('/subscribe', ['email' => 'freek@spatie.be'])
        ->assertRedirect('/?subscription-failed=1');

    Http::assertNothingSent();
});

it('requires a valid email address', function () {
    Http::fake();

    $this->post('/subscribe', ['email' => 'not-an-email'])
        ->assertRedirect('/?subscription-failed=1');

    Http::assertNothingSent();
});

it('does not subscribe when no subscription uuid is configured', function () {
    app()->detectEnvironment(fn () => 'production');

    config()->set('services.mailcoach.subscription_uuid', null);

    Http::fake();

    $this->post('/subscribe', ['email' => 'freek@spatie.be'])
        ->assertRedirect('/?subscription-failed=1');

    Http::assertNothingSent();
});
