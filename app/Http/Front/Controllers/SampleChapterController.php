<?php

namespace App\Http\Front\Controllers;

use Illuminate\Contracts\View\View;
use Spatie\PriceApi\SpatiePriceApi;

class SampleChapterController
{
    public function __invoke(): View
    {
        $purchasableId = config('services.spatie_prices_api.purchasable_id');

        $prices = SpatiePriceApi::getPriceForPurchasable($purchasableId);

        $bundlePrices = SpatiePriceApi::getPriceForBundle(2);

        return view('front.home.sample-chapter', [
            'couldFetchPrice' => $prices['couldFetchPrice'],
            'price' => $prices['actual'],
            'priceWithoutDiscount' => $prices['withoutDiscount'],
            'discount' => $prices['discount'],
            'couldFetchBundlePrice' => $bundlePrices['couldFetchPrice'],
            'bundlePrice' => $bundlePrices['actual'],
            'bundlePriceWithoutDiscount' => $bundlePrices['withoutDiscount'],
            'bundleDiscount' => $bundlePrices['discount'],
        ]);
    }
}
