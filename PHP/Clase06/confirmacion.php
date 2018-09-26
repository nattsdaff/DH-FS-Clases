<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if( isset($_GET["nombre"])){
      $nombre = $_GET["nombre"];//puedo ponerlo en variable o no, pero me sirve para usarla luego
    //  echo "Muchas gracias por registrarte " . $_GET['nombre'];//puedo usar asi o directo la variable
    } ?>
    <?php if(isset($_GET["apellido"])){
      $apellido = $_GET["apellido"];
    //  echo "Muchas gracias por registrarte " . $_GET['nombre'];//puedo usar asi o directo la variable
    }
    echo "Muchas gracias por registrarte <br>$nombre <br>$apellido<br>";
    ?>
  </body>
</html>
