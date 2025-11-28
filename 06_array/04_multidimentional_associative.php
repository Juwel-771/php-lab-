<?php 
    // *** - A multidimensional associative array is an array where each element is another associative array.
    $mark = [
        "Mike" => [
            "physics" => 85,
            "maths" => 98,
            "chemistry" => 90
        ],
        "Nancy" => [
            "physics" => 57,
            "maths" => 87,
            "chemistry" => 55
        ], 
        "Peter" => [
            "physics" => 90,
            "maths" => 95,
            "chemistry" => 80
        ]
    ];

    echo "<pre>";
    print_r($mark);
    echo "</pre>";

    foreach($mark as $key => $v1){
        echo $key;
        foreach($v1 as $key2 => $v2){
            echo $key2. " ";
            echo $v2. " ";
        };
        echo "<br>";
    };





?>