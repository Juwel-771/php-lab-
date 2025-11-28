<?php

class calculator{
    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }

}

$cal1 = new calculator();

$cal1->a = 50;
$cal1->b = 60;

echo "Sum: ".$cal1->sum();


?>