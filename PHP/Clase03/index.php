<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>PHP - Clase 03</h1>
    <h2>Punto 11</h2>
    <?php
    $ceu = array(
      "Italia"=>"Roma",
      "Luxembourg"=>"Luxembourg",
      "Bélgica"=> "Bruselas",
      "Dinamarca"=>"Copenhagen",
      "Finlandia"=>"Helsinki",
      "Francia" => "Paris",
      "Slovakia"=>"Bratislava",
      "Eslovenia"=>"Ljubljana",
      "Alemania" => "Berlin",
      "Grecia" => "Athenas",
      "Irlanda"=>"Dublin",
      "Holanda"=>"Amsterdam",
      "Portugal"=>"Lisbon",
      "España"=>"Madrid",
      "Suecia"=>"Stockholm",
      "Reino Unido"=>"London",
      "Chipre"=>"Nicosia",
      "Lithuania"=>"Vilnius",
      "Republica Checa"=>"Prague",
      "Estonia"=>"Tallin",
      "Hungría"=>"Budapest",
      "Latvia"=>"Riga",
      "Malta"=>"Valletta",
      "Austria" => "Vienna",
      "Polonia"=>"Warsaw") ;
      echo "<h3>Ordenados alfabeticamente por capital</h3>";
      asort($ceu); //asort — Ordena un array y mantiene la asociación de índices
//      var_dump($ceu);
      foreach($ceu as $key => $value) {
        echo "La capital de ".$key." es ".$value."<br>" ;
      }
      echo "<h3>Ordenados alfabeticamente por pais</h3>";
      ksort($ceu); //ksort — Ordena un array por clave
//    var_dump($ceu);
      foreach($ceu as $key => $value) {
        echo "La capital de ".$key." es ".$value."<br>" ;
      }
     ?>
    <br>
    <br>
    <br>
    <h2>Punto 11</h2>
    <?php
    $ceu = array(
      "Italia"=>"Roma",
      "Luxembourg"=>"Luxembourg",
      "Bélgica"=> "Bruselas",
      "Dinamarca"=>"Copenhagen",
      "Finlandia"=>"Helsinki",
      "Francia" => "Paris",
      "Slovakia"=>"Bratislava",
      "Eslovenia"=>"Ljubljana",
      "Alemania" => "Berlin",
      "Grecia" => "Athenas",
      "Irlanda"=>"Dublin",
      "Holanda"=>"Amsterdam",
      "Portugal"=>"Lisbon",
      "España"=>"Madrid",
      "Suecia"=>"Stockholm",
      "Reino Unido"=>"London",
      "Chipre"=>"Nicosia",
      "Lithuania"=>"Vilnius",
      "Republica Checa"=>"Prague",
      "Estonia"=>"Tallin",
      "Hungría"=>"Budapest",
      "Latvia"=>"Riga",
      "Malta"=>"Valletta",
      "Austria" => "Vienna",
      "Polonia"=>"Warsaw") ;
      echo "<h3>Ordenados alfabeticamente por capital</h3>";
      asort($ceu); //asort — Ordena un array y mantiene la asociación de índices
//      var_dump($ceu);
      foreach($ceu as $key => $value) {
        echo "La capital de ".$key." es ".$value."<br>" ;
      }
      echo "<h3>Ordenados alfabeticamente por pais</h3>";
      ksort($ceu); //ksort — Ordena un array por clave
//    var_dump($ceu);
      foreach($ceu as $key => $value) {
        echo "La capital de ".$key." es ".$value."<br>" ;
      }
     ?>
     <br>
     <br>
     <br>
    <h2>Punto 10</h2>
    <?php
      $mascota = [
        "animal" => "perro",
        "edad" => "5 meses",
        "altura" => "0,3 cm",
        "nombre" => "Odín"
      ];
      foreach($mascota as $key => $value) {
        echo $key." es ".$value."<br>" ;
      }
     ?>
     <br>
     <br>
     <br>
    <h2>Punto 6</h2>
    <?php
      $arraynombres = ["toia", "fran", "ale", "sebas", "yo"];
      echo "<strong>Resuelto con FOR </strong><BR>";
      for ($i = 0; $i < count($arraynombres); $i++) {
        echo $arraynombres[$i]."<br>";
      }
      echo "<strong>Resuelto con WHILE </strong><BR>";
      $a = 0;
      while ($a < count($arraynombres)) {
        echo $arraynombres[$a]."<br>";
        $a++;
      }
      echo "<strong>Resuelto con DO-WHILE </strong><BR>";
      $a = 0;
      do {
        echo $arraynombres[$a]."<br>";
        $a++;
      } while($a < count($arraynombres));

     ?>
     <br>
     <br>
     <br>
    <h2>Punto 5</h2>
    <?php
      $vueltas =0;
      $contador = 0;
      do {
        $caramoneda = rand(0,1);
        $vueltas++;
        $caramoneda === 1 ? $contador++ : $contador;
        echo $caramoneda."<br>";
      } while ($contador < 5);
      echo "Dió $vueltas vueltas";
     ?>
    <br><br><br>
    <h2>Punto 4</h2>
    <?php
      $vueltas =0;
      $contador = 0;
      while ($contador < 5) {
        $vueltas++;
        $caramoneda = rand(0,1);
        echo $caramoneda."<br>";
        if ($caramoneda === 1) {
          $contador++;
        }
//        echo $contador."<br>";
      }
      echo "Dió $vueltas vueltas";
     ?>
     <br>
     <br>
     <br>
    <h2>Punto 3</h2>
    <?php
      for ($i=1; $i < 21 ; $i++) {
        if ($i%2 === 0) {
          echo $i."<br>";
        }
      }
     ?>
    <br><br><br>
    <h2>Punto 2</h2>
    <?php
      $randomnumber = rand(1,100);
      //echo $randomnumber;
      for ($i=1; $i <= $randomnumber ; $i++) {
        echo $i."<br>";
      }
     ?>
    <h2>Punto 1</h2>
    <?php
      for ($i=1; $i <= 100 ; $i++) {
        echo $i;
      }
     ?>
     <br>
     <br>
     <br>
  </body>
</html>
