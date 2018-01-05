<?php

namespace App\Http\Controllers\Admin;

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
            return redirect()->route('admin.principal');
        } else {
            return redirect()->route('site.home');
        }
    }
}
