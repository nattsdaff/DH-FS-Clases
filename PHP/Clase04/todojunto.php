<?php
////////////////////////// PHP Clase 04 - Punto 6 //////////////////////////
$funcionesEjecutadas = 0;

////////////////////////// PHP Clase 04 - Punto 5 //////////////////////////
include("funciones.php");
include("superficie.php");

function mayorSupeficieCirculo($radio1, $radio2, $radio3){
  //BEGIN punto 6 del ejercicio clase08
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  //END OF punto 6 clase08
  $arrayRadios = [];
  $arrayRadios = [$radio1,$radio2, $radio3];
  $superficieCirculo = [];
  for ($i=0; $i < count($arrayRadios); $i++) {
    $superficieCirculo[] = circulo($arrayRadios[$i]);
//  var_dump($superficieCirculo);
  }
  $mayorCirculo = max($superficieCirculo);
  return $mayorCirculo;
}
$mayorCirculo = mayorSupeficieCirculo(15,5,2);
echo "<br><br><h2>Punto 5</h2>";
echo "La superficie del círculo mayor es: $mayorCirculo";


////////////////////////// PHP Clase 04 - Punto 6 (cont.) //////////////////////////
echo "<br><br><h2>Punto 6</h2>";
echo "La cantidad de funciones ejecutadas es: $funcionesEjecutadas";

////////////////////////// PHP Clase 04 - Punto 7 //////////////////////////
echo "<br><br><h2>Punto 7</h2>";
$mystring = "Me encanta PHP, a mi también me encanta PHP";
$findme = "PHP";
echo strpos($mystring, $findme);;

 ?>
