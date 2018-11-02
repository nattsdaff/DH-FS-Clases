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

Route::get('ejercicio-a/{prod}', function($p){
    return $p;
});

Route::get('ejercicio-b/{prod}', function($param){
    if($param%2==0){
        return "es par";
    }
});

Route::get('ejercicio-c/{prod}/{num?}', function($param1, $param2 = null){
    if($param2!=null){
        return $param1*$param2;
    }else if( $param2%2 == 0){
        return "es par";
    }else{
        return "es impar";
    }
});

// Route::get('resultado/{num1}/{num2?}', 'EjerciciosController@resultado');

// Route::get('peliculas', 'PeliculasController@mostrarPelicula');

// Route::get('id','PeliculasControler@show');

// PONER LA RUTA COMPLETA - > LO ESTATICO ('peliculas) Y LO VARIABLE (id)
// http://localhost/peliculas/1 
// Route::get('peliculas/{id}', 'PeliculasController@buscarPeliculaId');

// Route::get('peliculas/buscar/{nombre}','PeliculasController@buscarPeliculaNombre');

Route::get('peliculas/{id?}', 'PeliculasController@showMovieId');