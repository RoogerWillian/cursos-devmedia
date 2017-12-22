<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class LivrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('livros')->insert([
        //  'titulo' => 'Primeiro Livro',
        //'descricao' => 'Descricao do primeiro livro'
        //]);

        factory('App\Livro', 50)->create();
    }
}
