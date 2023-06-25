<?php

$marks = 70;

switch($marks){
    case 10:
        echo("Failed");
        break;
        case ($marks > 40):
            echo "Passed";
            break;
            default:
            echo "Invalid data";
}