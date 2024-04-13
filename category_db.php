<?php
    if(isset($_POST["submit"]))
    {
        $category_type = $_POST["category_type"];
        $category_name = $_POST["category_name"];
        
        include "config.php";
        $res = mysqli_query($conn,"INSERT INTO `category`(`type`, `category_name`) VALUES ('$category_type','$category_name')");
        
        if($res)
        {
            echo "<script>window.location.assign('add_category.php?msg=Record Inserted')</script>";
        }
        else{
            echo "<script>window.location.assign('add_category.php?msg=Try Again')</script>";
        }
    }
    else{
        echo "<script>window.location.assign('add_category.php?msg=Please Fill Form')</script>";
    }
?>