<?php
function validar($datos){ // validar recibe el POST o el GET como si fuera datos
  //VOY A BUSCAR LO QUE ESTA MAL, NO LO QUE ESTA BIEN

  // 1. Hago un array de error y lo lleno con todo lo que esta mal.
  $errores = [];

  if(strlen($datos["nombre"])<3) { //strlen() cuenta el largo del string-->  ES ERROR si $nombre es MENOR a 3 digitos
    $errores["nombre"]="Por favor ingrese un nombre válido";// al array $errores en la posición ["nombre"] va a devolver "Por favor ingrese..."
  }
  if(strlen($datos["apellido"])<3){// ES ERROR si $apellido es MENOR a 3 digitos
    $errores["apellido"]="Por favor ingrese un apellido válido";
  }
  if(strlen($datos["username"])<5){// ES ERROR si $apellido es MENOR a 5 digitos
    $errores["username"]="Por favor ingrese un username válido mayor a 5 caracteres";
  }
  //!filter_var() recorre el string hasta que encuentra un caracter
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
}


 function registrarUsuario($datos){
   // guardo en una variable el contenido de un json
   $datosactuales= file_get_contents("datos.json");//get contents
   var_dump($datosactuales);
   exit;
   $actuales= json_decode($actuales,true);
   $datos["contrasena"]=password_hash($datos["contrasena"],PASSWORD_DEFAULT);
   $actuales["usuarios"][]=$datos;
   $nuevos= json_encode($actuales);
   file_put_contents("datos.json",$nuevos);
 }
   function login($datos){
     $actuales= file_get_contents("datos.json");
     $actuales= json_decode($actuales,true);
     for ($i=0; $i < $actuales["usuarios"]; $i++) {
       //explorar como seguir
       echo $actuales["usuarios"][$i];
     }

   }


?>
