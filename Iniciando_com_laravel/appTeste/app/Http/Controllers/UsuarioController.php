<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = new Usuario();
        $user = $usuario->getUsuario();
        $lista = Usuario::listaUsuarios();

        return view('usuario.index', compact('user', 'lista'));
    }
}
