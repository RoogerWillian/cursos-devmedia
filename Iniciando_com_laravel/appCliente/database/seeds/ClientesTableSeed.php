<?php

use Illuminate\Database\Seeder;

class ClientesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Gravando cliente e salvando um telefone pra ele */
        factory('App\Cliente', 10)->create()->each(function ($cliente) {
            $cliente->telefones()->save(factory('App\Telefone')->make());
        });
    }
}
