<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'email', 'endereco'];

    public function telefones()
    {
        return $this->hasMany('App\Telefone');
    }

    public function adicionarTelefone(Telefone $telefone)
    {
        return $this->telefones()->save($telefone);
    }

    public function removerTelefones()
    {
        foreach ($this->telefones as $telefone) {
            $telefone->delete();
        }

        return true;
    }
}
