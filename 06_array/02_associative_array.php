<?php 
    // *** - An associative array in PHP uses named keys (strings) instead of numeric indexes. Each key is associated with a value.

    $person = array(
        "name" => "Juwel",
        "age" => 25,
        "city" => "Dhaka"
    );

    echo $person["name"];  // Outputs: Juwel
    echo $person["city"];  // Outputs: Dhaka

    // *** - Adding/Updating Values:
    $person["country"] = "Bangladesh"; // Add new key
    $person["age"] = 26;               // Update existing key


?>