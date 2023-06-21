<?php
class Factory{

    public function build():Clinic
    {
//        $newPatient = $this->buildPatient();
//        $newDoctor = $this->buildDoctor();
        return $this->buildClinic($newPatient, $newDoctor);
    }

    public function buildClinic($newPatient, $newDoctor):Clinic
    {
        return Clinic::getInstance($newPatient, $newDoctor);;
    }
    public function buildPatient(): Patient
    {
        return new Patient();
    }
    public function buildDoctor():Doctor
    {
        return new Doctor();
    }
}