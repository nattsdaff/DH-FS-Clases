<?php

class User
{
    public static function crypter($param)
    {
        return password_hash($param, PASSWORD_DEFAULT);
    }

    public static function emailVerify($param)
    {
        if(filter_var($param, FILTER_VALIDATE_EMAIL) == true) {
            return $param;
        }
        return null;
    }
}