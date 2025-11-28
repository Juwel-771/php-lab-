<?php 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";

    // * CREATING DATABASE
    $conn = mysqli_connect($db_host, $db_user, $db_password);

    // * CHECK CONNECTION
    if(!$conn){
        die("Connection failed");
    }else{
        echo "Connection created successfully";
    }

    echo "<br>";

    // * CREATING DATABASE USING COMMAND
    $sql = "CREATE DATABASE user_all";
    
    if(mysqli_query($conn, $sql)){
        echo "Database created successfully";
    }else {
        echo "Database creation failed";
    }

?>