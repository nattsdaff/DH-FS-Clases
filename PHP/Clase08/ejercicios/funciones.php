<?php

function subirAvatar($datos){

  if($_FILES["avatar"]["error"] === UPLOAD_ERR_OK){
    //echo "No hubo error<br><br>";
    $nombredelarchivo = pathinfo($_FILES["avatar"]["name"], PATHINFO_FILENAME);
    $extensiondelarchivo = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    $archivotemporal = $_FILES["avatar"]["tmp_name"];
    $minuevoarchivo = dirname(__FILE__);
    $minuevoarchivo = $minuevoarchivo . "/subidos/";
    $minuevoarchivo = $minuevoarchivo . $nombredelarchivo. "." . $extensiondelarchivo;

    $errores=[];
    if (!file_exists($minuevoarchivo)){
      move_uploaded_file($archivotemporal, $minuevoarchivo);
    }else{
      $errores["duplicado"]="Este avatar ya existe";
      echo $errores["duplicado"];
      return $errores;
    }
  }
}

?>
