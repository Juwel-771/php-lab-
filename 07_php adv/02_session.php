<?php 

    // *** - session start
    session_start();

    // *** - Set session variable
    $_SESSION["userName"] = "Juwel";
    $_SESSION["password"] = 1234;
    
    // *** - Access session variable
    echo $_SESSION["userName"]."<br>";
    echo $_SESSION["password"]."<br>";

    // *** - checking session 
    if(isset($_SESSION["userName"])){
        echo "SESSION IS SET";
    }else{
        echo "SESSION NOT SET";
    }

    // *** - unset single variable
    unset($_SESSION["userName"]);

    // *** - unset variable
    session_unset();


?>