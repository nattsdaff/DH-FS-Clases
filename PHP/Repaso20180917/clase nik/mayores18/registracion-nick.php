<!DOCTYPE html>
<?php
//	require "funciones.php";
	if ($_POST) {
//		$errores= validar($_POST);
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$username=$_POST["username"];
		$email=$_POST["email"];
		$sexo=$_POST["genero"];
		$diaFecha=$_POST["fnac_dia"];
		$mesFecha=$_POST["fnac_mes"];
		$anioFecha=$_POST["fnac_anio"];
		$categorias=$_POST["categorias"];
		$term=$_POST["terminos"];
		var_dump($errores);
	}
 ?>
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
		</div>(!empty($nombre))?$nombre:''; ?
	</nav>
	<div class="container">
		<div class="row">
			<form role="form" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo (!empty($nombre))?$nombre:''; ?>" placeholder="Ingrese Nombre">
					</div>
					<div class="form-group col-sm-6">
						<label for="apellido">Apellido</label>
						<input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo (!empty($apellido))?$apellido:''; ?>" placeholder="Ingrese Apellido">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="username">Nombre de Usuario</label>
						<input type="text" class="form-control" id="username" name="username" value="<?php echo (!empty($username))?$username:''; ?>" placeholder="Ingrese Nombre de Usuario">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" name="email" value="<?php echo (!empty($email))?$email:''; ?>" placeholder="Ingrese Email">
					</div>
					<div class="form-group col-sm-6">
						<label for="email-confirm">Confirmar Email</label>
						<input type="text" class="form-control" id="email-confirm" name="email_confirm" value="" placeholder="Ingrese Confirmación Email">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="contrasena">Contraseña</label>
						<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese Contraseña">
					</div>
					<div class="form-group col-sm-6">
						<label for="contrasena-confirm">Confirmar Contraseña</label>
						<input type="password" class="form-control" id="contrasena-confirm" name="contrasena_confirm" placeholder="Ingrese Confirmación Contraseña">
					</div>
				</div>
				<!--<div class="form-group">
					<label>Avatar</label>
					<div>
						<input type="file" name="avatar"/>
					</div>
				</div> -->
				<div class="form-group">
					<label>Sexo:</label>
					<div>
						<label class="radio-inline">
							<input type="radio" name="genero" id="genero_masculino" <?php if (isset($sexo)&&$sexo==0) {
								echo "checked";
							} ?> value="0"> Masculino
						</label>
						<label class="radio-inline">
							<input type="radio" name="genero" id="genero_femenino" <?php if(isset($sexo)&&$sexo==1) {
								echo "checked";
							} ?> value="1"> Femenino
						</label>
						<label class="radio-inline">
							<input type="radio" name="genero" id="genero_femenino" <?php if (isset($sexo)&&$sexo==2) {
								echo "checked";
							} ?> value="2"> Otre
						</label>
					</div>
				</div>
				<div class="form-group">
					<label> Fecha de Nacimiento</label>
					<div class="row">
						<div class="col-sm-4">
							<select class="form-control" name="fnac_dia">
							<?php for ($i=1; $i < 32 ; $i++) {
								if (isset($diaFecha)&&$diaFecha==$i) {
									echo "<option selected value=$i>$i</option>";
								}else {
								echo "<option value=$i>$i</option>";
								}
							} ?>
							</select>
						</div>
						<div class="col-sm-4">
							<select class="form-control" name="fnac_mes">
								<option value="1">Enero</option>
								<option value="2">Febrero</option>
								<option value="3">Marzo</option>
								<option value="4">Abril</option>
								<option value="5">Mayo</option>
								<option value="6">Junio</option>
								<option value="7">Julio</option>
								<option value="8">Agosto</option>
								<option value="9">Septiembre</option>
								<option value="10">Octubre</option>
								<option value="11">Noviembre</option>
								<option value="12">Diciembre</option>
							</select>
						</div>
						<div class="col-sm-4">
							<select class="form-control" name="fnac_anio">
								<?php for ($i=1900; $i < 2010 ; $i++) {
									if (isset($anioFecha)&&$anioFecha==$i) {
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
								}?> value="3"> Historia
							</label>
						</div><div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" <?php if (isset($categorias)&&in_array("4",$categorias)) {
									echo "checked";
								}?> value="4"> Ciencias
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="descripcion">Descripción</label>
					<textarea id="descripcion" name="descripcion" class="form-control" rows="3"></textarea>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" id="chk-terminos" name="terminos"> Acepto los términos y condiciones
					</label>
				</div>
				<input type="submit" name="btn_submit" class="btn btn-info" value="Registrarme"/>
			</form>
		</div>
	</div>
	<div class="text-center">&copy; <?php echo date('Y'); ?></div>
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
