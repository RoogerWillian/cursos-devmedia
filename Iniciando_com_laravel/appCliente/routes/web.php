<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //array_add() - Adiciona dado por chave e valor, caso a chave não exista;
    $array = ['nome' => 'Camila', 'idade' => 20];
    $array = array_add($array, 'email', 'camila@gmail.com');

    //array_collapse() - Junta varios arrays em um só
    $array = [['bananan', 'limão'], ['vermelho', 'azul']];
    $array = array_collapse($array);

    //array_divide() - Separar chaves e valores em dois array
    list($key, $value) = array_divide(['nome' => 'Camila', 'idade' => 20]);
    //dd($key, $value);

    //array_except() - Remove dado do array por chave
    $array = ['nome' => 'Camila', 'idade' => 20];
    $array = array_except($array, ['idade']);
    //dd($array);

    //base_path()
    $path = base_path();
    //dd($path);

    //database_path()
    $database_path = database_path();
    //dd($database_path);

    //public_path()
    $public_path = public_path();
    //dd($public_path);

    //store_path()
    $storage_path = storage_path();
    //dd($storage_path);

    //camel_case();
    $texto = "Roger esta bonitão hoje heim";
    //dd(camel_case($texto));

    //snake_case()
    //dd(snake_case($texto));

    //str_limit
//    dd(str_limit($texto, 5));

    return view('welcome');
});

Auth::routes();

Route::get('/cliente', 'ClienteController@index')->name('cliente.index');
Route::get('/cliente/adicionar', 'ClienteController@adicionar')->name('cliente.adicionar');
Route::post('/cliente/salvar', 'ClienteController@salvar')->name('cliente.salvar');
Route::get('/cliente/editar/{id}', 'ClienteController@editar')->name('cliente.editar');
Route::put('/cliente/atualizar/{id}', 'ClienteController@atualizar')->name('cliente.atualizar');
Route::get('/cliente/deletar/{id}', 'ClienteController@deletar')->name('cliente.deletar');
Route::get('/cliente/detalhe/{id}', 'ClienteController@detalhe')->name('cliente.detalhe');

Route::get('/telefone/adicionar/{id}', 'TelefoneController@adicionar')->name('telefone.adicionar');
Route::post('/telefone/salvar/{cliente_id}', 'TelefoneController@salvar')->name('telefone.salvar');
Route::get('/telefone/editar/{id}', 'TelefoneController@editar')->name('telefone.editar');
Route::put('/telefone/atualizar/{id}', 'TelefoneController@atualizar')->name('telefone.atualizar');
Route::get('/telefone/deletar/{id}', 'TelefoneController@deletar')->name('telefone.deletar');
