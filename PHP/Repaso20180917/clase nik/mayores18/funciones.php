<?php
function validar($datos){
  $errores=[];
  if (strlen($datos["nombre"])<2) {
    $errores["nombre"]= "Por favor ingrese un nombre valido";
  }
  if (strlen($datos["apellido"])<2) {
    $errores["apellido"]= "Por favor ingrese un apellido valido";
  }
  if (strlen($datos["username"])<5) {
    $errores["username"]= "Por favor ingrese un username valido (mayor a 5 chars)";
  }
  if (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
    $errores["email"]= "Por favor ingrese un email valido ";
  }
  if ($datos["email"]!==$datos["email_confirm"]) {
    $errores["email_confirm"]= "Por favor confirme bien su email";
  }
  if (strlen($datos["contrasena"])<8) {
    $errores["contrasena"]= "Por favor ingrese una contraseña de mas de 8 chars";
  }
  if ($datos["contrasena"]!==$datos["contrasena_confirm"]) {
    $errores["contrasena_confirm"]= "Las contraseñas no son iguales.";
  }
  if (!isset($datos["genero"])) {
    $errores["genero"]= "Por favor elija su sexo";
  }
  if (date("Y")-$datos["fnac_anio"]<18) {
      echo "chau";
    header("Location:http://nick.com");
  }
  if (!isset($datos["terminos"])) {
    $errores["terminos"]= "Por favor lee TODOS los terminos y si acceptas hace click en la cajita";
  }

  return $errores;
}
 ?>
