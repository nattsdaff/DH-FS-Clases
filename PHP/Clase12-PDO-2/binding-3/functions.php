<?php 
require('db-connection.php');

$datos['title']= 'avatar';

//The COUNT(*) function devuelve el numero de rows que matchean con el criterio de busqueda, en este caso, todas => output=24
$stmt = $db->prepare("SELECT COUNT(*) FROM movies");

//The COUNT(*) function devuelve el numero de rows que matchean con el criterio de busqueda, en este caso => output= 2 'La guerra de las galaxias episodio V y IV'
$stmt = $db->prepare("SELECT COUNT(*) FROM movies WHERE title = '".$datos['title']."'");

//The COUNT(*) function devuelve el numero de rows que matchean con el criterio de busqueda, en este caso => output= 2 'La guerra de las galaxias episodio V y IV'
$stmt = $db->prepare("SELECT COUNT(*) AS CUENTA FROM movies WHERE title = '".$datos['title']."'");
$stmt->execute();
$output = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($output);

function addMovie($datos, $db){

    $idMovie = 3;
    $stmt = $db->prepare("SELECT * FROM movies WHERE title = '".$datos['title']."'");
    var_dump($stmt);

}

/*
/* VALIDAR CAMPOS DEL FORM agregarPelicula.PHP
*/
function validateForm($datos){

    $errores=[];
    
    // title
    if (!$datos["title"]) {
        $errores["title"] = "Este campo no puede estar vacío";
    }
    // RATING 
    if (!$datos["rating"]) {
        $errores["rating"] = "Este campo no puede estar vacío";
    }
    // PREMIOS 
    if (!$datos["awards"]) {
        $errores["awards"] = "Este campo no puede estar vacío";
    }
    // LENGTH 
    if (!$datos["length"]) {
        $errores["length"] = "Este campo no puede estar vacío";
    }
    // FECHA 
    if (!$datos["dia"]& ($datos["dia"]!="dia")) {
        $errores["dia"] = "Día no puede estar vacío";
    }
    if (!$datos["mes"]& ($datos["mes"]!="mes")) {
        $errores["mes"] = "Mes no puede estar vacío";
    }
    if (!$datos["anio"]& ($datos["anio"]!="año")) {
        $errores["anio"] = "Año no puede estar vacío";
    }
    // GENERO
    if (!$datos["genero"]& ($datos["genero"]!="Elegir...")) {
        $errores["genero"] = "Año no puede estar vacío";
    }
    return $errores;

}
