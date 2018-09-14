<?php
$archivo = fopen('texto.txt','a+');//QUE COMILLAS VAN?????
$tamanio = filesize('texto.txt');
$contenido = fread($archivo,$tamanio);
var_dump($contenido);

$actual = file_get_contents('texto.txt');
$actual .= "Texto agregado";
file_put_contents('texto.txt', $actual);

$optimizado = file_get_contents('texto.txt');
echo "<br>".$optimizado;
 ?>
