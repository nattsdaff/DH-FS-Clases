<?php
$nuevosdatos = '';
function devolverJson($datos){
  $nuevosdatos = json_encode($datos, true);
  var_dump($nuevosdatos);
  escribirJson($nuevosdatos);
  return $nuevosdatos;
  }

function escribirJson($datos){
  if(file_exists("categorias.json")){
    $openedfile = fopen("categorias.json","a+");
    $contenidojson = fwrite($openedfile, $datos);
    fclose($openedfile);
  }
}
 ?>
