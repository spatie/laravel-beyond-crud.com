<?php

use App\Models\Product;
use App\Models\Purchase;
use App\Models\User;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Purchase::class, function (Faker $faker) {
    return [
        'product_id' => factory(Product::class),
        'user_id' => factory(User::class),
        'receipt_url' => $faker->url,
        'paddle_order_id' => $faker->word,
        'paddle_product_id' => $faker->word,
        'paddle_checkout_id' => $faker->word,
        'paddle_response' => '{}',
        'total' => 0,
    ];
});
