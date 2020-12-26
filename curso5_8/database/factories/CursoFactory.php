<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Curso;
use Faker\Generator as Faker;

$factory->define(Curso::class, function (Faker $faker) {
    return [
        'nome' => 'Curso ' . $faker->unique()->numberBetween(1,100),
        'ativo' => $faker->numberBetween(0,1),
        'status' => $faker->numberBetween(0,2)        
    ];
});
