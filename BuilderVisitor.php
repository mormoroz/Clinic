<?php

class BuilderVisitor extends BuilderPatient
{
    function setName($name)
    {
        $this->patient->setName($name);
    }

    function getName()
    {
        echo "Name: " . $this->patient->getName() . "\n";
    }

    function setAge($age)
    {
        $this->patient->setAge($age);
    }

    function getAge()
    {
        echo "Age: " . $this->patient->getAge() . "\n";
    }

    function addIllness($illness)
    {
        $this->patient->addIllness($illness);
    }

    function getIllness()
    {
        echo "Illness: ";
        foreach ($this->patient->getIllness() as $illness)
            echo $illness . " ";
    }
    public function setDiscount()
    {
        $this->patient->setDiscount(0);
    }

    function getDiscount()
    {
        return $this->patient->getDiscount();
    }
}