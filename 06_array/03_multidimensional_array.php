<?php 
    // *** -> A multidimensional array is an array that contains one or more arrays inside it.

    $students = array(
        array("Juwel", 85, "A"),
        array("Mike", 72, "B"),
        array("Nancy", 90, "A+")
    );

    echo $students[0][0];  // Juwel
    echo $students[1][2];  // B
    
    echo "<br>";

    $employee = [
        [1, "Mike", "William", 200],
        [2, "Peter", "Nancy", 300],
        [3, "Harry", "William", 500],
    ];
    
    foreach($employee as $emp){
        foreach($emp as $v1){
            echo $v1. " ";
        }
        echo "<br>";
    }



?>