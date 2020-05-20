<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [

        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'check_in' => $faker->dateTimeBetween('-15 days', '-6 days'),
        'check_out' => $faker->dateTimeBetween('-5 days', 'now'),
        'guests' => $faker->randomDigitNot(0),
        'rooms' => $faker->numberBetween(1,3),
        'pet' => $faker->boolean,
        'breakfast' => $faker->boolean,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
    ];
});
