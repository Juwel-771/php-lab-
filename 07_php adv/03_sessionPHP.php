<?php 

    session_start();
    if(isset($_REQUEST["userName"]) || isset($_REQUEST["userPass"])){
        $uname = $_REQUEST["userName"];
        $pass = $_REQUEST["userPass"];

        $_SESSION["uname"] = $uname;
        $_SESSION["pass"] = $pass;

        echo "<script> location.href = 'welcome.php'</script>";
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="userName" id=""><br><br>
        <input type="password" name="userPass" id=""><br><br>
        <input type="submit" value="Submit">
    </form>



</body>
</html>