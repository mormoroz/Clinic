<?php

class Patient extends BuilderPatient
{
    private int $age;
    private string $name;
    private array $illness = [];
    private int $discount;

    /**
     * @param string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param int $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function addIllness($illness)
    {
        $this->illness [] = $illness;
    }

    public function getIllness()
    {
        return $this->illness;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }


}