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


Route::get('/', 'pruebaController@index');

Route::resource('prueba', 'UserController');


Route::get ('/name/{name}/apellido/{ap?}', 'pruebaController@index2');

Route::get ('/mi_ruta', 'pruebaController@index3');
