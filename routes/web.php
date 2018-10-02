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

//Proteção para o grupo, só ver quem está logado
Route::group(['middleware' => 'auth'], function (){

    $this->resource('atletas','AtletaController');
    $this->post('atleta','AtletaController@store')->name('atleta.store');

});




