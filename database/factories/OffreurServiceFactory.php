<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OffreurService;
use Faker\Generator as Faker;

$factory->define(OffreurService::class, function (Faker $faker) {
    return [
        'name' => $faker->name($gender = 'male'),
        'biographgy' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'email' => $faker->safeEmail,
        'tel' => $faker->e164PhoneNumber
    ];
});
