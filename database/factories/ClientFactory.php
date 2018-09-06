<?php

use Faker\Generator as Faker;

$factory->define(App\Clients::class, function (Faker $faker) {
    return [
	    'nome' => $faker->name,
	    'email' => $faker->email,
	    'telefone' => $faker->phoneNumber,
//	    'documento' => $faker->
    ];
});
