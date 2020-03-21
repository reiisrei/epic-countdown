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

        'date' => $faker->dateTime('Y-m-d', '+100 years'),
        'timezone' => $faker->timezone(),
        'unconfirmed_flag' => $faker->boolean(),
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'status' => $faker->boolean(),
    ];
});
