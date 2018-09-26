<?php
function encodeJson($datos){
  var_dump($datos);
  $nuevosdatos = json_encode($datos);
//  var_dump($nuevosdatos);
  escribirJson($nuevosdatos);
  return $nuevosdatos;
  }

function escribirJson($datos){
  if(!file_exists("categorias-seleccionados.json")){
    $openedfile = fopen("categorias-seleccionados.json","a+");
    $contenidojson = fwrite($openedfile, $datos);
    fclose($openedfile);
  }
}
 ?>
