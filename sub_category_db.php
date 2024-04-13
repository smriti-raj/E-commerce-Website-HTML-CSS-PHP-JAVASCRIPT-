<?php
    if(isset($_POST["submit"]))
    {
        $category_type = $_POST["category_type"];
        $sub_category_name = $_POST["sub_category_name"];
        $description = $_POST["description"];

        $fname = $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];
        $path = rand().$fname;
        
        include "config.php";
        $res = mysqli_query($conn,"INSERT INTO `sub_category`(`category_id`, `sub_cat_name`, `description`, `image`) VALUES ('$category_type','$sub_category_name','$description','$path')");
        
        if($res)
        {
            move_uploaded_file($tmp_name,'sub_category/'.$path);
            echo "<script>window.location.assign('add_sub_category.php?msg=Record Inserted')</script>";
        }
        else{
            echo "<script>window.location.assign('add_sub_category.php?msg=Try Again')</script>";
        }
    }
    else{
        echo "<script>window.location.assign('add_sub_category.php?msg=Please Fill Form')</script>";
    }
?>