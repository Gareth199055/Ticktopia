<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'class_name' => $faker->name,
        'type' => "sport",
        'hours' => "13:00 - 15:00",
        'trainer' => "Fedde",
        'spots' => 10,
    ];
});
