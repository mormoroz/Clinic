<?php

class InputDoctorsCommand implements CommandInterface
{
    protected $clinic;

    public function __construct(Clinic $clinic)
    {
        $this->clinic = $clinic;
    }

    public function execute()
    {
        $this->clinic->inputListDoctor();
    }

}