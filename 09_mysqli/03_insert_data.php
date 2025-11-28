<?php 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    // ** Create connection 
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // ** INSERT DATA INTO DATABASE
    $sql = "INSERT INTO student (id, name, roll, email) VALUES(3, 'Peter', 103, 'peter@mail.com')";
    if(mysqli_query($conn, $sql)){
        echo "New data inserted";
    }else{
        echo "Unable to insert data";
    }

?>