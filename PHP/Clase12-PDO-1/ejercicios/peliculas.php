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
    // SI NO PASó el TRY, lo agarro con un CATCH y cargo qué errores vienen
    catch(PDOException $Exception){
        echo $Exception->getMessage();
    }
    try{ //pUEDO NO VOLVER A PONER UN TRY, ES MEDIO PARANOICO :P
        $query = $db->query('SELECT m.title as Titulo, g.name as Genero
        FROM movies AS m
        INNER JOIN genres as g
            ON m.genre_id = g.id;');
    }
    catch(PDOException $Exception){
        echo $Exception->getMessage();
    }
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($resultado);
    ?>
    <h1>Ejercicio 1</h1>
    <ul>
    <?php foreach($resultado as $key => $datos){  ?>
            <li><?php echo $datos['Titulo']." - Género: ". $datos['Genero'] ?>
            </li>
            <?php }?>
    </ul>
    <?php ?>
    </body>
</html>