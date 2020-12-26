<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Aluno;
use Faker\Generator as Faker;

$factory->define(Aluno::class, function (Faker $faker) {
    $nome = $faker->firstName;
    $sobrenome = $faker->lastName;
    return [
        'nome' => $nome,
        'sobrenome' => $sobrenome,
        'nomeCompleto' => $nome . ' ' . $sobrenome,
        'ra' => $faker->unique()->numberBetween(1234,2000),
        'endereco' => $faker->address
    ];
});
