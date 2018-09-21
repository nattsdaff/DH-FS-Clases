<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
require "categorias-funciones.php";
//  require("categorias.json");
$url = "categorias.json";
$archivojson = file_get_contents($url);
//echo $archivojson;

if($archivojson){
  $contenidojson = json_decode($archivojson, true);
  $categorias = $contenidojson['categorias'];
  //var_dump($contenidojson["categorias"]);
}
if ($_POST) {
  isset($_POST['categorias'])?$categorias=$contenidojson['categorias']:'';
  devolverJson($_POST);
}
//var_dump (count($categorias));
?>

  <form class="" action="" method="post">
    <?php
    for ($i=0; $i < count($categorias); $i++) {
      echo "<input type='checkbox' name='categorias[]' value='$i' >". $categorias[$i]['nombre'].'<br>';
      }
    ?>
    <input type="submit" name="" value="Enviar">
  </form>
  </body>
</html>
