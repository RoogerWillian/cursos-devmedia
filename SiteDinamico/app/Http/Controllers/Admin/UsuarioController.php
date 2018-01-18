<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        $credenciais = [];
        $credenciais['email'] = $request->input('email');
        $credenciais['password'] = $request->input('password');

        if (Auth::attempt($credenciais)) {
            \Session::flash('mensagem', ['msg' => 'Login realizado com sucesso', 'class' => 'green white-text']);
            return redirect()->route('admin.principal');
        } else {
            \Session::flash('mensagem', ['msg' => 'E-mail ou senha incorrentos', 'class' => 'red white-text']);
            return redirect()->route('admin.login');
        }
    }

    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
