<?php 

    // *** Validate email
    $email = "mdjuwel44@gmail.com";
    $vemail = filter_var($email, FILTER_VALIDATE_EMAIL);

    if($vemail == false){
        echo "Incorrect email";
         echo "<br/>";
    }else {
        echo "Correct email: ".$vemail;
        echo "<br/>";
    }

   
    echo "<br/>";

    // *** - validate float;
    $number = 20.45;
    $vNumber = filter_var($number, FILTER_VALIDATE_FLOAT);
    
    if($vNumber == FALSE){
        echo "Invalid float number";
        echo "<br/>";
    }else {
        echo "correct float number";
        echo "<br/>";
    }

    //*** - validation and sanitization 
    $email2 = 'juwel//#20$@gmail.com';
    $sEmail = filter_var($email2, FILTER_SANITIZE_EMAIL);
    $vEmail = filter_var($sEmail, FILTER_VALIDATE_EMAIL);

    if($vEmail == FALSE){
        echo "Incorrect mail and pssword";
    }else{
        echo "Incorrect mail";
    }




?>