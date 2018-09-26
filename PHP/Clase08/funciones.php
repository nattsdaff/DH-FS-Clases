<?php
function subirImagen(){

  //veo que no haya ningun error en la subida
  if($_FILES["avatar"]["error"] === UPLOAD_ERR_OK){
    echo "hola";
    //paso el nombre del archivo a una variable
    $nombre = $_FILES["avatar"]["name"];
    //paso el tipo de archivo a una variable
    $extensiondelarchivo = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    //paso el nombre de archivo temporal que arma php php/temp/temp.php
    $archivo = $_FILES["avatar"]["tmp_name"];

    //Traigo la ruta del archivo que esta siendo ejecutado
    $miarchivo = dirname(__FILE__);
    //y le digo donde tiene que guardarlo
    $miarchivo = $miarchivo . "/archivos/";
    $miarchivo = $miarchivo . "nombrequeelijoyo." . $extensiondelarchivo;

    move_uploaded_file($archivo, $miarchivo);
  }

}
subirImagen();
 ?>
