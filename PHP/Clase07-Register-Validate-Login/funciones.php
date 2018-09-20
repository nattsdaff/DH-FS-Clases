<?php
function validarDatos($datos){ // validar recibe el POST o el GET como si fuera datos
  //VOY A BUSCAR LO QUE ESTA MAL, NO LO QUE ESTA BIEN
  // 1. Hago un array de error y lo lleno con todo lo que esta mal.
  $errores = [];

  if(strlen($datos["nombre"])<3) { //strlen() cuenta el largo del string-->  ES ERROR si $nombre es MENOR a 3 digitos
    $errores["nombre"]="Por favor ingrese un nombre válido";// al array $errores en la posición ["nombre"] va a devolver "Por favor ingrese..."
  }
  if(strlen($datos["apellido"])<3){// ES ERROR si $apellido es MENOR a 3 digitos
    $errores["apellido"]="<div class='error-message'><p>Por favor ingrese un apellido válido</p></div>";
  }
  if(strlen($datos["username"])<5){// ES ERROR si $apellido es MENOR a 5 digitos
    $errores["username"]="Por favor ingrese un username válido mayor a 5 caracteres";
  }
  //!filter_var() recorre el string hasta que encuentra un char
  if(!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)){//FILTER_VALIDATE_EMAIL es una expresion regular de php, exiten tantas para validar lo que se nos cante.
    $errores["email"]="Por favor ingrese un email válido";
  }
  if($datos["email"]!==$datos["email_confirm"]){
    $errores["email"]="Por favor confirme bien su email";
  }
  if(!$datos["contrasena"]){
    $errores["contrasena"]="Por favor ingrese una contraseña mayor a 8 caracteres";
  }
  if($datos["contrasena"]!== $datos["contrasena_confirm"]){
    $errores["contrasena_confirm"]="Las contraseñas no son iguales";
  }
  if(!$datos["genero"]){
    $genero["genero"]="Por favor elija su sexo";
  }
  if (date("Y")-$datos["fnac_anio"]<18) {
    //header("Location:http://www.nick.com");
  }
  if(!isset($datos["terminos"])){
    $errores["terminos"]="Por favor, llegá al final de la línea";
  }
  return $errores;
  echo $errores;
}
//Si la funcion validar() no dio errores, entonces registro
function registrarUsuario($datos){
  //echo "algo";
    //traigo el json, lo abro y lo pongo en la variable $actuales (array NUMERICO)
    $actuales = file_get_contents("datos.json");
    //decodifico el texto corrido del json en $actuales y como es un array numerico, lo puedo trabajar con FOR()
    $actuales= json_decode($actuales,true);

    //HASHEAMOS LA contrasena QUE VIENE PELADA DESDE LOGIN.PHP
    $datos["contrasena"] = password_hash($datos["contrasena"],PASSWORD_DEFAULT);

    //Refresco el contenido del usuario que estoy registrando $actuales, agregando la contrasena hasheada
    $actuales["usuarios"][] = $datos;

    //codifico en formato json los datos actuales y los paso a una variable
    $nuevos= json_encode($actuales);

    //PUSHEO los datos nuevos al json
    file_put_contents("datos.json",$nuevos);
}
//necesito saber si el username ingresado esta en el array y si la contrasena que ingresa es la correcta con la hasheada en el registrar usuario
function validarLogin($datos){
  $actuales = file_get_contents("datos.json");
  $actuales = json_decode($actuales,true);//aca tenemos un array numerico y puedo trabajar con FOR()
  for ($i=0; $i < count($actuales["usuarios"]); $i++) {
    //var_dump($actuales["usuarios"][$i]["username"]);
    if( $datos["username"] === $actuales["usuarios"][$i]["username"]){
      //verifico si la contrasena recien ingresada (no es algo ya guardado, sino directamente del post reciente) es igual a la que esta guardada y hasheada en el array
      if(password_verify($datos["contrasena"],$actuales["usuarios"][$i]["contrasena"])){
        header("Location:todojoya.php");
      }else{
        return "usuario inexistente o contrasena incorrecta TE DIJE";
        }
      }
    //return "usuario inexistente o contrasena incorrectaasssss";
    }
  }
