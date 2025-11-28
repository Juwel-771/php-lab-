<?php 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    // ** Create connection 
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // ** Data retrives 

    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($result);

    // foreach($row as $data){
    //     echo $data;
    // }
    // echo "<br>";

    // if(mysqli_num_rows($result) > 0){
    //         while($row = mysqli_fetch_assoc($result)){
    //         echo $row["id"].$row["name"].$row["roll"].$row["address"]."<br>";
    //     }
    // }


?>