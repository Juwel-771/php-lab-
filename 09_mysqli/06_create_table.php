<?php 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "user_all";

    // *
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    $table_add = "CREATE TABLE employee (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        designation VARCHAR(80),
        email VARCHAR(50)
    )";

    if(mysqli_query($conn, $table_add)){
        echo "Table created";
    }else {
        echo "Table creation failed";
    }

?>