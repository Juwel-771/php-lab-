<?php 

    session_start();
    echo $_SESSION["uname"];
    echo "<br>";
    echo "<br>";
    echo $_SESSION["pass"];
    echo "<br>";

    if(isset($_REQUEST['logout'])){
        session_unset();
        session_destroy();

        echo "<script> location.href = '07_php adv/03_sessionPHP.php' </script>";
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome file</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>