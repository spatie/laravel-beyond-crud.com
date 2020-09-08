<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Chapter;
use App\Models\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'chapter_id' => factory(Chapter::class),
        'vimeo_id' => $faker->unique()->randomNumber(),
        'title' => $faker->word,
        'slug' => $faker->slug,
        'description' => $faker->paragraph,
        'sort' => $faker->numberBetween(0, 10),
        'runtime' => $faker->numberBetween(100, 500),
        'thumbnail' => $faker->imageUrl(),
    ];
});
