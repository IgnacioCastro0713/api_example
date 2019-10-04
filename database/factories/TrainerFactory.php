<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Trainer::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'age' => $faker->numberBetween(5, 99),
    ];
});
