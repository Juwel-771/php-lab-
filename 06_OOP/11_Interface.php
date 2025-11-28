<?php 

    // *** - Declaring INTERFACE
    interface Student {
        const roll = 382;

        function admit_date();
    }

    // *** - Interface extend interface
    interface College extends Student {
        const clg_ID = 240;

        function college_date();
    }

    // *** - one interface can extend more than one interface

    interface School {
        const school_ID = 29;

        function school_date();
    }

    interface Elementary {
        const ele_ID = 400;

        function ele_date();
    } 

    interface Academic extends School, Elementary {
        const ace_certificate = 4;

        function Collection();
    }

    // *** - one interface can implement in a single class
    interface Audi {
        const model = "Q8";

        public function details();
    }

    class Cars implements Audi{
        public function details()
        {
            echo Audi::model;
        }
    }

    $car = new Cars();
    $car->details();

    echo "<br>";

    // *** - interface can implement mora than one interface,

    // *** - Extend and Implements together

    // *** - Multiple inheritance using Interface 




?>