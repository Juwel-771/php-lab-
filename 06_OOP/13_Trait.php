<?php 
    trait hello{
        public function sayHello(){
            echo "Hello World";
        }
    }

    trait bye{
        public function bye(){
            echo "Bye world";
        }
    }

    class base{
        use hello, bye;
    }

    class derive{
        use hello;
    }

    $test = new base();
    $test2 = new derive();

    $test->sayHello();
    echo "<br>";
    $test2->sayHello();


?>