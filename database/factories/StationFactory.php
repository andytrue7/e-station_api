<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Station;
use Faker\Generator as Faker;

$factory->define(Station::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'status' => $faker->numberBetween(0, 1),
        'city_id' => $faker->numberBetween(1, 7),
    ];
});
