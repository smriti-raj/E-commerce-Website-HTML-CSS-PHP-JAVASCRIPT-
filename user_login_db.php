<?php

session_start();
if(isset($_REQUEST["login"]))
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	 include("config.php");
	//$conn = mysqli_connect("localhost","root","","project_july_2020_shopping");
	$res = mysqli_query($conn,"SELECT * FROM `user_register` where `email`='$email' and `password`='$password'");
	
	if($row = mysqli_fetch_array($res))
	{
		$_SESSION["email"] = $email;
		$_SESSION["name"] = $row['user_name'];
		echo "<script>window.location.assign('index.php')</script>";
	}
	else{
		echo "<script>window.location.assign('user_login.php?msg=Incorrect Credentials')</script>";
	}
}
else{
	echo "<script>window.location.assign('user_login.php?msg=Something went wrong')</script>";
}
?>