<?php
function despertarse($hora,$despertador=7){
  if($hora >= $despertador){
    $respuesta = "Despertate";
  }else{
    $respuesta = "Seguí durmiendo";
  }
  return $respuesta;
}
  $prueba1 = despertarse(10,9);
  $prueba2 = despertarse(8,10);
  echo $prueba1;
  echo $prueba2
 ?>
