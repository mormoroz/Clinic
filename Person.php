<?php

// Basic class
class Person{
    protected $age;
    protected $name;

    function __construct() {
        $this->age = 0;
        $this->name = "None";
    }

    function inputPerson(){
        echo "Age: ";
        $this->age = readline();
        echo "Name: ";
        $this->name = readline();
    }
    function printPerson(){
        echo "Age: " . $this->age . "\n";
        echo "Name: " . $this->name . "\n";
    }

}