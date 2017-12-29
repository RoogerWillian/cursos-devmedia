<?php

use Illuminate\Support\Facades\Route;


Route::get('/imoveis/remove/{id}', 'ImovelController@remover')->name('imoveis.remove');
/* Resource Controller */
Route::resource('imoveis', 'ImovelController');