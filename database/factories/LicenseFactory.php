<?php

use App\Models\License;
use App\Models\Product;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(License::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'product_id' => factory(Product::class),
        'key' => Str::random(64),
        'expires_at' => $faker->dateTimeBetween('now', '+1 year'),
    ];
});
