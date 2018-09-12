<?php
echo '<p> Array de $_GET. <br>
Para probarlo, se completa con query strings en la url. <br>
Ej: http://localhost/get-post.php?nombre=alejandro&apellido=vivone <br>
En cirucmnstancia de proyecto, el query string ser genera desde un formulario con method="GET".</p>';
var_dump($_GET);
echo "<p> =================================== </p>";
echo '<p> Array de $_POST. <br>
La varible se completa al enviar un formualio con method="POST".</p>';
var_dump($_POST);
echo "<p> =================================== </p>";
?>
<h3>Probá enviar el formualario cambiando el valor del atributo "method" y fiajate como responde caada una de las variables.</h3>
<form class="" action="" method="POST">
  <div class="form-group">
    <label for="">Nombre</label>
    <input type="text" name="nombre" value="">
    <br><br>
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" value="">
    <br><br>
  </div>
  <div class="form-group">
    <label for="">password</label>
    <input type="password" name="password" value="">
    <br><br>
  </div>
  <button type="submit" name="button">Enviar</button>

</form>

<p>
  <a href="index.php">Ir a index.php</a>
</p>
