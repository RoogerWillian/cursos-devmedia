<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produto = ['nome' => 'Livro'];

        //return view("produto.index", ['nome' => 'Livro']);
        return view("produto.index", compact('produto'));
    }

    public function lista()
    {
        return "Lista de produtos";
    }
}
