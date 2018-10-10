<?php

// class RetanguloConRelleno extends Rectangle
// {
//   protected $color;
//
//   // public function __CONSTRUCT($side1,$side2,$color)
//   // {
//   //   $this->side1 = $side1;
//   //   $this->side2 = $side2;
//   //   $this->color = $color;
//   // }
//   public function setColor($color)
//   {
//     return $this->color = $color;
//   }
//   public function getColor()
//   {
//     return $this->color;
//   }
// }
class RetanguloConRelleno extends Rectangle
{
  protected $color;
  public function __construct ($color)
  {
  parent::getPerimeter();
  $this->color = $color;
  }
}
