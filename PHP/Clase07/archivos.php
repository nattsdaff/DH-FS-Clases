<?php
echo "<br><br><h2>Punto 2a</h2><p>Crear una función que compruebe si existe un archivo llamado texto.txt en el
mismo directorio que archivos.php . En el caso que exista debe abrirlo con
derechos de lectura y escritura para agregarle información. En caso de que
no exista, debe crearlo con derechos de lectura y escritura.</p>";

$archivo = "texto1.txt";

if (!file_exists($archivo)) {
  $openedfile = fopen($archivo,"a+");
  echo "el archivo no existía, pero lo creé.";
  }

  echo "<br><br><h2>Punto 2b</h2><p>Que se escriba “Hola mundo! testing.” 100 veces en el archivo 1 vez por
renglón. Luego de esto que se cierre el archivo.</p>";
$openedfile = fopen($archivo, "a+");
if($openedfile){//SI EL ARCHIVO ESTA ABIERTO...
  for ($i=0; $i <=100 ; $i++) {
   $texto = "Hola mundo! testing.\n";
   $nuevotexto = fwrite($openedfile,$texto);
  }
  fclose($openedfile);//CIERRO EL ARCHIVO
  }


  echo "<br><br><h2>Punto 2c</h2>
  <p>Mostrar los contenidos del archivo texto.txt leyendo todo el archivo junto.</p>";
if($openedfile){//SI EL ARCHIVO ESTA ABIERTO...
  $openedfile = fopen($archivo,"a+");
  $todoeltextojunto = file_get_contents("texto1.txt");
  echo $todoeltextojunto;
  fclose($openedfile);//CIERRO EL ARCHIVO
  }

  echo "<br><br><h2>Punto 2d</h2>
  <p>Mostrar los contenidos del archivo texto.txt leyendo e imprimiendo línea por línea.</p>";
$openedfile = fopen($archivo, "r");
if($openedfile){
  // fgets() Devuelve una línea (linea x linea) de un archivo abierto
  while (($linea = fgets($openedfile)) !== false) {
    echo $linea."<br>";
  }
}

echo "<br><br><h2>Punto 2E</h2><p>Borrar el archivo.</p>";


echo "<br><br><h2>Punto 2F</h2><p>Crear un nuevo archivo llamado texto2.txt que contenga el texto: “Hola
nuevamente mundo!</p>";
//exista o no, primero creo una variable para el archivo
$newarchivo = "texto2.txt";

if (!file_exists($newarchivo)) { //si el archivo NO existe, lo creo abajo, si existe solo le pusheo texto
  $newopenedfile = fopen($newarchivo, "a+");// Abro o creo y se llama ahora $newopenedfile - w+ para lectura y escritura; coloca el puntero del fichero al FINAL del mismo.
};

if ($newopenedfile) { //SI EL ARCHIVO ESTA ABIERTO...
  $texto1 = "Hola mundo nuevamente!"; //paso el texto a poner a una variable
  $texto2 = "¿Este texto pisa el anterior?"; //paso el texto a poner a una variable
  $newtexto = fwrite($newopenedfile, $texto1);//
  $newtexto = fwrite($newopenedfile, $texto2);//
  $newtexto = fwrite($newopenedfile, $texto2);//
  fclose($newopenedfile);
};

?>
