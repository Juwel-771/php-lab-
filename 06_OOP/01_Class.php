<?php 
     
    // *** --- A class is like a blueprint to create objects.***
    class Mobile {
        public $model;  // *** ----- It's called properties
        public $phone_name; // *** ----- Properties

        function mobile_model($new_model){ // *** --- function in class are called method. 
            return $this->model = $new_model;
        }

    }


    class Car{
        public $brand = "Audi";

        function drive($car){
            echo "This " .$this->brand = $car." car run very fast";        
        }
    }

?>