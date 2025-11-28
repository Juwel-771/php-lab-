<?php 

    echo $stu_name = $_REQUEST['sname'];
    echo $stu_address = $_REQUEST['saddress'];
    echo $stu_class = $_REQUEST['class'];
    echo $stu_phone = $_REQUEST['sphone'];

    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");
    $sql = "INSERT INTO student (sname, saddress, sclass, sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
    $result = mysqli_query($conn, $sql) or die("Table connection failed"); 
    
    header("Location: http://localhost/geekyShowsAdv/11_CRUD/index.php");

    mysqli_close($conn);
   
?>