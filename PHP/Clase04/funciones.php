<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>PHP - Clase 04</h1>
    <h2>Punto 1</h2>
    <?php
      function mayor($num1, $num2, $num3){
        $maxNumber = max($num1,$num2,$num3);
        return $maxNumber; //tengo que usar RETURN para poder acceder a maxNumber desde afuera, RETORNA un valor para $maxNumber
      }
      $maxNumber = mayor(4,2,8);
      echo $maxNumber;
    ?>
    <br>
    <br>
    <br>
    <h2>Punto 2</h2>
    <?php
    echo "<br>";
    echo "Una forma de hacerlo<br>";
    echo "<br>";
    function tabla($base,$limite){
      $arrayNumeros = [];
      for ($i=$base; $i <= $limite; $i++) {
        $arrayNumeros[] = $i;
      }
      return $arrayNumeros;
    }
    $arraydenumeros= tabla(1,19);
    var_dump($arraydenumeros);
    echo "<br>";
    echo "<br>";
    echo "Otra forma de hacerlo";
    echo "<br>";
    function tabla2($base,$limite){
      $arrayNumeros = range($base,$limite);
      return $arrayNumeros;
    }
    $arraydenumeros2= tabla2(1,19);
    var_dump($arraydenumeros2);
    ?>
    <ul>
      <?php foreach ($arraydenumeros2 as $key => $value): ?>
        <li><?php echo $value ?></li>
      <?php endforeach; ?>
    </ul>
    <br>
    <br>
    <br>
    <h2>Punto 3</h2>
    <?php
      $numeroMagico = 12; // es variable GLOBAL
      function mayor2($num1, $num2, $num3=""){
        $maxNumber = max($num1,$num2,$num3);
        return $maxNumber; //tengo que usar RETURN para poder acceder a maxNumber desde afuera, RETORNA un valor para $maxNumber
      }
      $maxNumber = mayor2(4,2,$numeroMagico);
      echo $maxNumber;
     ?>
   <br>
   <br>
   <br>
   <h2>Punto 4</h2>
   <?php
     function tabla3($base,$limite){
       $arrayNumeros = range($base,$limite);
       return $arrayNumeros;
     }
     $arraydenumeros3= tabla3(1,$numeroMagico);
     var_dump($arraydenumeros3);
    ?>
  </body>
</html>
