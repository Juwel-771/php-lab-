<?php 
    $conn = new mysqli("localhost", "root", "", "user_all");

    if($conn->connect_errno){
        die ("connection failed");
    }else{
        echo "Connected successfully";
    }

    // $sql = "INSERT INTO employee (name, designation, email) VALUES ('Rayan', 'Footballer', 'rayna@mail.com')";
    // if($conn->query($sql)==TRUE){
    //     echo "Data inserted";
    // }else {
    //     echo "DATA NOT FOUND";
    // }

    $sql = "DELETE FROM employee WHERE id = 5";
    if($conn->query($sql)===TRUE){
        echo "Data Deleted";
    }else {
        echo "Invalid data ID";
    }

    $conn->close();

?>