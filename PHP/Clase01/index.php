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

      echo "<h2>Esto es un array numerico</h2>";
      $arraynumerico = ["como perro y gato", "gato", "loro", "gallina", "la lama que llama"];
      $arraynumerico[] = "perro que ladra no muerde";
      $arraynumerico[] = "el pez por la boca muere";
      var_dump($arraynumerico);
      echo "<p>Me gustan los animales: ".$arraynumerico[0].", ".$arraynumerico[1]. $arraynumerico[2].", ".$arraynumerico[3].", ".$arraynumerico[4].", ".$arraynumerico[5].", ".$arraynumerico[6].". "."</p>" ;

     $arraynumerico[0] = "como gato y perro";
     var_dump($arraynumerico);

     $arraynumerico[100] = "animal posicion 100";
     var_dump($arraynumerico);

     $arraynumerico[16] = "animal posicion 16";
     var_dump($arraynumerico);

     echo "<h2>Esto es un array asociativo</h2>";
     $arrayasociativo = [];
     $arrayasociativo = ["Marca", "Modelo", "Color", "Año", "Patente"];
     var_dump($arrayasociativo);

     ?>
</body>
</html>
