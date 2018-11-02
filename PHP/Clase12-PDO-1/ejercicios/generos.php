<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php 
    $dsn = "mysql:host=127.0.0.1;dbname=movies_db;port=8889";
    $user='root';
    $pass='root';
    $opt=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    // ABRO LA CONEXION CON UN TRY
    try{
        $db=new PDO($dsn, $user, $pass, $opt);
        var_dump($db);
    }
    catch(PDOException $Exception){
        echo $Exception->getMessage();
    }
    // SI NO PASó el TRY, lo agarro con un CATCH y cargo qué errores vienen
    try{
        $query = $db->query('SELECT name FROM genres');
    }
    catch(PDOException $Exception){
        echo $Exception->getMessage();
    }
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($resultado);
    ?>
    <h1>Ejercicio 1</h1>
    <ul>
    <?php foreach($resultado as $key => $genero){  ?>
            <li><?php echo $genero['name'] ?>
            </li>
            <?php }?>
    </ul>
    <?php ?>
    </body>
</html>