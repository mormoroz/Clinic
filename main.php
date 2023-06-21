<?php

spl_autoload_register(function ($className)
{
    include $className. '.php';
});

require('function.php');

function printMenu()
{
    echo "\n1. Add new patients\n";
    echo "2. Add new doctors\n";
    echo "3. Print info about all patients\n";
    echo "4. Print info about all doctors\n";
    echo "5. Exit\n";
    echo ">";
}

function menu($clinic)
{
    $chooseUser=0;
    while ($chooseUser != 5)
    {
        printMenu();
        $chooseUser = readline();
        switch($chooseUser)
        {
            case 1:
                $clinic -> inputListPAtient();
                break;
            case 2:
                $clinic -> inputListDoctor();
                break;
            case 3:
                $clinic -> printListPatient();
                break;
            case 4:
                $clinic -> printListDoctor();
                break;
        }
    }

}


$invalid = new BuilderVisitor();
$invalid->createPatient();
$invalid->setName('Alexander');
$invalid->setAge(21);
$invalid->addIllness('Diabet');
$invalid->setDiscount();

echo "Discount: " . $invalid->getDiscount();
//$factory = new Factory;
//$clinic = $factory->build();
//menu($clinic);
