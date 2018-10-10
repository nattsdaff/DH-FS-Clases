<?php

class Triangle extends Figura
{
  private $base;
  private $side1;
  private $side2;
  private $h;

  public function __CONSTRUCT()
  {
    $this->base = $base;
    $this->side1 = $side1;
    $this->side2 = $side2;
    $this->h = $h;
  }
  public function getPerimeter()
  {
    return $this->perimeter = $this->base + $this->side1 + $this->side2;
  }
  public function getArea()
  {
    return $this->area = (($this->base)*($this->h))/2;
  }
}
