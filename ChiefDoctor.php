<?php

class ChiefDoctor extends DoctorDecorator
{

    public function setName($name)
    {
        $this->doctor->setName($name);
    }

    public function getName()
    {
        return $this->doctor->getName();
    }

    public function setSpeciality($speciality)
    {
        $this->doctor->setSpeciality($speciality);
    }

    public function getSpeciality()
    {
        return $this->doctor->getSpeciality();
    }

    public function setCost(? int $bonus = 5000)
    {
        $this->doctor->setCost($bonus);
    }

    public function getCost(): string
    {
        return $this->doctor->getCost();
    }

}