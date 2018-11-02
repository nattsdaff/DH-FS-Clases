<?php  
require('functions.php');
/*
/* paso los inputs a variables y los valido
*/
if ($_POST) {
    //var_dump($_POST);
	isset($_POST["title"])?$title=$_POST["title"]:"";
    isset($_POST["rating"])?$rating = $_POST["rating"]:"";
    isset($_POST["awards"])?$awards = $_POST["awards"]:"";
    isset($_POST["length"])?$length = $_POST["length"]:"";
    isset($_POST["dia"])?$dia = $_POST["dia"]:"";
    isset($_POST["mes"])?$mes = $_POST["mes"]:"";
    isset($_POST["anio"])?$anio = $_POST["anio"]:"";
	if (isset($_POST["tipo"])) {
		$tipo = $_POST["tipo"];
	}else {
		$tipo= [];
	}

    $errores = validateForm($_POST);

    if (empty($errores)) {
        $resultado = searchDB($_POST, $db); //si OK, guardo en la base
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
        .container{
            width: 100%;
            margin: 13rem auto;
            height: 40vh;
            display: flex;
            margin: 20px;
            padding: 20px;
        }
        section {
            display: flex;
        }
        </style>
        
    </head>
    <body>
    <section class='buscador'>
        <div class='container'>
            <form action="" id="buscador" name="buscador" method="POST">
                <div>   
                    <h2>Buscar</h2>
                    <input type="text" name="title" id="title" style="display:inline;" value="<?php echo (isset($_POST["title"]))?$_POST["title"]:""; ?>" required><br><br>
                    <?php echo (isset($errores["title"]))?'<div class="form-error"><p>'.$errores["title"].'</p></div>':""; ?>
                </div>
                <div>
                    <label class="radio-inline">
                        <input type="radio" name="tipo" id="tipo_peliculas" <?php if (isset($tipo)&&$tipo=='tipo_peliculas'){
								echo "checked";
							} ?> value="tipo_peliculas"> Películas
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tipo" id="tipo_series" <?php if (isset($tipo)&&$tipo=='tipo_series'){
								echo "checked";
							} ?> value="tipo_series"> Series
                    </label>
					<!-- <label class="radio-inline">
                    	<input type="radio" name="tipo" id="tipo_peliculas" value="tipo_peliculas"> Películas
					</label>
                    <label class="radio-inline">
						<input type="radio" name="tipo" id="tipo_series" value="tipo_series"> Series
					</label> -->
                </div>
                <br>
                <input type="submit" value="Buscar" name="submit"/>
            </form>
        </div>
        <div class='container'>
        
            <div>   
                <h2>Resultado</h2>
                <p>Titulo:
                <?php echo (!empty($resultado['title'])) ? $resultado['title'] : "" ; ?>
                </p>
                <p>Rating: 
                <?php echo (!empty($resultado['rating'])) ? $resultado['rating'] : "" ; ?>
                </p>
                <p>Awards: 
                <?php echo (!empty($resultado['awards'])) ? $resultado['awards'] : "" ; ?>
                </p>
            </div>
        </div>
    </section>
</body>
</html>
