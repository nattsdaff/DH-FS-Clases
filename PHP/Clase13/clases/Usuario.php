<?php

class Usuario
{
  public $nombre;
  public $birthdate;
  public $email;
  public $edad;
  private $password;

  public function __construct($nombre, $birthdate, $email, $edad, $password){
    $this->setName($nombre);
    $this->setBirthDate($birthdate);
    $this->setEmail($email);
    $this->setEdad($edad);
    $this->setPassword($password);
  }

  //getter y setter me permite cambiar aunque sea privado, desde la clase
  public function setName($nombre){
    if($nombre == ''){
    echo "Nombre no puede estár vacío";
    }
    $this->nombre=$nombre;
    return $this;
  }
  public function getName(){
    return $this->nombre;
  }
  //getter y setter me permite cambiar aunque sea privado, desde la clase
  public function setBirthDate($birthdate){
    if($birthdate == ''){
      echo "Fecha de nacimiento no puede estár vacía";
    }
    $this->birthdate=$birthdate;
    return $this;
  }
  public function getBirthDate(){
    return $this->birthdate;
  }
  //validación en setEmail para que el valor sea un mail.
  public function setEmail($email){
    if(strpos($email, '@')){
//      echo $this->email."<br>";
      $this->email = $email;
    }else{
      echo "ingrese un email válido";
    }
    return $this;
  }
  public function getEmail(){
    return $this->email;
  }
//validación en setEdad para que el valor sea un número.
  public function setEdad($edad){
    if(is_numeric($edad)){
      $this->edad = intval($edad);
    }else{
      echo "ingrese un número";
    }
    return $this;
  }
  public function getEdad(){
    return $this->edad;
  }
  public function saludar(){
    echo "Hola " . $this->nombre. "<br>";
  }
  public function encriptarPassword($password){
    $this->password = password_hash($password, PASSWORD_DEFAULT);
    return $this;
  }
  public function setPassword($password){
    if($password == ''){
      echo "Contraseña no puede estar vacía";
    }
    $this->encriptarPassword($password);
    return $this;
  }
}
