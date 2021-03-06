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


function registrarUsuario($datos){
    //traigo el json, lo abro y lo pongo en $actuales
    $actuales= file_get_contents("datos.json");
    //decodifico en un array $actuales, es un array NUMERICO y lo puedo trabajar con FOR()
    $actuales= json_decode($actuales,true);
    //HASHEAMOS LA contrasena QUE VIENE PELADA DESDE LOGIN.PHP
    $datos["contrasena"]=password_hash($datos["contrasena"],PASSWORD_DEFAULT);
    $actuales["usuarios"][]=$datos;
    $nuevos= json_encode($actuales);
    file_put_contents("datos.json",$nuevos);
}
//necesito saber si el username ingresado esta en el array y si la contrasena que ingresa es la correcta con la hasheada en el registrar usuario
function validarLogin($datos){
  $actuales= file_get_contents("datos.json");
  $actuales= json_decode($actuales,true);//aca tenemos un array numerico y puedo trabajar con FOR()
  for ($i=0; $i < $actuales["usuarios"]; $i++) {
    //var_dump($actuales["usuarios"]);
    if($datos["username"] === $actuales["usuarios"][$i]["username"]){
      //verifico si la contrasena recien ingresada (no es algo ya guardado, sino directamente del post reciente) es igual a la que esta guardada y hasheada en el array
      if(password_verify($datos["contrasena"],$actuales["usuarios"][$i]["contrasena"])){
        header("Location:todojoya.php");
      }else{
        return "usuario inexistente o contrasena incorrecta";
      }
    }
    return "usuario inexistente o contrasena incorrecta";
  }

}










 ?>
