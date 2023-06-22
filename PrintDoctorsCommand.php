<?php

class PrintDoctorsCommand implements CommandInterface
{
    protected $clinic;

    public function __construct($clinic)
    {
        $this->clinic = $clinic;
    }

    public function execute()
    {
        $this->clinic->printListDoctor();
    }

}