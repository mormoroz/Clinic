<?php

class InputPatientsCommand implements CommandInterface
{
    protected $clinic;

    public function __construct(Clinic $clinic)
    {
        $this->clinic = $clinic;
    }

    public function execute()
    {
        $this->clinic->inputListPatient();
    }
}