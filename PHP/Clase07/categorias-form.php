<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
require "categorias-funciones.php";

$url = "categorias.json";
$archivojson = file_get_contents($url);
echo "<pre>";
echo $archivojson;
echo "<pre>";

if($archivojson){
  $contenidojson = json_decode($archivojson, true);
  $categorias = $contenidojson['categorias'];
  echo "<pre>";
  var_dump($categorias[0]['id']);
  echo "<pre>";
}
if ($_POST) {
  isset($_POST['categorias'])?$categorias=$contenidojson['categorias']:'';
  encodeJson($_POST);
}
?>

  <form class="" action="" method="post">
    <?php
    for ($i=0; $i < count($categorias); $i++) {
      echo "<input type='checkbox' name='categorias[$i]' value='$i' >". $categorias[$i]['nombre'].'<br>';
      }
    ?>
    <input type="submit" name="" value="Enviar">
  </form>
  </body>
</html>
