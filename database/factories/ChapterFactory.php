<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Chapter;
use Faker\Generator as Faker;

$factory->define(Chapter::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'slug' => $faker->slug,
        'sort' => $faker->numberBetween(0, 10),
    ];
});
