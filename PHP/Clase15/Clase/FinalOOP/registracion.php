<?php
require "functions.php";
require "Classes/User.php";
require "Classes/Validate.php";
require "Classes/DB.php";

$db = new JSONDB();

if ($_POST) {

	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$usuario=$_POST["username"];
	$email=$_POST["email"];
	$password = $_POST['contrasena'];

	$user = new User($nombre, $apellido, $usuario, $email, $password);
	// var_dump($user);
	// exit;
	$errores = Validate::validacionRegistro($db, $user, $_POST);
	// var_dump($errores);
	// exit;;
	if (empty($errores)) {
		$db->guardarUsuario($user);
		header('Location: exito.php');
		exit;
	}

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registración</title>
	<meta name="description" content="Registración de prueba">

	<!-- Bootstrap -->
	<link href="assets/libs/bootstrap-3/css/bootstrap.min.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-links">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Proyecto</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-links">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Inicio</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<form role="form" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo (!empty($nombre))?$nombre:""; ?>" placeholder="Ingrese Nombre">
						<?php echo (isset($errores["nombre"]))?'<p style="color:red;">'.$errores["nombre"].'</p>':""; ?>
					</div>
					<div class="form-group col-sm-6">
						<label for="apellido">Apellido</label>
						<input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo (!empty($apellido))?$apellido:""; ?>" placeholder="Ingrese Apellido">
						<?php if (isset($errores["apellido"])) {
							//ejemplo toia
							echo '<p style="color:red;">'.$errores["apellido"].'</p>';
						} ?>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="username">Nombre de Usuario</label>
						<input type="text" class="form-control" id="username" name="username" value="<?php echo (!empty($usuario))?$usuario:""; ?>" placeholder="Ingrese Nombre de Usuario">
						<?php echo (isset($errores["username"]))?'<p style="color:red;">'.$errores["username"].'</p>':""; ?>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" name="email" value="<?php echo (!empty($email))?$email:""; ?>" placeholder="Ingrese Email">
						<?php echo (isset($errores["email"]))?'<p style="color:red;">'.$errores["email"].'</p>':""; ?>
							<?php echo (isset($errores["email_conf"]))?'<p style="color:red;">'.$errores["email_conf"].'</p>':""; ?>
					</div>
					
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="contrasena">Contraseña</label>
						<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese Contraseña">
						<?php echo (isset($errores["contrasena"]))?'<p style="color:red;">'.$errores["contrasena"].'</p>':""; ?>
						<?php echo (isset($errores["contrasena_conf"]))?'<p style="color:red;">'.$errores["contrasena_conf"].'</p>':""; ?>
					</div>
					<div class="form-group col-sm-6">
						<label for="contrasena-confirm">Confirmar Contraseña</label>
						<input type="password" class="form-control" id="contrasena-confirm" name="contrasena_confirm" placeholder="Ingrese Confirmación Contraseña">
						<?php echo (isset($errores["contrasena_conf"]))?'<p style="color:red;">'.$errores["contrasena_conf"].'</p>':""; ?>
					</div>
				</div>
				
				<div class="checkbox">
					<label>
						<input type="checkbox" id="chk-terminos" name="terminos"> Acepto los términos y condiciones
					</label>
					<?php echo (isset($errores["terminos"]))?'<p style="color:red;">'.$errores["terminos"].'</p>':""; ?>
				</div>
				<input type="submit" class="btn btn-info" value="Registrarme"/>
			</form>
		</div>
	</div>
	<div class="text-center">&copy; <?php echo date('Y'); ?></div>
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
