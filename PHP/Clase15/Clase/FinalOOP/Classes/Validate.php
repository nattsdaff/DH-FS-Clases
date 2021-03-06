<?php

class Validate
{
    
    public static function validarSiExiste($db, $username, $email)
    {
        $datos = json_decode($db, true);

        $disponible = true;

        for ($i=0; $i < count($datos["usuarios"]); $i++) {
        //Me fijo si el usuario ingresado ya existe
        if ($datos["usuarios"][$i]["username"] == $username || $datos["usuarios"][$i]["email"] == $email) {
            //si existe rompo(false == no esta disponible ese usuario (osea ya existe))
            return true;
            }
        }
    }

    private static function passwordConfirm(User $user, $data)
    {
        $password1 = $user->getPassword();
        $password2 = $data['contrasena_confirm'];
        
        return $password1 == $password2;
    }

    public static function validacionRegistro($db, $user, $data)
    {
        
        $errores=[];

        if (strlen($user->getNombre())<2) {
        $errores["nombre"]="Nombre no valido";
        }
        if (strlen($user->getApellido())<2) {
        $errores["apellido"]="Apellido no valido";
        }

        //si es true significa que ya existe el usuario y que no esta disponible
        if (self::validarSiExiste($db::connector(), $user->getUsername(), $user->getEmail())) {
            //Con self::<nombredemetodo> accedemos a metodos estaticos dentro de la misma
            $errores["username"] ="ya existe este usuario o mail";

        }

        if (strlen($user->getPassword())<7) {
            $errores["contrasena"]="Contraseña demasiado corta";
        }
        if (!self::passwordConfirm($user, $data)) {
            $errores["contrasena_conf"]="No concuerdan las contraseñas";
        }
        if (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $errores["email"]="no ingreso un email valido";
        }
        if (!isset($data['terminos'])) {
             $errores["terminos"]="tenes que aceptar terminos y condiciones";
        }
        return $errores;
    }
}