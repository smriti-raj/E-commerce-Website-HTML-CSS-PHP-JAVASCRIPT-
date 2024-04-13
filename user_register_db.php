<?php
	session_start();
    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $contact = $_POST["contact"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $gender = $_POST["gender"];
        
        include "config.php";
        $res = mysqli_query($conn,"INSERT INTO `user_register`(`user_name`, `email`,`password`,`contact`, `address`, `city`, `state`, `gender`) VALUES ('$name','$email','$password','$contact','$address','$city','$state','$gender')");
        
        if($res)
        {
			$_SESSION['name']=$name;
			$_SESSION['email']=$email;
            echo "<script>window.location.assign('index.php?msg=User Register')</script>";
        }
        else{
            echo "<script>window.location.assign('userregister.php?msg=Try Again')</script>";
        }
    }
    else{
        echo "<script>window.location.assign('userregister.php?msg=There is some error')</script>";
    }
?>