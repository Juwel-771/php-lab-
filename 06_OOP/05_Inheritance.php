<?php 

    class Father {
        public $a;
        public $b;
        public $result;

        function getValue($value1, $value2){
            $this->a = $value1;
            $this->b = $value2;
        }

    }

    class Son extends Father { // *** single inheritance
        public $sum = 0;
        // public $a;
        // public $b;
        function sumValue(){
            $sum = $this->a + $this->b;

            return $sum;
        }
    }

    class Grandchild extends Son { // *** multi-level inheritance
         function display(){
            echo "First value: ".$this->a. " and second value ".$this->b;
        }

        function showResult(){
            echo "Calculation: ".$this->sumValue();
        }
    }

    $obj = new Grandchild();
    $obj->getValue(6, 8);
    $obj->display();
    echo "<br>";
    $obj->sumValue();
    $obj->showResult();

    echo "<br>";

    class employee {
        public $name;
        public $age;
        public $salary;

        function __construct($n, $a, $s)
        {
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
        }

        function info(){
            echo "Employee Name: ".$this->name. " Age: ".$this->age." Salary: ".$this->salary;
        }

    }

    $emp1 = new employee("Juwel", 25, 2999);

    $emp1->info();


?>