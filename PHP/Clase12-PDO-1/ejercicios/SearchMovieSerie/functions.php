<?php 
require('db-connection.php');
// require('DBSQL.php');

function searchDB($datos, $db){

    switch ($datos['tipo']) {        
        
        case 'tipo_peliculas':
            $sql = 'SELECT title, rating, awards FROM movies WHERE title = "'.$datos['title'].'"';
            $query = $db->prepare($sql);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_ASSOC);
            echo (!$resultado)? 'no es pelicula':"";
            return $resultado;
            break;

        case 'tipo_series':
            $sql = 'SELECT title FROM series WHERE title = "'.$datos['title'].'"';
            $query = $db->prepare($sql);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_ASSOC);
            echo (!$resultado)? 'no es serie':"";
            return $resultado;
            break;

        default:
            $resultado = [];
            break;
    }    
}
function validateForm($datos){
    
    $errores=[];
    
    // title
    if (!$datos["title"]) {
        $errores["title"] = "Este campo no puede estar vacío";
    }
    // tipo 
    if (!$datos['tipo']) {
        $errores["tipo"] = "Este campo no puede estar vacío";
    }

    return $errores;

}

