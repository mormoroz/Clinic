<?php

class ClinicCommandFactory
{
    public function factory($chooseUser, Clinic $clinic)
    {
        if ($chooseUser == 1)
        {
            return new InputPatientsCommand($clinic);
        }
        if ($chooseUser == 2)
        {
            return new InputDoctorsCommand($clinic);
        }
        if ($chooseUser == 3)
        {
            return new PrintPatientsCommand($clinic);
        }
        if ($chooseUser == 4)
        {
            return new PrintDoctorsCommand($clinic);
        }
        if ($chooseUser == EXIT_COMMAND)
        {
            return 0;
        }

        throw new RuntimeException('Cannot find command ' . $chooseUser);

    }

}