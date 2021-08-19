<?php

spl_autoload_register(function ($className)
{
    include $className. '.php';
});

$doctor = new Doctor();
$patient = new Patient();
$clinic = Clinic::getInstance($patient, $doctor);
$clinic -> inputListPatient();
$clinic -> inputListDoctor();
$clinic -> printListPatient();
$clinic -> printListDoctor();
$clinicTest = Clinic::getInstance($patient, $doctor);
$clinicTest -> inputListDoctor();
$clinicTest -> printListDoctor();
$clinic -> printListDoctor();
