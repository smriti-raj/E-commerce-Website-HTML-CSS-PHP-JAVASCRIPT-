<?php
    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $feedback = $_POST["feedback"];
        $suggestion = $_POST["suggestion"];
        
        include "config.php";
        $res = mysqli_query($conn,"INSERT INTO `feedback`(`name`, `email`, `feedback`, `suggestion`) VALUES ('$name','$email','$feedback','$suggestion')");
        
        if($res)
        {
            echo "<script>window.location.assign('contact.php?msg=Feedback Sent')</script>";
        }
        else{
            echo "<script>window.location.assign('contact.php?msg=Try Again')</script>";
        }
    }
    else{
        echo "<script>window.location.assign('contact.php?msg=Please Fill Form')</script>";
    }
?>