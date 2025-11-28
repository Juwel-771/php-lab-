<?php include 'header.php'; 

    if(isset($_POST['deletebtn']) || isset($_POST['showbtn'])){
        include 'config.php';
        $stu_id = $_POST['sid'];

        $sql = "DELETE FROM student WHERE sid = '{$stu_id}'";
        $sql2 = "SELECT * FROM student WHERE sid = '{$stu_id}'";

        $result = mysqli_query($conn, $sql) or die("Data connection error");
        $result2 = mysqli_query($conn, $sql2) or die("Data connection error");

        header("Location: http://localhost/geekyShowsAdv/11_CRUD/index.php");

        mysqli_close($conn);
    }

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?> " method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
        <input class="submit" type="submit" name="showbtn" value="Show" />  
    </form>
    
</div>
</div>
</body>
</html>
