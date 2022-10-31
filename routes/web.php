<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

//rotas login

Route::get('/login','App\Http\Controllers\ControllerLogin@index');

Route::post('/login/entrar','App\Http\Controllers\ControllerLogin@entrar');

Route::get('/login/sair','App\Http\Controllers\ControllerLogin@sair');


//rotas crud produto

Route::get('/produto','App\Http\Controllers\ControllerProduto@index');

Route::get('/produto/adicionar','App\Http\Controllers\ControllerProduto@adicionar');

Route::post('/produto/salvar','App\Http\Controllers\ControllerProduto@salvar');

Route::get('/produto/editar/{id}','App\Http\Controllers\ControllerProduto@editar');

Route::put('/produto/atualizar/{id}','App\Http\Controllers\ControllerProduto@atualizar');

Route::get('/produto/deletar/{id}','App\Http\Controllers\ControllerProduto@deletar');

//rotas crud usuario

Route::get('/usuario','App\Http\Controllers\ControllerUsuario@index');

Route::get('/usuario/adicionar','App\Http\Controllers\ControllerUsuario@adicionar');

Route::post('/usuario/salvar','App\Http\Controllers\ControllerUsuario@salvar');

Route::get('/usuario/editar/{id}','App\Http\Controllers\ControllerUsuario@editar');

Route::put('/usuario/atualizar/{id}','App\Http\Controllers\ControllerUsuario@atualizar');

Route::get('/usuario/deletar/{id}','App\Http\Controllers\ControllerUsuario@deletar');
