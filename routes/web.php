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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/hola/mundo', function() {
    return "Hola !";
});*/

/*Route::get('/hola/{nombre}', function($nombre) {
    return "Hola {$nombre} !";
});*/

/*Route::get('/hola/{nombre}','HolaController@hola');*/

Route::get('/', function() {
    return view('welcome',['nombre' => 'German']);
    return view('welcome')->with('nombre','German');
    return view('welcome')->withNombre('German');
});