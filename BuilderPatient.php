<?php

abstract class BuilderPatient
{
    protected Patient $patient;

    abstract function setName($name);

    abstract function getName();

    abstract function setAge($age);

    abstract function getAge();

    abstract function addIllness($illness);

    abstract function getIllness();

    public function createPatient()
    {
        $this->patient = new Patient();
    }
    public function getPatient()
    {
        return $this->patient;
    }

}