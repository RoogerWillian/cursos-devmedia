<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'sobrenome'];

    public function telefones()
    {
        return $this->hasMany('App\Telefone');
    }
}
