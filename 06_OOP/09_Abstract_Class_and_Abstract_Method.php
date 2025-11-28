<?php 

    abstract class Teacher {
        public function dis(){
            echo "Normal function";
        }

        abstract function absMethod();
    }

    class Student extends Teacher {
        public function absMethod()
        {
            echo "Abstract method called from different class";
        }
    }

    $obj = new Student();
    $obj->absMethod();



?>