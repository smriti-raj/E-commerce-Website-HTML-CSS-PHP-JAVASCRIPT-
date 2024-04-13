<?php
include("header1.php");
?>
<!-- page details -->
	<div class="breadcrumb-agile">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb m-0">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Admin Login</li>
			</ol>
		</nav>
	</div>
	<!-- //page details -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 mx-auto">
				<h1 class="text-center">Admin Login </h1>
				<?php 
					if(isset($_GET["msg"]))
					{
						echo"<div class='alert alert-danger'>".$_GET["msg"]."</div>";
					}
				?>
				<form method="post" action="check.php">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<center><button type="submit" class="btn formbtn1 btn-primary mx-auto d-block my-5" name="login">Login</button></center>
				</form>
			</div>
		</div>
	</div>
	
	
<?php
include("footer.php");
?>