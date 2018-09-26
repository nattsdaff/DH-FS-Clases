<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
    $phpname = "PHP";
    echo "<title>My first $phpname from scratch</title>";
     ?>
    <title>My first php from scratch</title>
  </head>
  <body>
    <?php
      echo "<h1>My first $phpname from scratch</h1>";
      $numeroentero = 44;
      $numerodecimal = 22.22;
      $cadenadetextocomillassimple = 'Esto es una cadena de texto con comillas simples';
      $cadenadetextocomillasdobles = "ESto es cadena de texto con comillas dobles";
      $numeroentero = 'cadena de caracteres';
      $cadenadetextocomillassimple = 33.33;
    echo $numeroentero, "<br>", $numerodecimal, "<br>", $cadenadetextocomillassimple, "<br>", $cadenadetextocomillasdobles, "<br>", $numeroentero, "<br>", $cadenadetextocomillassimple;
    var_dump($numeroentero);
    echo "<h2>$numeroentero</h2>";
    echo "<br>";
    echo $numeroentero;
    echo "<br>";
    ?>
    <?php
      $uno="Tres";
      $dos="tristes";
      $tres="tigres";
      $cuatro="comen";
      $cinco="trigo";
      $seis="en";
      $siente="un";
      $ocho="trigal";
      echo $uno," ", $dos," ", $tres," ", $cuatro," ", $cinco," ", $seis," ", $siete," ", $ocho;
     ?>
  </body>
</html>
