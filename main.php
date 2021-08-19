<?php

spl_autoload_register(function ($className)
{
    include $className. '.php';
});

$factory = new Factory;
$clinic = $factory->build();
$clinic -> inputListPatient();
$clinic -> inputListDoctor();
$clinic -> printListPatient();
$clinic -> printListDoctor();

