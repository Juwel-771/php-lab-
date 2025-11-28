<?php 
    
    class Student {
        function __construct()
        {
            echo 2+2;
        }
    }

    $stu = new Student();

    class Course {
        public $roll;

        function __construct($enroll)
        {
            echo "Constructor called: "."<br>";
            $this->roll = $enroll;
            
            echo $this->roll;
        }
    }

    $newStudent = new Course(7);

    $newStudent->roll = 5;

?>