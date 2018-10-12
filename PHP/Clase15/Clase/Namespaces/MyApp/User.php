<?php

abstract class User
{
    protected $username;
    protected $password;
    protected $email;

    public function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->password = $this->setPassword($password);
        $this->email = $this->setEmail($email);
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


}