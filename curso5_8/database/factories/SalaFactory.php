<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sala;
use Faker\Generator as Faker;

$factory->define(Sala::class, function (Faker $faker) {
    return [
        'nome' => 'Sala ' . $faker->unique()->numberBetween(1,100),
        'qtdAlunos' => $faker->numberBetween(20,60),
        'ativo' => $faker->numberBetween(0,1),
        'projetor' => 1
    ];
});
