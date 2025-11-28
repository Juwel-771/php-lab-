<?php 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "user_all";

    // * CREATE CONNECTION
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if($conn->connect_errno){
        die("Connection failed");
    };

    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "ID: {$row['id']} | Name: {$row['name']} ";
            echo "<br>";
        }
    }else {
        echo "No data found";
    }

?>