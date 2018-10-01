<?php

class Usuario
{
  private $nombre;
  public $fechanacimiento;
  public $email;

  public function __construct($nombre, $fechanacimiento, $email){
    $this->nombre = $nombre;
    $this->fechanacimiento = $fechanacimiento;
    $this->email = $email;
  }
  //getter y setter me permite cambiar aunque sea privado, desde la clase
  public function setMail($email){
    $this->email = $email;
    var_dump ($this);

    return $this;
  }
  public function getMail($email){
    $this->email = $email;
  }

  public function setColor($color){
    $this->color = $color;
  }

}

 ?>
