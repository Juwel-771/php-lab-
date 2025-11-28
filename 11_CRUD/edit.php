<?php

use Dom\Mysql;

 include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php 
        $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");
        $stu_id = $_GET['id'];
        $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Table connection failed");

        while($rows = mysqli_fetch_assoc($result)){

    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $rows['sid'] ?>"/>
          <input type="text" name="sname" value="<?php echo $rows['sname'] ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $rows['saddress'] ?>"/>
      </div>

      <div class="form-group">
          <label>Class</label>
          <?php
            $sql2 = "SELECT * FROM studentclass";
            $result2 = mysqli_query($conn, $sql2) or die("Connection failed");

            if(mysqli_num_rows($result2) > 0){
                    echo '<select name="sclass">'; 

                    while($rows2 = mysqli_fetch_assoc($result2)){
                        if($rows['sclass']==$rows2['cid']){
                            $select = "selected";
                        }else{
                            $select = "";
                        }

                    echo "<option {$select} value='{$rows2['cid']}>{$rows2['cname']}</option>";
                }
                echo "</select>";
            }
    
          ?>
          
          <!-- <select name="sclass">
              <option value="" selected disabled>Select Class</option>
              <option value="1">BCA</option>
              <option value="2">BSC</option>
              <option value="3">B.TECH</option>
          </select> -->
      </div>
      <div class="form-group">
            <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $rows['sphone'] ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
        } 
    ?>
</div>
</div>
</body>
</html>
