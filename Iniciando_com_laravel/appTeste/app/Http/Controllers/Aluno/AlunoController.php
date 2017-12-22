<?php

namespace App\Http\Controllers\Aluno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlunoController extends Controller
{
    public function index()
    {
        return "Index de aluno" . " <a href=" . route('livro.index') . ">Livro</a>";
    }
}
