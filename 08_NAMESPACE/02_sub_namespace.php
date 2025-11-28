<?php 
    // namespace Product\Laptop; // *** -> creating inside another namespace is known as sub namespace
    // const price = 10000;
    // class Model {
    //     function __construct()
    //     {
    //         echo "Mode is X470";
    //     }
    // }
    
    // function display(){
    //     echo "Model and Price mentioned ";
    // }

    // echo price;
    // echo "<br>";
    // $newLaptop = new Model();
    // echo "<br>";
    // display();

    require 'dhaka/Laptop.php';
    require 'sylhet/Laptop.php';

    echo dhaka\price;
    echo "<br>";
    echo sylhet\price;

?>