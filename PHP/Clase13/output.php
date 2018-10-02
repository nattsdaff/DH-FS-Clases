<?php
require "clases/Usuario.php";
/*
//esta es la manera de instanciar nuevos usuarios
*/
$usuario1 = new Usuario("RogelioRoldán","15/03/1974", "elroge@gmail.com","44","PASSWORD-MARIEL");
/*
//Cambio atributos del mismo usario llamando a los metodos de la clase
*/
$usuario1->setName("Natalia")->setEmail("nattsdaff@gmail.com");

var_dump($usuario1);
echo "<br><br><br>";
var_dump($usuario1->getName());
var_dump($usuario1->getBirthDate());
var_dump($usuario1->getEmail());
var_dump($usuario1->getEdad());
