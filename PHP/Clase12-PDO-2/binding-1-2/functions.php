<?php 
require('db-connection.php');
// require('Classes/DBSQL.php');

function addMovie2($datos, $db){

    $consulta = $db->prepare("SELECT * FROM movies");
    $consulta->execute();
    $duplicado = $consulta->fetch(PDO::FETCH_ASSOC);

    var_dump($datos["mes"]);

    if($duplicado['title'] !== $datos['title']){
        $query = $db->prepare("INSERT INTO movies(title, rating, awards, release_date, length) VALUES (
            :titulo, :rating, :awards, :release_date, :length)");
        $query->bindValue(':titulo',$datos["title"],PDO::PARAM_STR);
        $query->bindValue(':rating',$datos["rating"],PDO::PARAM_INT);
        $query->bindValue(':awards',$datos["awards"],PDO::PARAM_INT);
        $query->bindValue(':release_date',$datos["anio"].'-'.$datos['mes'].'-'.$datos['dia'].' 00:00:00',PDO::PARAM_STR);
        $query->bindValue(':length',$datos["length"],PDO::PARAM_INT);
        $query->execute(); 
    }else{
        $query = $db->prepare("UPDATE movies SET rating =:rating, awards =:awards, release_date = :release_date, length =:length WHERE title = :titulo");
        $query->bindValue(':titulo',$datos["title"],PDO::PARAM_STR);
        $query->bindValue(':rating',$datos["rating"],PDO::PARAM_INT);
        $query->bindValue(':awards',$datos["awards"],PDO::PARAM_INT);
        $query->bindValue(':release_date',$datos["anio"].'-'.$datos['mes'].'-'.$datos['dia'].' 00:00:00',PDO::PARAM_STR);
        $query->bindValue(':length',$datos["length"],PDO::PARAM_INT);
        $query->execute(); 
    }
}

function addMovie($datos, $db){

    $consulta = $db->prepare("SELECT * FROM movies");
    $consulta->execute();
    $duplicado = $consulta->fetch(PDO::FETCH_ASSOC);

    var_dump($datos["mes"]);

    if($duplicado['title'] !== $datos['title']){
        $query = $db->prepare("INSERT INTO movies(title, rating, awards, release_date, length) VALUES (
            :titulo, :rating, :awards, :release_date, :length)");
        $query->bindValue(':titulo',$datos["title"],PDO::PARAM_STR);
        $query->bindValue(':rating',$datos["rating"],PDO::PARAM_INT);
        $query->bindValue(':awards',$datos["awards"],PDO::PARAM_INT);
        $query->bindValue(':release_date',$datos["anio"].'-'.$datos['mes'].'-'.$datos['dia'].' 00:00:00',PDO::PARAM_STR);
        $query->bindValue(':length',$datos["length"],PDO::PARAM_INT);
        $query->execute(); 
    }else{
        $query = $db->prepare("UPDATE movies SET rating =:rating, awards =:awards, release_date = :release_date, length =:length WHERE title = :titulo");
        $query->bindValue(':titulo',$datos["title"],PDO::PARAM_STR);
        $query->bindValue(':rating',$datos["rating"],PDO::PARAM_INT);
        $query->bindValue(':awards',$datos["awards"],PDO::PARAM_INT);
        $query->bindValue(':release_date',$datos["anio"].'-'.$datos['mes'].'-'.$datos['dia'].' 00:00:00',PDO::PARAM_STR);
        $query->bindValue(':length',$datos["length"],PDO::PARAM_INT);
        $query->execute(); 
    }
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
