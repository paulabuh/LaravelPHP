<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Materia;
use Faker\Generator as Faker;

$factory->define(Materia::class, function (Faker $faker) {
    return [
        'nome' => 'Materia ' . $faker->unique()->numberBetween(1,100),
        'qtdAlunos' => $faker->numberBetween(20,60),
        'ativo' => $faker->numberBetween(0,1),
        'status' => $faker->numberBetween(0,2)
    ];
});
