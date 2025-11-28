<?php 
    // ** Create connection
    // $name = mysqli_connect(db_host, db_port, db_password, db_name, port, socket)
    // $conn = mysqli_connect("localhost", "root", "", "test_db");

    // ** checking connection
    // if($conn){
    //     echo "Database connected successfully";
    // }else{
    //     echo "Database not connected";
    // }

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    // ** Create connection 
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
    // ** Checkin connection
    if(!$conn){
        die("Connection Failed");
    }

    echo "Database connected";

    echo "<br>";

    // ** Retrive data




?>