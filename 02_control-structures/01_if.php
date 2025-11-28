<?php 
    // *** - The if statement is used to execute a block of code only if a specified condition is true.

    $age = 20;

    if ($age >= 18) {
        echo "You are eligible to vote!";
    }

    // if... else statement 
    if ($age >= 18) {
    echo "Adult";
    } else {
        echo "Minor";
    }

    // if...elseif...else statement
    $marks = 85;

    if ($marks >= 90) {
        echo "Grade A+";
    } elseif ($marks >= 80) {
        echo "Grade A";
    } else {
        echo "Keep improving!";
    }



?>