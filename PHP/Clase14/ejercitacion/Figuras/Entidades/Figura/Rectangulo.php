<?php

class Rectangle extends Figura
{
  protected $side1;
  protected $side2;

  // public function __CONSTRUCT($side1,$side2)
  // {
  //   $this->side1 = $side1;
  //   $this->side2 = $side2;
  // }
  public function getPerimeter($side1,$side2)
  {
    $this->side1 = $side1;
    $this->side2 = $side2;
    return $this->perimeter = ($this->side1*2)+($this->side2*2);
  }
  public function getArea($side1,$side2)
  {
    return $this->area = ($this->side1)*($this->side1);
  }
}
