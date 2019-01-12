<?php

use Faker\Generator as Faker;

$factory->define(App\Clients::class, function (Faker $faker) {
    return [
	    'name' => $faker->name,
	    'email' => $faker->email,
	    'phone' => $faker->phoneNumber,
	    'doc' => $faker->randomNumber(['nbDigits = 11']),
	    'adress' => $faker->address
    ];
});
