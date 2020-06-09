<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Release;
use Faker\Generator as Faker;

$factory->define(Release::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
    ];
});
