<?php
class FreeUser extends User
{
    private $maxAnswers;

    public function __construct($username, $password, $email)
    {
        parent::__construct($username, $password, $email);
        $this->setMaxAnswers();
    }

    public function getMaxAnswers()
    {
        return $this->maxAnswers;
    }

    public function setMaxAnswers()
    {
        $this->maxAnswers = 25;
    }

}