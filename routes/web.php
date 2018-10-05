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

Route::get('prueba', 'PruebaController@prueba');

Route::resource ('trainers', 'TrainerController');

Route::get ('/name/{nom}/lastname/{apel}', function($nom,$apel){
	return 'Yo soy '. $nom .' '. $apel;
});
Route::get('/mi_ruta', function (){
	return 'Aloha';
});
