<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br><br><br>
    <h2>Punto 1</h2>
    <?php
    $numero1 = 5;
    $numero2 = 8;
    ?>
    <p>Variable Numero 1 = <?php echo $numero1 ?></p>
    <p>Variable Numero 2 = <?php echo $numero2 ?></p>
    <?php
    if ($numero1 > $numero2) {
      echo "<p><strong>El número mayor es $numero1</strong></p>";
    }else{
      echo "<p><strong>El número mayor es $numero2</strong></p>";
    }
    ?>
    <br><br><br>
    <h2>Punto 2</h2>
    <?php
    $randomnumber = rand(1,5);
    if ($randomnumber == 3 || $randomnumber == 5) {
      $chosenrandomnumber = $randomnumber;
      echo "<p><strong>El número random elegido es $chosenrandomnumber</strong></p>";
    }else{
      echo "<p><strong>No salió ni el 3 ni el 5</strong></p>";
    }
    ?>
    <br><br><br>
    <h2>Punto 3</h2>
    <?php
    $randomnumber = rand(1,5);
    echo "<p><strong>Salió el $randomnumber</strong></p>";
    if ($randomnumber != 3) {
      echo "<p><strong>El Número NO es 3</strong></p>";
    }else{
      echo "<p><strong>Salió el $randomnumber</strong></p>";
    }
    ?>
    <br><br><br>
    <h2>Punto 4</h2>
    <?php
    $randomnumber1 = rand(1,100);
    echo "<p><strong>Salió el $randomnumber1</strong></p>";

    if ($randomnumber1 > 50) {
      echo "<p><strong>El número random es mayor que 50</strong></p>";
    }else{
      echo "<p><strong>El número es menor a 50</strong></p>";
    }
    ?>
    <br><br><br>
    <h2>Punto 5</h2>
    <?php
    $nombreDeUsuario = "admin";
    $ContraseniaDeUsuario = "1234";

    if ($nombreDeUsuario == "admin" &&  $ContraseniaDeUsuario == "1234") {
      echo "<p><strong>Bienvenido!</strong></p>";
    }else{
      echo "<p><strong>Hay un error en el login</strong></p>";
    }
    ?>
    <br><br><br>
    <h2>Punto 7</h2>
    <?php
    $cantidaddealumnos = 33;
    $casado = false;
    $sexo = "Femenino";
    if ($candidaddealumnos) {
      echo "true";
    }else{
      echo "false";
    }
    ?>
    <br><br><br>
    <h2>Punto 6</h2>
    <?php
    $edad = 22;
    $casado = false;
    $sexo = "Femenino";
    if ($edad >= 18 && !$casado) {
      echo "<p><strong>Bienvenido! Sos mayor de 18 y no estás casado... Genial! </strong></p>";
    }
    ?>
    <br><br><br>
    <h2>Punto 8 - if ternario</h2>
    <?php
      $numero3 = 3;
        echo ($numero3 % 2 == 0 )?"es par":"es impar";
    ?>
    <br><br><br>
    <h2>Punto 9 - </h2>
    <?php
      $arraynombres = ["Pedro","Juan", "Albertito"];
      $selector = rand(0,2);
      $nombre1 = $arraynombres[$selector];

      switch ($nombre1) {
        case 'Pedro':
          echo "Hola $nombre1";
          break;
        case 'Juan':
          echo "Hola $nombre1";
          break;
        case 'Albertito':
          echo "Hola $nombre1";
          break;
        default:
          echo "No hay a quien saludar";
          break;
      }
    ?>
    <h2>Punto 10 - test </h2>
    <?php
      $arraycolores = ["Rojo","Azul","Amarillo","violeta","naranja"];
      $selector = rand(0,4);
      $color = $arraycolores[$selector];
      switch ($color) {
        case 'Roja':
          echo "Rojo";
          break;
        case 'Azul':
          echo "Azul";
          break;
        default:
          echo "Amarillo";
          break;
      }
    ?>
   </body>
</html>
