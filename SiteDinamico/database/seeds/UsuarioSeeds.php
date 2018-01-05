<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = "Roger Willian";
        $usuario->email = "admin@mail.com";
        $usuario->password = bcrypt('1231');
        $usuario->save();
    }
}
