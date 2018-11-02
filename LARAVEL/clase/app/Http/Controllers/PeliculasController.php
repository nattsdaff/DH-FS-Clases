<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{   
    private $peliculas = [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episodio V",
        5 => "Up",
        6 => "Mary and Max"
        ];


    // public function showMovies(){
    //     return view('peliculas', ['peliculas'=>$this->peliculas]);
    // }

    public function showMovieId($id){
        $peliculas = $this->peliculas[$id];
        return view('peliculas', ['pelicula' => $this->peliculas]);
   }

//    public function buscarPeliculaNombre($nombre){

//     $peliculas = [
//         1 => "Toy Story",
//         2 => "Buscando a Nemo",
//         3 => "Avatar",
//         4 => "Star Wars: Episodio V",
//         5 => "Up",
//         6 => "Mary and Max"
//         ];
    
//     // $peliculaByNombre = $this->$peliculas[][$nombre];
    
//     // for($i = 1, $i <= count($peliculas), $i++){

//     //     var_dump($peliculaByNombre);
//     // }

//     return view('peliculas', ['nombre' => $nombre]);
//     }


}
