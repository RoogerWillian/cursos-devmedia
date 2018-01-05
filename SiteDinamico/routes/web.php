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
    return view('site.home');
})->name('site.home');

Route::get('/sobre', function () {
    return view('site.sobre');
})->name('site.sobre');

Route::get('/contato', function () {
    return view('site.contato');
})->name('site.contato');

Route::get('/imovel/{id}/{titulo?}', function () {
    return view('site.imovel');
})->name('site.imovel');

Route::get('/admin/login', function () {
    return view("admin.login.index");
})->name('admin.login');

Route::post('/admin/login', 'Admin\UsuarioController@login')->name('admin.login');

Route::get('/admin', function () {
    return view('admin.principal.index');
})->name('admin.principal');