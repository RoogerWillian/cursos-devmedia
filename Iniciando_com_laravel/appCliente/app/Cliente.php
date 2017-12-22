<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function telefones()
    {
        return $this->hasMany('App\Telefone');
    }

    public function adicionarTelefone(Telefone $telefone)
    {
        return $this->telefones()->save($telefone);
    }
}
