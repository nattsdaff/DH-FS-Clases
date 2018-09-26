<?PHP
//  include 'arraypaises.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?php echo (!empty($_POST["name"]))?$_POST['name']: ''; ?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='<?php echo (!empty($_POST["email"]))?$_POST["email"]:"" ?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='<?php echo (!empty($_POST["username"]))?$_POST["username"]:"" ?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container'  >
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                </div>
                <?php if(!isset($_GET["versionCorta"])){//pregunto si get no esta seteada definida la posicion version corta
                ?>
                    <div class="container">
                      <label for="confirmar">Confirmar contraseña*:</label><br>
                      <input type="text" name="confirmar" value="" id="confirmar" maxlength="50"/>
                    </div>
                  <?php } ?>
                  <label for="paises">País</label><br/>
                  <select class="paises" name="arraypaises" id="paises">
                    <?php foreach ($arraypaises as $value): ?>
                      <option value=""><?php echo $value; ?></option>
                    <?php endforeach; ?>
                  </select><br><br>
                  <div class="container" >
                    <input type='submit' name='Submit' value='Enviar' />
                  </div>
            </fieldset>
        </form>

    </body>
</html>
