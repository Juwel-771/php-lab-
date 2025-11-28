<?php 
    echo $stu_id = $_REQUEST['sid'];
    echo $stu_name = $_REQUEST['sname'];
    echo $stu_address = $_REQUEST['saddress'];
    echo $stu_class = $_REQUEST['sclass'];
    echo $stu_phone = $_REQUEST['sphone'];

    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");
    $sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = '{$stu_id}'";
    $result = mysqli_query($conn, $sql) or die("Table connection failed"); 

    header("Location: http://localhost/geekyShowsAdv/11_CRUD/index.php");

    mysqli_close($conn);

?>