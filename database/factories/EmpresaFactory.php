<?php

use Faker\Generator as Faker;

$factory->define(App\Empresa::class, function (Faker $faker) {
    return [
        'rfc' 		=> $faker->sentence,
        'nombre'	=> $faker->sentence,
        'cp'		=> $faker->sentence,
        'direccion' => $faker->sentence
    ];
});
