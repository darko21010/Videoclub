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
    //return view('welcome');
    return ("Pantalla Principal");
});

Route::get('/login', function () {
    //return view('welcome');
    return ("Login usuario");
});

Route::get('/logout', function () {
    //return view('welcome');
    return ("Logout usuario");
});

Route::get('/catalog', function () {
    //return view('welcome');
    return ("Listado de peliculas");
});

Route::get('/catalog/show/{id}', function () {
    //return view('welcome')));
    return ("Vista detalle pelicula {id}");
});

Route::get('/catalog/create', function () {
    //return view('welcome');
    return ("Añadir pelicula");
});

Route::get('/catalog/edit/{id}', function () {
    //return view('welcome');
    return ("Modificar pelicula {id}");
});