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

use App\Usuario;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'cadcliente'], function () {
    Route::get('/', function () {
        return view('cadcliente');
    });

    Route::post('salvar', 'Controller@salvar');

    Route::get('visualizar', 'Controller@visualizar');

    Route::get('excluir/{id}', function ($id) {
        Usuario::where('id', $id)->delete();
    });
});

