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



Route::get('/', function () {
    return view('welcome');
});


Route::get('/contas', 'ContasPagarController@listar');

Route::get('/contas/cadastro', 'ContasPagarController@cadastro');

/*
	EXEMPLOS DE AUTENTICAÇÃO POR ROTA
	Route::get('/contas/cadastro', 'ContasPagarController@cadastro', function(){})->middleware('auth');
	Route::get('/contas/cadastro', 'ContasPagarController@cadastro', function(){})->middleware('auth.basic');
	//auth.basic abre janela de autenticacao do navegador
*/

Route::post('/contas/salvar', 'ContasPagarController@salvar');

Route::get('/contas/editar/{id}', 'ContasPagarController@editar');
Route::post('/contas/update/{id}', 'ContasPagarController@update');

Route::get('/contas/apagar/{id}', 'ContasPagarController@apagar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('contas');
