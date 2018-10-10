<?php

class Circle extends Figura
{
  private $radio;

  public function __CONSTRUCT($radio)
  {
    $this->radio = $radio;
  }
  public function getPerimeter()
  {
    return $this->perimeter = ($this->radio*2)*3.14;
  }
  public function getArea()
  {
    return $this->area = ($this->radio*$this->radio)*3.14;
  }
}
