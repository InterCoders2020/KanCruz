<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Room;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'cost' => $faker->randomDigitNot(0),
        'status' => $faker->numberBetween(0,2),
    ];
});
