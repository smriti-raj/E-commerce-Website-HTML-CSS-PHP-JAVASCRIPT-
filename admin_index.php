<?php
session_start();
if(isset($_SESSION["email"]))
{
	$email = $_SESSION["email"];
}
else{
	echo "<script>window.location.assign('login.php?msg=Session Out')</script>";
}
?>
<?php
include("header1.php");
?>
<div class="container-fluid my-5">
	<div class="row my-5">
		<div class="col-md-12 my-5">
			<h1 class="text-center welcome1 my-5">Welcome Admin</h1>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>