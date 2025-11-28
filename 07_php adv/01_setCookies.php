<?php 
    // *** - creating cookies
    // setcookie("userName", "Zubaiyer Juwel");

    // ** - accessing cooking
    // echo $_COOKIE['userName'];

    // *** - deleting cookies
    // setcookie("delete", "No cookie", time()-3600);
    
?>

<?php 

    $cookie_name = "user_email";
    if(isset($_REQUEST['set'])){
        $cookie_value = $_REQUEST['email'];
        $cookie_expire = time()+60*60*24*2;
        setcookie($cookie_name, $cookie_value, $cookie_expire);
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Use</title>
</head>
<body>
    <form action="" name="myForm" method="post">
        <input type="email" name="email" id=""><br><br>
        <input type="submit" value="Submit" name="set">
    </form>
    <hr>
    <?php 
        if(isset($_COOKIE[$cookie_name])){
            echo "Cookie name is: ".$cookie_name. " and value is ".$_COOKIE[$cookie_name];
        }else {
            echo "Cookie not set yet";
        }
    ?>

</body>
</html>