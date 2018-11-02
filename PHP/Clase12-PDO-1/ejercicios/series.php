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
    
    // guardo la consulta en una variable
    $sql = "SELECT * FROM series";
    $query = $db->prepare($sql);
    $query->execute();
    
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($resultado);
    ?>
    <h1>Statements - 1</h1>
    <div>
        <ul>
        <?php foreach($resultado as $key => $datos){  ?>
                <li><a href="serie.php<?php echo '?id='.$datos['id'];?>
                "><?php echo $datos['title'] ?></a></li>
        <?php }?>
        </ul>
    </div>
    </body>
</html>