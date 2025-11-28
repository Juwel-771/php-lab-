<?php 
    // ** -> The switch statement is used to perform different actions based on different conditions, often as a cleaner alternative to writing many if...else if... statements.

    $day = "Monday";

    switch ($day) {
    case "Monday":
        echo "Start of the work week!";
        break;
    case "Friday":
        echo "Weekend is near!";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!";
        break;
    default:
        echo "Just another weekday.";
    }


?>