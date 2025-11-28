<?php 
    $arr = [
        "stname" => "Zuwel",
        "stmarks" => "90",
        "stemail" => "juwel md416@gmail.com",
    ];

    $filters = [
        "stname" => [
            "filter" => FILTER_SANITIZE_EMAIL,
            "flags" => FILTER_FLAG_STRIP_HIGH
        ],
        "stmarks" => [
            "filters" => FILTER_VALIDATE_INT,
            "option" => [
                "min_range" => 1,
                "max_range" => 100
            ],
        ],
        "stemail" => FILTER_SANITIZE_EMAIL
        ];
    
    echo "<pre>";
    print_r(filter_var_array($arr, $filters)); 
    echo "</pre>";

?>