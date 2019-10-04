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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('usuarios')->middleware('auth')->group(function() {
    Route::get('/', 'UsersController@index')->name('users.index');
});


Route::get('/produtos', 'ProdutosController@index')->name('produtos.index');
Route::get('/produtos/novo', 'ProdutosController@create')->name('produtos.create')->middleware('auth');
Route::post('/produtos', 'ProdutosController@store')->name('produtos.store')->middleware('auth');
Route::get('/produtos/edit/{id}', 'ProdutosController@edit')->name('produtos.edit')->middleware('auth');






Route::put('/produtos/{id}', 'ProdutosController@update')->name('produtos.update')->middleware('auth');
Route::delete('/produtos/{id}', 'ProdutosController@destroy')->name('produtos.destroy')->middleware('auth');