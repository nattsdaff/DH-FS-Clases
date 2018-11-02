<?php 

class DBSQL
{
    public static function connector(){
        $dsn = "mysql:host=127.0.0.1;dbname=movies_db;port=8889";
        $user='root';
        $pass='root';
        $opt=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        // ABRO LA CONEXION CON UN TRY
        try{
            $db = new PDO($dsn, $user, $pass, $opt);
            //var_dump($db);
        }
        // SI NO PASó el TRY, lo agarro con un CATCH y cargo qué errores vienen
        catch(PDOException $Exception){
            echo $Exception->getMessage();
        }

    }
}


