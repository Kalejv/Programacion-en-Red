<?php

namespace prueba2\Http\Controllers;

use prueba2\User;
use prueba2\Http\Controllers\Controller;

class PruebaController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(){
        return 'hola desde la funcion show';
    }


    public function index (){
        return view('welcome'); 
    }


    public function index2 ($name, $ap = 'apellido'){
        return 'hola soy  '.$name. ' ' .$ap;
 }

    public function index3 () {

        return 'hola mundo desde mi primera ruta en laravel';
}
}

