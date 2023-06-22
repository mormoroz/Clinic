<?php
const START_COUNT_ELEMENTS = 0;


class Clinic
{
    /**
     * @var Patient[]
     * @var Doctor[]
     */

    private array $listPatients = [];
    private array $listDoctors = [];
    private BuilderPatient $builderPatient;
    private int $countPatient;
    private int $countDoctor;

    private function __construct()
    {
        $this->listPatients[] = [];
        $this->countPatient = START_COUNT_ELEMENTS;
        $this->listDoctors[] = [];
        $this->countDoctor = START_COUNT_ELEMENTS;
    }

    private static $instance = null;
    public static function getInstance()
    {
        if (is_null(self::$instance))
            self::$instance = new self();
        return self::$instance;
    }

    function setBuilderPatient($patient)
    {
        $this->builderPatient = $patient;
    }

    function inputListPatient() {
        echo "Count of patients: ";
        $newCountPatient = setNumber();
        for ($i = $this->countPatient; $i < ($this->countPatient+$newCountPatient); $i++) {
            echo"-------------------------";
            echo "\nInput patient №". ($i+1). "\n";
            $newPatient = 0;
            while (!is_object($newPatient)) {
                echo "Choose type of patient (Visitor, Pensioner, Invalid): ";
                $typePatient = readline();
                switch ($typePatient) {
                    case "Visitor":
                        $newPatient = new BuilderVisitor();
                        break;
                    case "Pensioner":
                        $newPatient = new BuilderPensioner();
                        break;
                    case "Invalid"  :
                        $newPatient = new BuilderInvalid();
                        break;
                    default:
                        echo "Incorrect type, please retry" . PHP_EOL;
                }
            }
            $this->setBuilderPatient($newPatient);
            $this->builderPatient->createPatient();
            echo "Name: ";
            $newName = readline();
            $newPatient->setName($newName);
            echo "Age: ";
            $newAge = setNumber();
            $newPatient->setAge($newAge);
            echo "Illness: ";
            $newIllness = readline();
            $newPatient->addIllness($newIllness);

            $this->listPatients[$i] = $newPatient;
        }
        $this->countPatient = $newCountPatient + $this->countPatient;
    }

    function inputListDoctor() {
        echo "Count of doctors: ";
        $newCountDoctor = setNumber();
        for ($i = $this->countDoctor; $i < ($newCountDoctor+$this->countDoctor); $i++) {
            echo"-------------------------";
            echo "\nInput doctor №". ($i+1). "\n";
            $newDoctor = new Therapist();
            echo "Name: ";
            $newName = readline();
            $newDoctor->setName($newName);
            echo "Speciality: ";
            $newSpeciality = readline();
            $newDoctor->setSpeciality($newSpeciality);
            $newDoctor->setCost();

            $this->listDoctors[$i] = $newDoctor;
        }
        $this->countDoctor = $newCountDoctor + $this->countDoctor;
    }

    function printListPatient() {
        echo"-------------------------";
        echo"\nInfo about patients for ";
        echo date('r');
        echo"\n";
        for ($i = 0; $i < $this->countPatient; $i++) {
            echo"-------------------------";
            echo"\nPatient №". ($i+1). "\n";
            $this->listPatients[$i]->getName();
            $this->listPatients[$i]->getAge();
            $this->listPatients[$i]->getIllness();
            echo PHP_EOL;
        }
    }

    function printListDoctor() {
        echo"-------------------------";
        echo"\nInfo about doctors ";
        echo date('r');
        echo"\n";
        for ($i = 0; $i < $this->countDoctor; $i++)
        {
            echo"-------------------------";
            echo "\nDoctor №". ($i+1). "\n";
            echo $this->listDoctors[$i];
        }
    }
}