<?php

class Usuario
{
  public $nombre;
  public $username;

  public function __construct($nombre, $username){
//  public function __construct($nombre, $username, $email, $emailConfirm, $password, $passwordConfirm, $fechaNac, $nacionalidad, $sexo, $intereses, $avatar, $descripcion){
    $this->nombre = $nombre;
    $this->username = $username;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function setNombreUsuario($username){
    $this->username = $username;
  }

  public function registrarUsuario($datos){
      $jsonActual = file_get_contents("datos.json");
      $jsonActual = json_decode($jsonActual, true);
      $jsonActual["usuarios"][]=$datos;
      echo "<h4><strong>el json nuevo: </strong></h4>";
      var_dump($jsonActual);
      $jsonNuevos = json_encode($jsonActual);
      file_put_contents("datos.json", $jsonNuevos);
      //header("Location:../exito.php?registro=ok");
  }

  public function validarRegistro($datos){
    // Primero crea un array vacío para ir guardando los distintos errores que surjan durante la validación de cada uno de los datos.
    $validacion=[];
    // Importo y convierto en array los registros que ya tenga creados para validar que no haya usernames/emails iguales.
    $json = file_get_contents("datos.json"); //traigo los datos del json
    $json = json_decode($json, true);// y los paso a un array numerico
    echo "<h4><strong>el json viejo: </strong></h4>";
    var_dump($json);

    if (strlen($datos["nombre"])<2){
        $validacion["nombre"] = 'El nombre debe ser mayor a 2 caracteres.';
    } elseif (!preg_match('/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/', $datos["nombre"])) {
        $validacion["nombre"] = 'El nombre debe contener sólo letras.';
    }

    if (strlen($datos["username"])<6){
        $validacion["username"] = "El nombre de usuario debe ser mayor a 6 caracteres.";
    } elseif (strlen($datos["username"])>16) {
        $validacion["username"] = "El nombre de usuario debe ser menor a 16 caracteres.";
    } elseif(in_array($datos["username"], array_column($json["usuarios"], 'username'))) {
        $validacion["username"] = "El nombre de usuario ingresado ya está en uso. Por favor elija otro.";
    }
    if (empty($validacion)){
      $this->registrarUsuario($datos);
    } // Y si luego de validar los datos el array de errores vuelve vacío, se ejecuta la función de registro (guardado de datos). Sino, muestra los errores donde los haya.
    echo "<h4><strong>errores de validacion: </strong></h4>";
    var_dump($validacion);
    return $validacion;

  }


}
