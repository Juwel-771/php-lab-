<?php 
    // *** - Logical operators are used to combine multiple conditions (true/false values) in decision-making (if, while, etc.).

    // *** - && (AND) - Returns true only if both conditions are true.
    $age = 25;
    $citizen = true;

    if ($age >= 18 && $citizen) {
        echo "Eligible to vote.";
    }

    // *** - || (OR) - Returns true if at least one condition is true.
    $isAdmin = false;
    $isEditor = true;

    if ($isAdmin || $isEditor) {
        echo "You have access.";
    }

    // *** - ! (NOT) - Reverses the condition.
    $isLoggedIn = false;

    if (!$isLoggedIn) {
        echo "Please log in.";
    }

    




?>