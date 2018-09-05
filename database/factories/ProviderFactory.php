<?php

use Faker\Generator as Faker;

$factory->define(App\Providers::class, function (Faker $faker) {
    return [
	    'nome' => $faker->name,
	    'email' => $faker->email,
	    'telefone' => $faker->phoneNumber,
    ];
});
