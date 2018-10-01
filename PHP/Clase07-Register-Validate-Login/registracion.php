<!DOCTYPE html>
<?php
	//1. if($_POST) --> Si hubo un $_POST, le asigno el valor del post[] a una variable. Una por campo, checkbox, radio, etc.
	//2. persistencia de datos en cada campo
	//3.require archivo funciones donde voy a validar
	//4.Corro la funcion "validar" dentro del if($_POST) SOLO para ver los errores. La funcion validar solo quiere saber si hubo error, o sea, si esta mal el campo.
	require "funciones.php";
	//array meses para que muestre nombres y no número de mes
	$meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","Septiembre","octubre","Noviembre","Diciembre"];

if($_POST){ // 1. SI EXISTE UN POST
	// //SI NO HUBO ERRORES, REGISTRO AL USUARIO
	// if (empty($errores)) {
	registrarUsuario($_POST);
	// }

	// 2. asigno el valor del campo a una $variable
	isset($_POST["nombre"])?$nombre=$_POST["nombre"]:"";
	isset($_POST["apellido"])?$apellido=$_POST["apellido"]:"";
	isset($_POST["username"])?$username=$_POST["username"]:"";
	isset($_POST["email"])?$email=$_POST["email"]:"";
	isset($_POST["email_confirm"])?$email_confirm=$_POST["email_confirm"]:"";
	isset($_POST["genero"])?$genero=$_POST["genero"]:"";
	isset($_POST["fnac_dia"])?$diaFecha=$_POST["fnac_dia"]:"";
	isset($_POST["fnac_mes"])?$mesFecha=$_POST["fnac_mes"]:"";
	isset($_POST["fnac_anio"])?$anioFecha=$_POST["fnac_anio"]:"";
	isset($_POST["categorias"])?$categorias=$_POST["categorias"]:"";
	isset($_POST["terminos"])?$term=$_POST["terminos"]:'';
	isset($_POST["contrasena"])?$contrasena=$_POST["contrasena"]:'';
	isset($_POST["contrasena_confirm"])?$contrasena_confirm=$_POST["contrasena_confirm"]:'';
	isset($_POST["descripcion"])?$descripcion=$_POST["descripcion"]:"";

	//El array de ERRORES se crea dentro de la funcion, si no lo paso a una variable (RETURN), ese array vive y muere ahí.
	$errores = validarRegistro($_POST);

	//Si no hay errores, entonces guardo el usuario
	if (empty($errores)) {
		guardarUsuario($_POST);
		}
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
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<form role="form" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre"
						value="<?php echo (!empty($nombre))?$nombre:''; ?>" placeholder="Ingrese Nombre">
						<?php echo (isset($errores["nombre"]))?'<p style="color:red;">'.$errores["nombre"].'</p>':""; ?>
					</div>
					<div class="form-group col-sm-6">
						<label for="apellido">Apellido</label>
						<input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo (!empty($apellido))?$apellido:''; ?>" placeholder="Ingrese Apellido"><?php echo (isset($errores["apellido"]))?'<p style="color:red;">'.$errores["apellido"].'</p>':""; ?>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="username">Nombre de Usuario</label>
						<input type="text" class="form-control" id="username" name="username" value="<?php echo (!empty($username)?$username:"") ?>" placeholder="Ingrese Nombre de Usuario"><?php echo (isset($errores["username"]))?'<p style="color:red;">'.$errores["username"].'</p>':""; ?>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" name="email" value="<?php echo(!empty($email))?$email:"" ?>" placeholder="Ingrese Email">
						<?php echo (isset($errores["email"]))?'<p style="color:red;">'.$errores["email"].'</p>':""; ?>
							<?php echo (isset($errores["email_conf"]))?'<p style="color:red;">'.$errores["email_conf"].'</p>':""; ?>
					</div>
					<div class="form-group col-sm-6">
						<label for="email-confirm">Confirmar Email</label>
						<input type="text" class="form-control" id="email-confirm" name="email_confirm" value="<?php echo (!empty($email_confirm))?$email_confirm:"" ?>" placeholder="Ingrese Confirmación Email"><?php echo (isset($errores["email_conf"]))?'<p style="color:red;">'.$errores["email_conf"].'</p>':""; ?>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="contrasena">Contraseña</label>
						<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese Contraseña"><?php echo (isset($errores["contrasena"]))?'<p style="color:red;">'.$errores["contrasena"].'</p>':""; ?>
						<?php echo (isset($errores["contrasena_conf"]))?'<p style="color:red;">'.$errores["contrasena_conf"].'</p>':""; ?>
					</div>
					<div class="form-group col-sm-6">
						<label for="contrasena-confirm">Confirmar Contraseña</label>
						<input type="password" class="form-control" id="contrasena-confirm" name="contrasena_confirm" placeholder="Ingrese Confirmación Contraseña"><?php echo (isset($errores["contrasena_conf"]))?'<p style="color:red;">'.$errores["contrasena_conf"].'</p>':""; ?>
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
							<input type="radio" name="genero" id="genero_femenino"
								<?php
									if(isset($genero)&&$genero==1) {
										echo "checked";
									} ?>
									value="1"> Femenino
						</label>
						<label class="radio-inline">
							<input type="radio" name="genero" id="genero_masculino"
							<?php
									if (isset($genero)&&$genero==2) {
										echo "checked";
									} ?>
									value="2"> Masculino
						</label>
					</div>
				</div>
				<div class="form-group">
					<label> Fecha de Nacimiento</label>
					<div class="row">
						<div class="col-sm-4">
							<select class="form-control" name="fnac_dia">
								<?php
									for ($i=1; $i < 32 ; $i++) {
										if(isset($diaFecha)&&$diaFecha==$i){
											echo "<option selected value=$i>$i</option>";
										}else{
											echo "<option value=$i>$i</option>";
										}
									}
								 ?>
							</select>
						</div>
						<div class="col-sm-4">
							<select class="form-control" name="fnac_mes">
								<?php
								for ($i=1; $i < 13 ; $i++) {
									if(isset($mesFecha)&&$mesFecha==$i){
										echo "<option selected value=$i>$i</option>";
									}else{
										echo "<option value=$i>$i</option>";
									}
								}
								?>
							</select>
						</div>
						<div class="col-sm-4">
							<select class="form-control" name="fnac_anio">
								<?php
								for ($i=1900; $i < 2017; $i++) {
									if(isset($anioFecha)&&$anioFecha==$i){
										echo "<option selected value=$i>$i</option>";
									}else{
										echo "<option value=$i>$i</option>";
									}
								}
								 ?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Categorías</label>
					<div>
						<div class="checkbox">
							<label>
								<?php
								//esto es valido tanto como la opcion de Geografia
								if(isset($categorias)&&in_array("1",$categorias)){
									echo "<input type='checkbox' name='categorias[]' value='1' checked > Deportes";
									} else {
										echo "<input type='checkbox' name='categorias[]' value='1'> Deportes";
									};
								 ?>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" value="2" <?php echo (isset($categorias)&&in_array("2",$categorias))? "checked":''; ?> > Geografía
							</label>
						</div><div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" value="3"<?php echo (isset($categorias)&&in_array("3",$categorias))? "checked":''; ?> > Historia
							</label>
						</div><div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" value="4" <?php echo (isset($categorias)&&in_array("4",$categorias))? "checked":''; ?> > Ciencias
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="descripcion">Descripción</label>
					<textarea id="descripcion" name="descripcion" class="form-control" rows="3" value="<?php echo (!empty($descripcion))?$descripcion:''; ?>"></textarea>
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
