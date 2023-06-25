<?php

class SearchDoctorCommand implements CommandInterface
{
    protected $clinic;

    public function __construct(Clinic $clinic)
    {
        $this->clinic = $clinic;
    }

    public function execute()
    {
        $this->clinic->searchDoctor();
    }
}