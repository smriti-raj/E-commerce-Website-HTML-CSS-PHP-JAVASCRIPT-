<?php
session_start();
unset($_SESSION["email"]);
echo "<script>window.location.assign('index.php?msg=Logout Successfully	')</script>";
?>