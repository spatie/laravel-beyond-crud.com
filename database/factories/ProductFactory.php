<?php

use App\Models\Product;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'type' => $faker->randomElement([
            Product::TYPE_VIDEOS,
        ]),
        'price' => $faker->numberBetween(50, 150),
        'paddle_product_id' => $faker->word,
    ];
});
