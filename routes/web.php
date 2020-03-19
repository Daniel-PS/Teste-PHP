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

/* Home */

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@inicio');

// Route::get('/usuarios', 'UsersController@index');
// Route::get('/usuarios/cadastro', 'UsersController@create');
// Route::post('/usuarios', 'UsersController@store');

/* Clientes*/
Route::resource('clientes', 'ClientesController');

// Route::get('/clientes', 'ClientesController@index');
// Route::get('/clientes/cadastrocliente', 'ClientesController@create');
// Route::post('/clientes', 'ClientesController@store');
// Route::get('/clientes/edit', 'ClientesController@edit');

/* Propostas */
Route::resource('propostas', 'PropostasController');

Route::get('export', 'PropostasController@export');
