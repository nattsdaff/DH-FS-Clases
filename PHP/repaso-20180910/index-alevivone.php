<p> <a href="get-post.php">ir a repaso $_GET y $_POST</a></p>
<?php
$texto = "cadena de texto";
$number = 1;
$boolean = true;
$arrays = [1,2,43,5,"hola", "adios"];
$productos = [
  "nombre" => "Ale",
  "apellido" => "Vivone",
  "edad" => "?",
  "colores" =>[
              "uno"=>"rojo",
              "dos"=>"amarillo",
              "tres"=>"verde"]
];

var_dump($arrayAsociativo["colores"]["dos"]);

echo "$texto  $number  $boolean";
echo "<br>";
echo "<pre>";
var_dump($arrays);
// var_dump($arrayAsociativo);

// for ($i=0; $i <count($arrayAsociativo) ; $i++) {
//   echo "$arrayAsociativo[$i] <br>";
// }
foreach ($productos as $nombre => $descripcion) {
  if ($nombre === "colores") {
    foreach ($productos[$nombre] as $posicion => $descripcion){
      echo "$descripcion <br>";
      }
    }  else {
      echo "$nombre: $descripcion <br>";
  }
}

$cantantes = [
  "Luis" => "Miguel",
  "Charly" => "Garcia"
];

$variableGlobal = "hola Global";

function miFuncion(){
  $variableLocal = "hola Local";
  global $variableGlobal;
  echo $variableGlobal;
  echo "<br>";
  echo $variableLocal;
  echo "<br>";
}
echo "<br>";
$resultado = miFuncion();
echo "<br>";
echo $resultado;
echo "<br>";
echo "============================================";
echo "<br>";
echo $variableGlobal;










?>
