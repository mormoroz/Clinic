<?php
const EXIT_COMMAND = 8;

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
    echo "5. Search doctor by name\n";
    echo "6. Update cost of doctor\n";
    echo "7. Change doctor level\n";
    echo "8. Exit\n";
    echo ">";
}

function menu($clinic)
{
    printMenu();
    $chooseUser = readline();
    while ($chooseUser != EXIT_COMMAND)
    {
        $factory = new ClinicCommandFactory();
        $factory->factory($chooseUser, $clinic)->execute();
        printMenu();
        $chooseUser = readline();
    }

}

$clinic = Clinic::getInstance();
//$patient = new Patient();
menu($clinic);


//
//$invalid = new BuilderVisitor();
//$invalid->createPatient();
//$invalid->setName('Alexander');
//$invalid->setAge(21);
//$invalid->addIllness('Diabet');
//$invalid->setDiscount();
//
//echo "Discount: " . $invalid->getDiscount() . PHP_EOL;
//$factory = new Factory;
//$clinic = $factory->build();
//menu($clinic);
//
//$doctor = new Therapist();
//$doctor->setCost();
//echo "Your salary: " . $doctor->getCost() . PHP_EOL;
//$doctor = new ChiefDoctor($doctor);
//$doctor->setCost();
//echo "Your salary is update: " . $doctor->getCost() . PHP_EOL;