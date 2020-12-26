<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Professor;
use Faker\Generator as Faker;

$factory->define(Professor::class, function (Faker $faker) {
    $nome = $faker->firstName;
    $sobrenome = $faker->lastName;
    return [
        'nome' => $nome,
        'sobrenome' => $sobrenome,
        'nomeCompleto' => $nome . ' ' . $sobrenome,
        'endereco' => $faker->address,
        'titulo' => 'Dr.'
    ];
});
