<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Subir archivo</h1>
    <form action="funciones.php" method="post" enctype="multipart/form-data">

      <!-- OPTIONAL FOR FILES -->
      <input type="hidden" name="MAX_FILE_SIZE" value="1024000">

      <!-- NOMBRE -->
      <label for="nombre">Nombre</label><br>
      <input type="text" name="nombre" value="" id="nombre"><br><br>

      <!-- AVATAR -->
      <label for="avatar">Avatar</label><br>

      <!-- $_FILES tendra toda la info del archivo donde el AVATAR (name del input) sera el $key del este array asociativo y dentro tendra ["avatar"]["error"], ["avatar"]["name"],["avatar"]["tmp_name"], ["avatar"]["size"] y ["avatar"]["type"]-->
      <input type="file" name="avatar" value="" id="avatar"><br><br>

      <!-- BOTON -->
      <input type="submit" name="" value="Enviar">

    </form>
  </body>
</html>
