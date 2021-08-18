<?php

spl_autoload_register(function ($className)
{
    include $className. '.php';
});

$doctor = new Doctor();
$patient = new Patient();
$clinic= new Clinic($patient, $doctor);
$clinic-> inputListPatient();
$clinic -> inputListDoctor();
$clinic-> printListPatient();
$clinic-> printListDoctor();