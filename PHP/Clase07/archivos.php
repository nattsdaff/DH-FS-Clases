<?php
$archivo = "texto1.txt";
if (file_exists($archivo)) {
  $openedfile = fopen($archivo,"a+");
  $texto = "Hola mundo! testing.\n";
  $nuevotexto = fwrite($openedfile,$texto);
//  echo "existe";
  $mostrartodoelcontenido = file_get_contents($nuevotexto);
  echo $mostrartodoelcontenido;
  fclose($openedfile);
  }
?>
