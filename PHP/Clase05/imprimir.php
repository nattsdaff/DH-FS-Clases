<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <br>
    <h1>PHP - Clase 05</h1>
    <h2>Punto 1</h2>
    <?php
      var_dump($_GET);
     ?>
     <br>
     <br>
     <h1>PHP - Clase 05</h1>
     <h2>Punto 2.a</h2>
     <?php
       var_dump($_GET);
      ?>
      <br>
      <h2>Punto 2.b</h2>
      <?php
       echo "Pidiendo solo el dato NOMBRE via get:<br>";
        echo $_GET["nombre"];
       ?>
       <br>
       <h2>Punto 2.c</h2>
       <?php
        echo "Pidiendo todos los valores usando FOREACH:<br>";
         foreach ($_GET as $key => $value) {
           echo "<li>$value</li>";
         }
        ?>
    <br>
    <h2>Punto 3</h2>
    <?php
      var_dump($_POST);
     ?>

     <h2>Punto 5</h2>
     <?php
     var_dump(getallheaders());
     echo "<br>";

        foreach (getallheaders() as $key => $value) {
          echo "$key: $value.<br>";
        }
      ?>
  </body>
</html>
