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

Route::get('/', 'auth/LoginController@welcome')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cliente/create'    , 'ClientsController@create')->name('clients.create');
Route::get('/cliente'           , 'ClientsController@index')->name('clients.index');

Route::resource('clients', 'ClientsController');

Route::get('/fornecedor/create'    , 'ProvidersController@create')->name('providers.create');
Route::get('/fornecedor'           , 'ProvidersController@index')->name('providers.index');

Route::resource('providers', 'ProvidersController');

Route::get('/conta/create'    , 'AccountsController@create')->name('accounts.create');
Route::get('/conta'           , 'AccountsController@index')->name('accounts.index');

Route::resource('accounts', 'AccountsController');


Route::post('/recorte/calc'    , 'RecorteController@calc')->name('recorte.calc');
Route::get('/recorte'           , 'RecorteController@index')->name('recorte.index');

Route::resource('recorte', 'RecorteController');

Route::post('/caixa/calc'    , 'CaixaController@calc')->name('caixa.calc');
Route::get('/caixa'           , 'CaixaController@index')->name('caixa.index');

Route::resource('caixa', 'CaixaController');
