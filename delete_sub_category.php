<?php
    
        $id = $_GET["id"];
        
        include "config.php";
        $res = mysqli_query($conn,"delete from `sub_category` WHERE `id`='$id'");
        
        if($res)
        {
            echo "<script>window.location.assign('manage_sub_category.php?msg=Record Deleted')</script>";
        }
        else{
            echo "<script>window.location.assign('manage_sub_category.php?msg=Try Again')</script>";
        }
    
?>