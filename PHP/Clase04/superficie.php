<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>PHP - Clase 04</h1>
    <h2>Punto 1</h2>
    <h3>"Superficie Triangulo"</h3>
    <?php
      $superficieTriangulo = 0; //la declaro GLOBAL
      function triangulo($base,$altura){
        //BEGIN punto 6 del ejercicio clase08
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;
        //END OF punto 6 clase08
        global $superficieTriangulo; //pongo global para poder usar la variable GLOBAL
        $superficieTriangulo = ($base*$altura)/2; //le paso resultado
        return $superficieTriangulo; //guardo el dato y salgo con un return
      }
    triangulo(10,5); // anda bien!
    //echo triangulo(10,5); // anda bien!
    echo $superficieTriangulo; //print en pantalla
   ?>
   <br>
   <br>
   <h2>Punto 2</h2>
   <h3>"Superficie Rectangulo"</h3>
    <?php
      //este ejercicio da resultado OK igual que el anterior
      function rectangulo($base,$altura){
        //BEGIN punto 6 del ejercicio clase08
        global $funcionesEjecutadas;
        $funcionesEjecutadas++;
        //END OF punto 6 clase08
        $superficieRectangulo = ($base*$altura); //le paso resultado
        return $superficieRectangulo; //guardo el dato y salgo con un return
      }
    $superficieRectangulo = rectangulo(10,5); // como la variable $superficieRectangulo es local, necesito sacarla afuera y darle el resultado
    echo $superficieRectangulo; //print en pantalla
   ?>
   <br>
   <br>
   <h2>Punto 3</h2>
   <h3>"Superficie Cuadrado"</h3>
   <?php
     //este ejercicio da resultado OK igual que el anterior
     function cuadrado($lado){
       //BEGIN punto 6 del ejercicio clase08
       global $funcionesEjecutadas;
       $funcionesEjecutadas++;
       //END OF punto 6 clase08
       $superficieCuadrado = $lado*2; //variable LOCAL
       return $superficieCuadrado; //guardo el dato y SALGO con RETURN
     }
   $superficieCuadrado = cuadrado(10,5); // como la variable $superficieRectangulo es local, necesito sacarla afuera y darle el resultado
   echo $superficieCuadrado; //print en pantalla
  ?>
   <h2>Punto 4</h2>
   <h3>"Superficie Círculo"</h3>
   <?php
     //este ejercicio da resultado OK igual que el anterior
     function circulo($radio){
       //BEGIN punto 6 del ejercicio clase08
       global $funcionesEjecutadas;
       $funcionesEjecutadas++;
       //END OF punto 6 clase08
       $superficieCirculo = 3.14*($radio*$radio); //variable LOCAL
       return $superficieCirculo; //guardo el dato y SALGO con RETURN
     }
   $superficieCirculo = circulo(20); // como la variable $superficieRectangulo es local, necesito sacarla afuera y darle el resultado
   echo $superficieCirculo; //print en pantalla
   ?>
   <br>
   <br>

  </body>
</html>
