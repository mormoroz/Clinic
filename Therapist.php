<?php

class Therapist implements Doctor
{
    protected string $name;
    protected string $speciality;
    protected string $cost;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;
    }

    public function getSpeciality()
    {
        return $this->speciality;
    }

    public function setCost(?int $bonus = 0)
    {
        $this->cost = 1000 + $bonus;
    }

    public function getCost(): string
    {
        return $this->cost;
    }

    public function __toString()
    {
        return "Name: " . $this->getName() . PHP_EOL . "Speciality: " . $this->getSpeciality() . PHP_EOL . "Cost: " . $this->getCost() . PHP_EOL;
    }
}