<?php 
    $email = "ram(.kumar)@exa//ple.com";
    $url = "https://www.my website.com";

    // $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // $url = filter_var($url, FILTER_SANITIZE_URL);
    // $int = filter_var($url, FILTER_SANITIZE_NUMBER_INT);
    // $float = filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    $quote = "world's website";
    // echo filter_var($quote, FILTER_SANITIZE_MAGIC_QUOTE);




    
    if(filter_var($url, FILTER_VALIDATE_URL)){
        echo "$url is Valid URL";
    }else {
        echo "Invalid URL";
    }


?>