<?php 
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    // ** Create connection 
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(!$conn){
        die("Database not connected");
    }else {
        echo "Database connected successfully";
    }

    echo "<br>";

    // ** SQL to delete data
    if(isset($_REQUEST['deleteBtn'])){
        $sql = "DELETE FROM student WHERE id={$_REQUEST['id']}";
        if(mysqli_query($conn, $sql)){
            echo "Record Deleted";
        }else{
            echo "Error Unable to delete";
        }
    }
    

    echo "<br>";

    if(isset($_REQUEST['submit'])){
        // echo "Data submitted";
        if(($_REQUEST['name']==" ") || ($_REQUEST['roll']==" ") || ($_REQUEST['email']==" ") || ($_REQUEST['address']==" ")){
            echo "Please fill all the information";
        }else{
            // $ids = $_REQUEST['ids'];
            $name = $_REQUEST['name'];
            $roll = $_REQUEST['roll'];
            $email = $_REQUEST['email'];
            $address = $_REQUEST['address'];

            $sql = "INSERT INTO student ( name, roll, email, address) VALUES ('$name', '$roll', '$email', '$address')";
            if(mysqli_query($conn, $sql)){
                echo "New query inserted successfully";
            }else {
                echo "Data not inserted";
            }
        }
    }

    

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student Form</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <?php
                    if(isset($_REQUEST['edit'])){
                        $sql = "SELECT * FROM student  WHERE id={$_REQUEST['id']}";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                    } 
                ?>
                <!-- <form action="" method="POST" >
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php if(isset($row["name"])) {echo $row["name"];} ?>">
                    </div>
                    <div class="form-group">
                        <label for="roll">Roll: </label>
                        <input type="roll" class="form-control" name="roll" id="roll" value="<?php if(isset($row["roll"])) {echo $row["roll"];} ?>" >
                    </div>
                    <div class="form-group">
                        <label for="roll">Address: </label>
                        <input type="text" class="form-control" name="address" id="address" value="<?php if(isset($row["address"])) {echo $row["address"];} ?>" >
                    </div>
                </form> -->
                <form action="" method="POST">
                    <!-- <div class="form-group">
                        <label for="id">ID: </label>
                        <input type="number" class="form-control" name="ids" id="ids">
                    </div> -->
                    <br>
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="roll">Roll: </label>
                        <input type="number" class="form-control" name="roll" id="roll">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">E-mail: </label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="address">Address: </label>
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
            <div class="col-sm-8">
                <?php
                    $sql = "SELECT * FROM student";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)>0){
                        echo '<table class="table">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>Name</th>";
                                    echo "<th>Roll</th>";
                                    echo "<th>E-mail</th>";
                                    echo "<th>Address</th>";
                                    echo "<th>Action</th>";
                                echo"</tr>";       
                            echo "</thead>";
                            echo "<tbody>";
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                        echo "<td>".$row["id"]."</td>";
                                        echo "<td>".$row["name"]."</td>";
                                        echo "<td>".$row["roll"]."</td>";
                                        echo "<td>".$row["email"]."</td>";
                                        echo "<td>".$row["address"]."</td>";
                                        echo '<td>
                                                <form action="" method=POST>
                                                    <input type="hidden" name="id" value='.$row["id"].'>
                                                    <button type="submit" class="btn btn-sm btn-danger" name="deleteBtn">Delete</button>
                                                    <button type="submit" class="btn btn-sm btn-warning" name="edit">Edit</button>
                                                </form>
                                        </td>'; 
                                    echo"</tr>";
                                }
                            echo "</tbody>";
                        echo '</table>';
                    }else {
                        echo "0 Result";
                    } 
                ?>
            </div>
        </div>
    </div>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

