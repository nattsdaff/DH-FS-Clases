<?php
class Mascota
{
  private $nombre;
  public $especie;
  public $color;

  public function __construct($nombre, $especie, $color){
    $this->nombre=$nombre;
    $this->especie=$especie;
    $this->color=$color;
  }
  public function setNombre($nombre){
    if($nombre == ""){
    echo "El nombre no puede estár vacío";
    }
    $this->nombre=$nombre;
    return $this;
  }
  public function setColor($color){
    $this->color=$color;
    return $this;
  }
  public function getNombre(){
    return $this->nombre;
  }

}

$mascota1 = new Mascota("oliverio", "gato", "gris");
$mascota1->setNombre("Juano")->setColor("azul");
var_dump($mascota1);
 ?>
