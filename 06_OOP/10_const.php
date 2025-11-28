<?php 

    class Student {
        const mark = 100;
        public function dis(){
            echo self::mark;
        }
    }

    $obj = new Student();
    $obj->dis();
    echo "<br>";
    echo Student::mark;

    echo "<br>";

    class App {
        const VERSION = "1.0";

        public function app_ver(){
            echo "Current Version: ". self::VERSION;
        }
    }

    $newApp = new App();
    $newApp->app_ver();
    echo "<br>";
    echo App::VERSION;

?>