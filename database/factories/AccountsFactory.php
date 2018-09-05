<?php

use Faker\Generator as Faker;

$factory->define(App\Accounts::class, function (Faker $faker) {
    return [
	    'nome' => $faker->text(10),
	    'valor' => rand(1, 1000),
	    'tipo' => rand(0,1),
	    'created_at' => $faker->dateTimeBetween($startDate = '-30 days', $endDate = '+30 days'),
    ];
});
