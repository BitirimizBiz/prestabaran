<?php


class Person
{
    private $firstname;
    private $lastname;
    private $phone_number;


    public function __construct($firstname, $lastname, $phone_number)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone_number = $phone_number;
    }
}