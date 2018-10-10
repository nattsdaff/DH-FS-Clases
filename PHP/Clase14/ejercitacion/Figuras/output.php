<?php
require "classes/figura/AbstractFigura.php";

$rectangle1 = new Rectangle;
echo "<H4>Mi rectangulo1 es de 20 x 80 cm</4>";
echo "<H4>Su perímetro es: </4>";
var_dump($rectangle1->getPerimeter(20,80));
echo "<H4>Su area es: </4>";
var_dump($rectangle1->getArea());
echo "<br><br>";
// $circle1 = new Circle(80,20);
// echo "<H4>Mi circle1 es de 20 de diametro</4>";
// echo "<H4>Su perímetro es: </4>";
// var_dump($circle1->getPerimeter());
// echo "<H4>Su area es: </4>";
// var_dump($circle1->getArea());
// echo "<br><br>";
// $triangle1 = new Triangle(30,30,30,15);
// echo "<H4>Mi triangle1 es de 30 de lados x 15 de altura</4>";
// echo "<H4>Su perímetro es: </4>";
// var_dump($triangle1->getPerimeter());
// echo "<H4>Su area es: </4>";
// var_dump($triangle1->getArea());
// echo "<br><br>";
// $FilledRectangle1 = new RetanguloConRelleno(30,20,"red");
// echo "<H4>Mi rectangulo1 con relleno es de 30 x 80 cm</4>";
// echo "<H4>Su color es: </4>";
// var_dump($FilledRectangle1->getColor());
