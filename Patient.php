<?php

class Patient extends Person
{
    private $illness;

    function __construct()
    {
        parent::__construct();
        $this->illness = "None";
    }

    function inputElement()
    {
        parent::inputPerson();
        echo "Illness: ";
        $this->illness = readline();
    }

    function printElement()
    {
        parent::printPerson();
        echo "Illness: " . $this->illness . "\n";
    }
}