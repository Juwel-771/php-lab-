<?php
    namespace Product;
    const Num = 10;
    class Laptop{
        function __construct()
        {
            echo "<h1>Namespace creation</h1>";
        }
    }
    function display(){
        echo "<h1>Namespace creation</h1>";
    }

    echo Num;  
    display();
    $obj = new Laptop();

    
    

?>