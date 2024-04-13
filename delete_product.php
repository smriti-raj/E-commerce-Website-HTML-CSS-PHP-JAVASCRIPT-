<?php
    
        $id = $_GET["id"];
        
        include "config.php";
        $res = mysqli_query($conn,"delete from `product` WHERE `id`='$id'");
        
        if($res)
        {
            echo "<script>window.location.assign('manage_product.php?msg=Record Deleted')</script>";
        }
        else{
            echo "<script>window.location.assign('manage_product.php?msg=Try Again')</script>";
        }
    
?>