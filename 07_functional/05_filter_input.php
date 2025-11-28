<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Input</title>
</head>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <input type="email" name="email" id="">
        <br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>    

    <?php
        if(isset($_REQUEST['submit'])){
            echo filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);
        }
        

    ?>



</body>
</html>0