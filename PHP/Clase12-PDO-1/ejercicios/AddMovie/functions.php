<?php 
require('db-connection.php');
// require('Classes/DBSQL.php');

function addResource($datos, $db){
    $sql = "INSERT INTO movies(title, rating, awards, release_date, length ) VALUES (
        '".$datos['title'] ."',
        '".$datos['rating'] ."',
        '".$datos['awards']."',
        '2008-07-04 00:00:00',
        '".$datos['length'] ."'
        )";
    $query = $db->prepare($sql);
    $query->execute();
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
