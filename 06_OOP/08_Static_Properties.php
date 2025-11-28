<?php 

    class Teacher {
        public static $a = 10; // ** static properties
        public function disp(){
            echo self::$a;
        }
    }

    $newStudent = new Teacher();
    $newStudent->disp();

    echo "<br>";


    class Student {
        public static function student_id(){
            echo "Student ID updated"; 
        }
    }

    Student::student_id();

    echo "<br>";

    // *** static properties in static method 
    class Car {
        public static $price = 10;
        public static function show(){
            echo self::$price;
        }
    }

    Car::show();
    echo "<br>";
    echo "<br>";


    // *** Static with Inheritance in PHP

    class Father {
        public static $a = 35;
    }

    class Son extends Father {
        public function show(){
            echo self::$a;
        }
    }

    $newSon = new Son();
    $newSon->show();

?>