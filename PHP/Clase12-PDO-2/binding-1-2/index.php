
<?php  
require('functions.php');
/*
/* QUERY PARA TRAER LA LISTA "GENEROS" DE LA DB
*/
$sql = "SELECT name as generos FROM genres";
$query = $db->prepare($sql);
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);


/*
/* paso los inputs a variables y los valido
*/
if ($_POST) {
    //var_dump($_POST);
    $title=$_POST["title"];
    $rating = $_POST["rating"];
    $awards = $_POST["awards"];
    $length = $_POST["length"];
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $anio = $_POST["anio"];
    $genero = $_POST["genero"];

    $errores = validateForm($_POST);

    if (empty($errores)) {
        addMovie($_POST, $db); //si OK, guardo en la base
    }
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Agregar Pelicula</title>
        <style>
        .form-error p {
            color: red;
            margin-top: 0px;
            text-align: left;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1; }
      </style>
        
    </head>
    <body>
        <form action="" id="agregarPelicula" name="agregarPelicula" method="POST">
            <div>   
                <label for="title">Titulo</label>
                <input type="text" name="title" id="title"/>
                <?php echo (isset($errores["title"]))?'<div class="form-error"><p>'.$errores["title"].'</p></div>':""; ?>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating"/><?php echo (isset($errores["rating"]))?'<div class="form-error"><p>'.$errores["rating"].'</p></div>':""; ?>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="awards" id="premios" placeholder="Ej: 5"/><?php echo (isset($errores["awards"]))?'<div class="form-error"><p>'.$errores["awards"].'</p></div>':""; ?>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="length" id="duracion"/><?php echo (isset($errores["length"]))?'<div class="form-error"><p>'.$errores["length"].'</p></div>':""; ?>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <select name="dia">
                    <option value="" selected>Dia</option>
                    <?php for ($i=1; $i <= 31; $i++) { ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>";
                    <?php } ?>
                </select>
                <select name="mes">
                    <option value="" selected>Mes</option>
                    <?php for ($i=1; $i <= 12; $i++) { ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>";
                    <?php } ?>
                </select>
                <select name="anio">
                    <option value="" selected>Año</option>
                    <?php for ($i=1900; $i < 2017; $i++) { ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>";
                    <?php } ?>
                </select>
                <?php echo (isset($errores["dia"]))?'<div class="form-error"><p>'.$errores["dia"].'</p></div>':""; ?>
                <?php echo (isset($errores["mes"]))?'<div class="form-error"><p>'.$errores["mes"].'</p></div>':""; ?>
                <?php echo (isset($errores["anio"]))?'<div class="form-error"><p>'.$errores["anio"].'</p></div>':""; ?>
            </div>
            <div>
            </div>
            <div>
                <label for="genero">Genero</label>
                <select name="genero" id="">
                    <option value="" selected>Elegir...</option>
                    
                <?php foreach($resultado as $key => $datos){  ?>
                      <option value="<?php echo $datos['generos']?>"><?php echo $datos['generos'] ?></option>";
                    <?php } ?>
                </select>
                <?php echo (isset($errores["genero"]))?'<div class="form-error"><p>'.$errores["genero"].'</p></div>':""; ?>
            </div>
            <br>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>
