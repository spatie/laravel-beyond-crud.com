<?php

use Illuminate\Support\Facades\Http;

beforeEach(function () {
    Http::preventStrayRequests();
});

function fakePriceApi(bool $discountActive = false): void
{
    Http::fake([
        'spatie.be/api/price/*' => Http::response([
            'actual' => ['price_in_cents' => 9730, 'currency_code' => 'EUR', 'currency_symbol' => '€', 'formatted_price' => '€ 97.30'],
            'without_discount' => ['price_in_cents' => 13900, 'currency_code' => 'EUR', 'currency_symbol' => '€', 'formatted_price' => '€ 139'],
            'discount' => ['active' => $discountActive, 'percentage' => 30, 'name' => 'BLACK FRIDAY', 'expires_at' => now()->addDays(3)->timestamp],
        ]),
        'spatie.be/api/bundle-price/*' => Http::response([
            'actual' => ['price_in_cents' => 19900, 'currency_code' => 'EUR', 'currency_symbol' => '€', 'formatted_price' => '€ 199'],
            'without_discount' => ['price_in_cents' => 24900, 'currency_code' => 'EUR', 'currency_symbol' => '€', 'formatted_price' => '€ 249'],
            'discount' => ['active' => false, 'percentage' => 0, 'name' => '', 'expires_at' => now()->addDays(3)->timestamp],
        ]),
    ]);
}

it('shows the home page with the prices', function () {
    fakePriceApi();

    $this->get('/')
        ->assertOk()
        ->assertSee('Laravel beyond CRUD')
        ->assertSee('Buy Course')
        ->assertSee('97.30')
        ->assertSee('199')
        ->assertDontSee('ending in');
});

it('shows a countdown when a discount is active', function () {
    fakePriceApi(discountActive: true);

    $this->get('/')
        ->assertOk()
        ->assertSee('BLACK FRIDAY ending in')
        ->assertSee('timer.days', false)
        ->assertSee('139');
});

it('shows the home page when the prices cannot be fetched', function () {
    Http::fake(['spatie.be/api/*' => Http::response(status: 500)]);

    $this->get('/')
        ->assertOk()
        ->assertSee('Buy Course')
        ->assertSee('Buy bundle');
});

it('remembers the referrer in the buy links', function () {
    fakePriceApi();

    $this->get('/?referrer=newsletter')
        ->assertOk()
        ->assertSee('https://spatie.be/products/laravel-beyond-crud?referrer=newsletter');
});

it('shows the sample chapter', function () {
    fakePriceApi();

    $this->get('/sample-chapter')
        ->assertOk()
        ->assertSee('Working with data')
        ->assertSee('97.30');
});

it('shows the static pages', function (string $url, string $text) {
    $this->get($url)->assertOk()->assertSee($text);
})->with([
    ['/terms-of-use', 'Terms of use'],
    ['/privacy', 'Privacy'],
]);

it('serves the downloadable sample chapter', function () {
    expect(public_path('downloads/laravel-beyond-crud-chapter-2.pdf'))->toBeFile();
});
