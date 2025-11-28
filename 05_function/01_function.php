<?php 
    // *** - A function is a block of code that performs a specific task. Functions make code modular, reusable, and easier to maintain.

    function greet() {
        echo "Hello, World!";
    }
    greet();  // Outputs: Hello, World!

    // *** - Function with Parameters
    function greetUser($name) {
        echo "Hello, $name!";
    }
    greetUser("Juwel");  // Outputs: Hello, Juwel!

    // *** - Function with Return Value
    function add($a, $b) {
        return $a + $b;
    }
    $sum = add(5, 3);  
    echo $sum;  // Outputs: 8

    // *** - Default Parameter Values
    function greets($name = "Guest") {
        echo "Hello, $name!";
    }

    greets();           // Outputs: Hello, Guest!
    greets("Ayberi");   // Outputs: Hello, Ayberi!

    // *** - Anonymous Functions (Closures) => Functions without a name, often used in callbacks.
    $greet = function($name) {
        return "Hello, $name!";
    };
    echo $greet("Juwel");  // Outputs: Hello, Juwel!

    // *** - Arrow Functions
    $square = fn($n) => $n * $n;
    echo $square(4);  // Outputs: 16




?>