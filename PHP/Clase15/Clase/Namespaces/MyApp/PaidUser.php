<?php

class PaidUser extends User
{

    private $fee;

    public function __construct($username, $password, $email, $fee)
    {
        parent::__construct($username, $password, $email);
        $this->maxAnswers = $fee;
    }

    public function getFee()
    {
        return $this->fee;
    }

    public function setFee($fee)
    {
        $this->fee = $fee;
    }
}