<?php

interface Doctor
{
    public function setName($name);

    public function getName();

    public function setSpeciality($speciality);

    public function getSpeciality();

    public function setCost(? int $bonus);

    public function getCost();
}