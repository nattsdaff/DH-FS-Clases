<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $texto = "cadena de texto - string";
    $number = 1;
    $boolean = true;

    //los arrays en php pueden ser NUMERICOS o ASOCIATIVOS
    $arraynumerico = [1,2,3,4,"hola", "chau"];
    $arrayasociativo = [
      "nombre" => "Ale", //-->acá va COMA, NO punto y coma.
      "apellido" => "Vivone",
      "edad" => "no sabe",
      "colores" => [
        "uno" => "rojo",
        "dos" => "azul",
        "tres" => "amarillo"
        ]
    ]
    // muestra todo menos ARRAYS
  //  echo $texto, $number, $boolean;
    echo "<br>";
    //para ARRAYS se usa var_dump
    var_dump $arraynumerico;
    echo "<br>";
    var_dump $arrayasociativo;

    //el FOR no sirve para arrays asociativos porque recorre posiciones númericas, no de texto.
    for ($i=0; $i < 10; $i++) {
      echo "$i <br>";
    }
    for ($i=0; $i < count($arrayasociativo); $i++) {
      echo "$arrayasociativo[$i] <br>";
    }
    //puedo NO PONER el $key, solo con $value funciona. Si dejo solamente $clave, interpreta que en realidad traigo $datos.
    //foreach ($arrayasociativo as $value) {
    foreach($arrayasociativo as $clave => $datos){//esto puede ser $nombre => descripcion... es aleatorio, uso las palabras que me faciliten la visual, lo importante es que va a ver el key y value.
      if($clave === "colores"){
        foreach ($arrayasociativo[$clave] as $color) {
          echo "$color <br>";
        }else{
          echo "$clave: $datos <br>";
          }
      }
     ?>
  </body>
</html>
