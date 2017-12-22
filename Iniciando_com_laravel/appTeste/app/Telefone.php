<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = ['descricao', 'telefone', 'cliente_id'];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
