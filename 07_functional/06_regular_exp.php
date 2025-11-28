<?php

    $string = "PHP is the web scripting language and PHP is web development language.phhhhp";

    // $exp = preg_match("/PHP/i", $string); // --- searching with case-insensitive
    // $exp = preg_match_all("/php/i", $string, $arr); //  --- searching all the value
    // $exp = preg_match_all("/php|web|the/i", $string, $arr); // --- searching individual word
    // $exp = preg_match_all("/h|e|t/i", $string, $arr); // --- searching individual character
    // $exp = preg_match_all("/[wot]/i", $string, $arr); // --- searching individual character in []
    // $exp = preg_match_all("/[^wot]/i", $string, $arr); // --- searching all the except mentioned those character in []
    // $exp = preg_match_all("/[a-e]/i", $string, $arr); // --- searching between a-e character
    // $exp = preg_match_all("/[a-iA-I]/i", $string, $arr); // --- searching between a-i character and capital letter. 
    // $exp = preg_match_all("/[0-5]/i", $string, $arr); // --- searching between 0-5 number. 
    // $exp = preg_match_all("/ph*/i", $string, $arr); // --- searching between only ph
    $exp = preg_match_all("\d+/i", $string, $arr); // --- searching intiger with only character



    if($exp){
        echo "A match was found";
    }else {
        echo "Match not found";
    }

    echo "<pre>";
    print_r($arr); 
    echo "</pre>";
    
?>