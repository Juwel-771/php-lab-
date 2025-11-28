<?php 
    // $number = 4.5;
    $number = 4;
    $is_float = 2.3;
    $string = "juwel";
    $bool = true;
    $array = [1, 2, 3, 4, 6];
    $count = 44;

    echo $number;
    echo "<br>";

    var_dump(is_int($number));
    echo "<br>";
    var_dump(is_float($is_float));
    echo "<br>";
    var_dump(is_numeric($string));
    echo "<br>";
    var_dump(is_string($string));
    echo "<br>";
    var_dump(is_bool($bool));
    echo "<br>";
    var_dump(is_array($array));
    echo "<br>";
    var_dump(is_countable($count));
    echo "<br>";
    var_dump(is_scalar($number));
    echo "<br>";
    var_dump(is_callable($count));
    echo "<br>";
    echo "<br>";

    

?>