<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return "Página de contato";
});

Route::post('/contato', function () {
    return "Via post";
});

Route::put('/contato', function () {
    return "Via put";
});

Route::delete('/contato', function () {
    return "Via delete";
});

/**
 * apenas para alguns metodos especificos
 */
Route::match(['get', 'post'], 'sobre', function () {
    return "Trabalhando com match";
});

/**
 * Todos os metodos
 */
Route::any('todos', function () {
    return "todos";
});

/**
 * passando parametros
 */
Route::get('artigo/{id}', function ($id) {
    return "Artigo id: {$id}";
});

/**
 * passando parametros opcionais
 */
Route::get('produto/{id?}/cor/{cor?}', function ($id = null, $cor = 'red') {
    return "Produtos id: {$id} cor : {$cor}";
});

/**
 * Apelidos nas rotas
 */

Route::get('link', function () {
    return 'Link <a href="' . \route('detalhe') . '">Detalhe</a>';
});

Route::get('teta', function () {
    return "teste";
})->name('detalhe');

// Ligando a um controller
Route::get('aluno', 'Aluno\AlunoController@index');

// apelido com controller
Route::get('livro', ['uses' => 'LivroController@index', 'as' => 'livro.index']);

// Jogando pro lado do controller
Route::resource('produto', 'ProdutoController');

// view

Route::get('home', function () {
    $usuarios = array(
        ["nome" => "Roger"],
        ["nome" => "Derik"],
        ["nome" => "Enes"],
        ["nome" => "Solange"],
        ["nome" => "Natalia"],
    );
    $livros = array();
    return view('home', compact('usuarios', 'livros'));
});

Route::get('usuario', ['uses' => "UsuarioController@index", 'as' => 'usuario']);