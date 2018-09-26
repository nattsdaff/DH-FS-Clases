<?php
require "functions.php";
$meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","Septiembre","octubre","Noviembre","Diciembre"];
if ($_POST) {
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$usuario=$_POST["username"];
	$email=$_POST["email"];
	$dia= $_POST["fnac_dia"];
	$mes= $_POST["fnac_mes"];
	$anio= $_POST["fnac_anio"];
	if (isset($_POST["categorias"])) {
		$categorias= $_POST["categorias"];
	}else {
		$categorias= [];
	}
	if (isset($_POST["genero"])) {
		$genero= $_POST["genero"];
	}else {
		$genero= [];
	}
	$descripcion= $_POST["descripcion"];
	//
	$errores=validacionRegistro($_POST);
	var_dump($errores);
	if (empty($errores)) {
		guardarUsuario($_POST);
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
					<div class="form-group col-sm-6">
						<label for="email-confirm">Confirmar Email</label>
						<input type="text" class="form-control" id="email-confirm" name="email_confirm" value="" placeholder="Ingrese Confirmación Email">
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
				<div class="form-group">
					<label>Avatar</label>
					<div>
						<input type="file" name="avatar"/>
					</div>
				</div>
				<div class="form-group">
					<label>Sexo</label>
					<div>
						<label class="radio-inline">
							<input type="radio" name="genero" id="genero_masculino" <?php if (isset($genero)&&$genero==0){
								echo "checked";
							} ?> value="0"> Masculino
						</label>
						<label class="radio-inline">
							<input type="radio" name="genero" id="genero_femenino" <?php if (isset($genero)&&$genero==1){
							echo "checked";
						} ?> value="1"> Femenino
						</label>
					</div>
				</div>
				<div class="form-group">
					<label> Fecha de Nacimiento</label>
					<div class="row">
						<div class="col-sm-4">
							<select class="form-control" name="fnac_dia">
							<?php for ($i=1; $i <= 31; $i++) {
								if (isset($dia)&&$dia==$i) {
									echo "<option selected value=$i>$i</option>";
								}else {
									echo "<option value=$i>$i</option>";
								}

							} ?>
							</select>
						</div>
						<div class="col-sm-4">
							<select class="form-control" name="fnac_mes">
							<?php for ($i=0; $i < count($meses); $i++) {
								if (isset($mes)&&$mes==($i+1)) {
										echo "<option selected value=".($i+1).">$meses[$i]</option>";
								}else {
										echo "<option value=".($i+1).">$meses[$i]</option>";
								}

							} ?>
							</select>
						</div>
						<div class="col-sm-4">
							<select class="form-control" name="fnac_anio">
								<?php for ($i=1960; $i < 2016; $i++) {
									if (isset($anio)&&$anio==$i) {
									echo "<option selected value=$i>$i</option>";
								}else {
									echo "<option value=$i>$i</option>";
								}
								} ?>

							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Categorías</label>
					<div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" <?php if (isset($categorias)&&in_array("1",$categorias)) {
									echo "checked";
								} ?> value="1"> Deportes
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" <?php if (isset($categorias)&&in_array("2",$categorias)) {
									echo "checked";
								} ?> value="2"> Geografía
							</label>
						</div><div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" <?php if (isset($categorias)&&in_array("3",$categorias)) {
									echo "checked";
								} ?> value="3"> Historia
							</label>
						</div><div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" <?php if (isset($categorias)&&in_array("4",$categorias)) {
									echo "checked";
								} ?> value="4"> Ciencias
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="descripcion">Descripción</label>
					<textarea id="descripcion" name="descripcion" class="form-control" rows="3"><?php
						echo (isset($descripcion))?$descripcion:"";
					 ?></textarea>
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
