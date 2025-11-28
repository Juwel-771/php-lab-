<?php

    $a = 12;
    
    try{
        if($a >= 12){
            echo $a."<br>";
        }else{
            throw new Exception("Enter greater value thant 12");
        }
    }catch(Exception $e) {
        echo $e->getMessage();
    }finally{
        echo "Final block";
    }



?>