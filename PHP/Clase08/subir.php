<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Subir archivo</h1>
    <form action="funciones.php" method="post" enctype="multipart/form-data">
      <!-- option -->
      <input type="hidden" name="MAX_FILE_SIZE" value="1024000">

      <label for="nombre">Nombre</label><br>
      <input type="text" name="nombre" value="" id="nombre"><br><br>
      <label for="avatar">Avatar</label><br>
      <input type="file" name="avatar" value="" id="avatar"><br><br>
      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>
