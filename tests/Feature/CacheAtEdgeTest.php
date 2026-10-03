<?php

it('caches pages at the edge without setting cookies', function (string $url) {
    $response = $this->get($url)->assertOk();

    expect($response->headers->get('Cache-Control'))->toBe('max-age=60, public, s-maxage=604800');
    expect($response->headers->getCookies())->toBeEmpty();
})->with([
    '/',
    '/?subscribed=1',
    '/?subscription-failed=1',
    '/?referrer=newsletter',
    '/sample-chapter',
    '/terms-of-use',
    '/privacy',
    '/robots.txt',
]);

it('caches not found pages at the edge', function () {
    $response = $this->get('/does-not-exist')->assertNotFound();

    expect($response->headers->get('Cache-Control'))->toBe('max-age=60, public, s-maxage=604800');
});

it('does not cache the subscribe form submission', function () {
    config()->set('honeypot.enabled', false);

    $response = $this->post('/subscribe', ['email' => 'freek@spatie.be']);

    expect($response->headers->get('Cache-Control'))->not->toContain('public');
});

it('does not cache the health check', function () {
    $response = $this->get('/up')->assertOk();

    expect($response->headers->get('Cache-Control'))->not->toContain('public');
});

it('does not cache pages locally', function () {
    app()->detectEnvironment(fn () => 'local');

    $response = $this->get('/')->assertOk();

    expect($response->headers->get('Cache-Control'))->not->toContain('public');
});
