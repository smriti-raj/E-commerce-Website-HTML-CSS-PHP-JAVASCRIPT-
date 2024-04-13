<?php
    if(isset($_POST["submit"]))
    {
        $subcategory = $_POST["subcategory"];
        $product = $_POST["product"];
        $price = $_POST["price"];
        $description = $_POST["description"];

        $fname = $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];
        $path = rand().$fname;
        
        include "config.php";
        $res = mysqli_query($conn,"INSERT INTO `product`(`sub_cat_id`, `product_name`,`price`,`description`, `image`) VALUES ('$subcategory','$product','$price','$description','$path')");
        
        if($res)
        {
            move_uploaded_file($tmp_name,'product/'.$path);
            echo "<script>window.location.assign('add_product.php?msg=Record Inserted')</script>";
        }
        else{
            echo "<script>window.location.assign('add_product.php?msg=Try Again')</script>";
        }
    }
    else{
        echo "<script>window.location.assign('add_product.php?msg=Please Fill Form')</script>";
    }
?>