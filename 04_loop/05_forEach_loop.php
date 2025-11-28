<?php 
    // *** - The foreach loop is used to iterate over arrays (indexed or associative) easily.

    // for index array
    foreach ($array as $value) {
        // code to use $value
    }

    // for Associative Arrays:
    foreach ($array as $key => $value) {
        // code to use $key and $value
    }

    // *** - index array
    $fruits = array("Apple", "Banana", "Mango");

    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

    // *** - Associative Array
    $person = array(
        "name" => "Juwel",
        "age" => 25,
        "city" => "Dhaka"
    );

    foreach ($person as $key => $value) {
        echo "$key: $value <br>";
    }

    


?>