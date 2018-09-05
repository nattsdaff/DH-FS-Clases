<?php
  echo "Hola Mundo";
  echo "<br>";
  //require("incluir.php");//REQUIRE requiere que el archivo esté. Si no está tira error.Ahi el archivo CORTA y no sigue.
  echo "<br>";
 ?>
<?php
  echo "<br>Incluir con INCLUDE";
  echo "<br>";
  include("incluir.php");//INCLUDE incluye pero si no encuentra no pasa nada, no lo carga pero el archivo sigue leyendose.
 ?>
