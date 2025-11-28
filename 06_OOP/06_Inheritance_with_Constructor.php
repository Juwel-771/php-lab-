<?php 

    class Teacher {
        public function __construct()
        {
            echo "Teacher construct";
            echo "<br>";
        }
    }

    class Student extends Teacher {
        public function __construct()
        {
            parent::__construct();
            echo "Student construct";
        }
    }

    $stu = new Student();


?>