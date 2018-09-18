<?php

use App\Models\Propietario;
use Faker\Generator as Faker;

$factory->define(Propietario::class, function (Faker $faker) {
    return [
        'identificacion' => $faker->numberBetween(1, 10000),
        'nombre' => $faker->name,
        'apellido' => $faker->firstName
    ];
});
