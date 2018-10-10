<?php
require "rectangulo.php";
// require "circulo.php";
// require "triangle.php";
require "rectanguloconrelleno.php";

abstract class Figura
{
  abstract protected function getPerimeter($side1,$side2); //empty, el hijo va a definir cómo se calcula, no es lo mesmo el perimetro de un circulo que el de un rectangulo o un cuadrado
  abstract protected function getArea($side1,$side2); //empty, el hijo va a definir cómo se calcula, no es lo mesmo el area de un circulo que el de un rectangulo o un cuadrado
}
