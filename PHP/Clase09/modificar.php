<?php
 session_start();
 if(!isset($_SESSION["contador"])){
   $_SESSION["contador"] = 0;
 }
 if(isset($_POST["incrementar"])){
   $_SESSION["contador"]++;
 }
 if(isset($_POST["reiniciar"])){
   $_SESSION["contador"] = 0;
 }
 echo "<br>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title></title>
 </head>
 <body>
   <form class="" action="" method="post">
     <button type="submit" name="reiniciar">Reiniciar</button>
     <button type="submit" name="incrementar">Incrementar</button>
   </form>
 </body>
</html>
