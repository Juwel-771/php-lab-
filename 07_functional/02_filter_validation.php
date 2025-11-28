<?php 
    $value1 = 44;
    $value2 = 44.2;
    $value3 = true;
    $value4 = 44322;
    $value5 = "juwe415@gmail.com";

    var_dump(filter_var($value1, FILTER_VALIDATE_INT));
    $options = [
        "options" => [
            "min_range"=>20,
            "max_range"=>30
        ]
        ];
        if(filter_var($value1, FILTER_VALIDATE_INT, $options)){
            echo "<br> $value1 is integer";
        }else{
            echo "<br> $value1 is integer";
        };

    echo "<br>";
    var_dump(filter_var($value2, FILTER_VALIDATE_FLOAT));
    echo "<br>";
    var_dump(filter_var($value3, FILTER_VALIDATE_BOOLEAN));
    echo "<br>";
    var_dump(filter_var($value4, FILTER_VALIDATE_EMAIL));
    echo "<br>";
    if(filter_var($value5, FILTER_VALIDATE_EMAIL)){
        echo "Valid Email";
    }else {
        echo "Invalid email";
    }
    echo "<br>";

?>