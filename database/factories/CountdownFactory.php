<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Countdown;
use Faker\Generator as Faker;

$factory->define(Countdown::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit(),
        'title' => $faker->firstName(),
        'subtitle' => $faker->lastName(),
        'description' => $faker->paragraph(),
        'completion_text' => $faker->word(),
        'date' => $faker->date('Y-m-d'),
        'time' => "21:00",
        'timezone' => $faker->timezone(),
        'unconfirmed_flag' => $faker->boolean(),
        'picture' => $faker->word(),
        'status' => $faker->boolean(),
    ];
});
