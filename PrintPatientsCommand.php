<?php

class PrintPatientsCommand implements CommandInterface
{
    protected $clinic;

    public function __construct($clinic)
    {
        $this->clinic = $clinic;
    }

    public function execute()
    {
        $this->clinic->printListPatient();
    }
}