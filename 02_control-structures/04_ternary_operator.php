<?php 
    // *** - The ternary operator is a shortcut for if...else statements. It’s often used when you want to assign a value based on a condition in a concise way.

    $age = 20;

    $status = ($age >= 18) ? "Adult" : "Minor";
    echo $status;  // Outputs: Adult

    // *** - Nested Ternary Operators:
    $score = 85;

    $result = ($score >= 90) ? "Excellent" : 
            (($score >= 75) ? "Good" : "Needs Improvement");

    echo $result; // Outputs: Good




?>