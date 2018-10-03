<?php
require("clases/Usuario.php");

if($_POST){

  isset($_POST["nombre"])?$nombre=$_POST["nombre"]:"";
	isset($_POST["username"])?$username=$_POST["username"]:"";

  $usuario = new Usuario ($nombre,$username);
  $usuario->validarRegistro($_POST);
  echo "<h4><strong>Instancia nuevo usuario: </strong></h4>";
  var_dump($usuario);
  // Si hay datos por $_POST, se ejecuta la función de validación y se guardan los errores (array) en una variable.


}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro Formulario</title>
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Formulario de Registro</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <section class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?php echo (isset($_POST["nombre"]))?$_POST["nombre"]:''; ?>">
                        <!-- Arriba: persiste el dato, sin importar si está bien o mal -->
                        <!-- Abajo: Si el dato no pasa la validación, muestra un mensaje de error. -->
                        <?php if(isset($validacion["nombre"])){ ?>
                            <small class="form-text text-danger"><?php echo $validacion["nombre"]; ?></small>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="username">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="username" placeholder="Nombre de Usuario" name="username" value="<?php echo (isset($_POST["username"]))?$_POST["username"]:''; ?>">
                        <?php if(isset($validacion["username"])){ ?>
                            <small class="form-text text-danger"><?php echo $validacion["username"]; ?></small>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--cierra row-->


            <button type="submit" class="btn btn-success">Registrarme</button>
        </form>
        <br><br>
    </section>

    <!--BOOTSTRAP JS CDN-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
