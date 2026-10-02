<?php

use Illuminate\Support\Facades\Http;

beforeEach(function () {
    Http::preventStrayRequests();

    config()->set('honeypot.enabled', false);
    config()->set('services.mailcoach.subscription_uuid', 'test-uuid');
});

it('subscribes an email address to the waiting list', function () {
    Http::fake(['spatie.be/mailcoach/subscribe/*' => Http::response()]);

    $this->from('/')
        ->post('/subscribe', ['email' => 'freek@spatie.be'])
        ->assertRedirect('/');

    expect(flash()->message)->toContain('Thanks for your interest');

    Http::assertSent(fn ($request) => $request->url() === 'https://spatie.be/mailcoach/subscribe/test-uuid'
        && $request['email'] === 'freek@spatie.be'
        && $request['tags'] === 'laravel-beyond-crud-waiting-list');
});

it('requires a valid email address', function () {
    Http::fake();

    $this->from('/')
        ->post('/subscribe', ['email' => 'not-an-email'])
        ->assertRedirect('/')
        ->assertSessionHasErrors('email');

    Http::assertNothingSent();
});

it('does not subscribe when no subscription uuid is configured', function () {
    config()->set('services.mailcoach.subscription_uuid', null);

    Http::fake();

    $this->from('/')
        ->post('/subscribe', ['email' => 'freek@spatie.be'])
        ->assertRedirect('/');

    expect(flash()->message)->toContain('not possible');

    Http::assertNothingSent();
});
