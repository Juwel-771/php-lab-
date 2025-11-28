<?php 

    // $conn = new PDO("mysql:localhost; dbname=user_all;", "root","");
    
    // if($conn){
    //     echo "Connection connected";
    // }else{
    //     echo "Connection not created";
    // }

    try{
        $conn = new PDO("mysql:localhost; dbname=user_all;", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected";
    }
    catch(PDOException $e){
        echo "Connection failed".$e->getMessage();
    }

    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);
    $row = $result->fetch();
    print_r($row);

    


?>