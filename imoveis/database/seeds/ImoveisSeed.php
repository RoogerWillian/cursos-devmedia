<?php

use Illuminate\Database\Seeder;

class ImoveisSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Imovel', 65)->create();
    }
}
