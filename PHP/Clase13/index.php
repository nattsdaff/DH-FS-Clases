<?php
class Mascota
{
  public $nombre;
  public $especie;
  public $color;

  // mediante el constructor le asigno datos a los atributos de la clase
  public function __construct($nombre, $especie, $color){
    $this->nombre = $nombre;
    $this->especie = $especie;
    $this->color = $color;
  }
}

$mascota1 = new Mascota("freya","gato","negro");
$mascota2 = new Mascota("odin","perro","negro");

echo "<pre>";
var_dump($mascota1);
echo "<pre>";
echo "<pre>";
var_dump($mascota2);
echo "<pre>";


 ?>
