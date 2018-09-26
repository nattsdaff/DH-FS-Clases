<?php
  //Esto en un array numerico
  $arrayusuarios = ["nick", "ale", "fran"];
  //Si esta seteado el id en el get...el GET es asociativo y el valor de ID se lo paso por get en el URL, en este caso.
  if (isset($_GET["id"]) && $_GET["id"] < count($arrayusuarios)) {//si se cumplen las dos, le paso el valor a $usuario, lo hago existir.
    $usuario = $arrayusuarios[$_GET["id"]];
    var_dump($arrayusuarios);
  }
  //GENERO EL USUARIO POR POST
  if (isset($_POST["id"]) && $_POST["id"] < count($arrayusuarios)) {//si se cumplen las dos, le paso el valor a $usuario, lo hago existir.
    $usuario = $arrayusuarios[$_POST["id"]];
    var_dump($arrayusuarios);
  }
  if (isset($_POST["edad"])&&$_POST["edad"]<18) {
header("Location:http://corporate.danone.com.ar/ar/descubri/nuestros-negocios/productos-lacteos-frescos/free-page/?tx_bidanonesitemarques_pi1%5Buid%5D=250&cHash=df9199b5d679bdd47b6f12af5013863c");
   }
 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h2>Via GET</h2>
       Hola <?php if (isset($usuario)) {//si esta seteado $USUARIO
         echo $usuario;
       }else{
         echo "visita";
       }
      ?>

      <br><br>

      <h2>Via POST - la única manera de mandar via POST es a traves de un FORMULARIO</h2>
      <?php if(!isset($_POST["id"])){ //TENGO QUE TENER SETEADO EL ID POR POST ANTES ?>
        <form class="" action="arrayusuarios.php" method="post">
          <label for="id-form">Decime tu ID</label>
          <input type="number" name="id" value="" id="id-form"><?php //el VALUE es el que aparece en el post, si no pongo value no reconoce si hablo de id o edad o que ?>
          <label for="edad-form">Decime tu EDAD</label>
          <input type="number" name="edad" value="" id="edad-form">
          <input type="submit" name="" value="ENVIAR">
        </form>
      <?php } else { ?>
        <h1>Bienvenido <?php echo $usuario; ?>!</h1>
        <?php } ?>
   </body>
 </html>
