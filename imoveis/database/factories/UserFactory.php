<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Imovel::class, function (Faker $faker) {
    return [
        'descricao' => $faker->name,
        'logradouroEndereco' => $faker->address,
        'bairroEndereco' => $faker->streetAddress,
        'numeroEndereco' => $faker->numberBetween(1, 999),
        'cepEndereco' => $faker->postcode,
        'cidadeEndereco' => $faker->randomElement(['Ipaussu', 'Santa Cruz do Rio Pardo', 'Ourinhos', 'Bauru', 'Seatle', 'Budapeste', 'Sidney']),
        'preco' => $faker->numberBetween(50000, 999000),
        'qtdQuartos' => $faker->numberBetween(1, 10),
        'tipo' => $faker->randomElement(['apartamento', 'casa', 'kitnet']),
        'finalidade' => $faker->randomElement(['venda', 'locação'])
    ];
});
