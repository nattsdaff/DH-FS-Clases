<?php
$a = [
  "a" => 1,
  "b" => 2,
  "c" => "Yo <3 JSON"
];

var_dump($a);

$a = json_encode($a);

echo $a;

$b = json_decode($a,true);

var_dump($b);


 ?>
