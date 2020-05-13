<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Service;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'cost' => $faker->randomDigitNot(0),
        'description' => $faker->text(20),
    ];
});
