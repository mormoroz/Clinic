<?php

function setNumber()
{
    $flag = false;
    while ($flag == false) {
        $number = readline();
        if (ctype_digit($number)) {
            $flag  = true;
            return $number;
        } else {
            echo "\nError Input, try again: \n";
        }
    }
}