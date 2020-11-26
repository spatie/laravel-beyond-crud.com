<?php

namespace App\Http\Front\Controllers;

use Spatie\PriceApi\SpatiePriceApi;

class HomeController
{
    public function __invoke()
    {
        $purchasableId = config('services.spatie_prices_api.purchasable_id');

        $prices = SpatiePriceApi::getPriceForPurchasable($purchasableId);

        return view('front.home.index', [
            'couldFetchPrice' => $prices['couldFetchPrice'],
            'price' => $prices['actual'],
            'priceWithoutDiscount' => $prices['withoutDiscount'],
            'discount' => $prices['discount'],
        ]);
    }
}
