<?php 
    // ** -> These are loop control statements that change the flow of execution inside loops like for, while, do-while, and foreach.

    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            break; // Exit the loop when $i is 5
        }
        echo "Number: $i <br>";
    }

    // ** output
    // Number: 1  
    // Number: 2  
    // Number: 3  
    // Number: 4

    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) {
            continue; // Skip when $i is 3
        }
        echo "Number: $i <br>";
    }

    // ** output
    // Number: 1  
    // Number: 2  
    // Number: 4  
    // Number: 5

    $score = 70;

    if ($score < 75) {
        goto fail;
    }

    echo "You passed!";
    exit;

    fail:
    echo "You failed!";

    // ** output
    // You failed!




?>