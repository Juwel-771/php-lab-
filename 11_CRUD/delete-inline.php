<?php 
    $stu_id = $_REQUEST['id'];
    
    include 'config.php';
    
    $sql = "DELETE FROM student WHERE sid = '{$stu_id}'";
    $result = mysqli_query($conn, $sql) or die("Data connection error");

    header("Location: http://localhost/geekyShowsAdv/11_CRUD/index.php");

    mysqli_close($conn);

?>