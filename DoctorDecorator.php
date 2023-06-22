<?php

abstract class DoctorDecorator implements Doctor
{
    protected $doctor;
    public function __construct(Doctor $doctor)
    {
        $this->doctor = $doctor;
    }

}