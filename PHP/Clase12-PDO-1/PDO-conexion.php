<?php 
    $dsn = "mysql:host=127.0.0.1;dbname=movies_db;port=8889";
    $user='root';
    $pass='root';
    $opt=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    try{
        $db=new PDO($dsn, $user, $pass, $opt);
        var_dump($db);
    }
    catch(PDOException $Exception){
        echo $Exception->getMessage();
    }
?>