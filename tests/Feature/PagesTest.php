<?php

use Illuminate\Support\Facades\Http;

beforeEach(function () {
    Http::preventStrayRequests();

    config()->set('services.spatie_prices_api.purchasable_id', 20);
});

it('shows the home page without fetching prices on the server', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('Laravel beyond CRUD')
        ->assertSee('Buy Course')
        ->assertSee('Buy bundle')
        ->assertSee('https://spatie.be/products/laravel-beyond-crud')
        ->assertSee('x-data="spatiePrice(20)"', false)
        ->assertSee('x-data="spatieBundlePrice(2)"', false)
        ->assertSee('window.spatiePrice', false)
        ->assertSee('countdown.days', false);

    Http::assertNothingSent();
});

it('shows the sample chapter without fetching prices on the server', function () {
    $this->get('/sample-chapter')
        ->assertOk()
        ->assertSee('Working with data')
        ->assertSee('x-data="spatiePrice(20)"', false)
        ->assertSee('x-data="spatieBundlePrice(2)"', false);

    Http::assertNothingSent();
});

it('does not add the referrer to links on the server', function () {
    $this->get('/?referrer=newsletter')
        ->assertOk()
        ->assertDontSee('?referrer=newsletter', false)
        ->assertSee('document.cookie = `referrer=', false);
});

it('confirms a newsletter subscription', function () {
    $this->get('/?subscribed=1')
        ->assertOk()
        ->assertSee('Thanks for your interest! We will keep you posted with updates on the course.');
});

it('shows that a subscription failed', function () {
    $this->get('/?subscription-failed=1')
        ->assertOk()
        ->assertSee('We could not subscribe you.')
        ->assertDontSee('Thanks for your interest!');
});

it('does not show subscription messages by default', function () {
    $this->get('/')
        ->assertDontSee('Thanks for your interest!')
        ->assertDontSee('We could not subscribe you.');
});

it('shows the static pages', function (string $url, string $text) {
    $this->get($url)->assertOk()->assertSee($text);
})->with([
    ['/terms-of-use', 'Terms of use'],
    ['/privacy', 'Privacy'],
]);

it('serves robots.txt', function () {
    $this->get('/robots.txt')
        ->assertOk()
        ->assertHeader('Content-Type', 'text/plain; charset=UTF-8')
        ->assertSee('User-agent: *');
});

it('serves the downloadable sample chapter', function () {
    expect(public_path('downloads/laravel-beyond-crud-chapter-2.pdf'))->toBeFile();
});
