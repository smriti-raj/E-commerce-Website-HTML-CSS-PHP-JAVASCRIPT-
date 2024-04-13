<?php
include("header.php");
?>
<!-- page details -->
	<div class="breadcrumb-agile">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb m-0">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Customer Register</li>
			</ol>
		</nav>
	</div>
	<!-- //page details -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 mx-auto">
			<h1 class="text-center">Customer Register </h1>
			<?php 
				if(isset($_GET["msg"]))
				{
					echo"<div class='alert alert-danger'>".$_GET["msg"]."</div>";
				}
			?>
			<form method="post" action="user_register_db.php">
                <div class="form-group">
					<label>Name</label>
					<input type="name" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
                <div class="form-group">
					<label>Contact</label>
					<input type="number" min="0" name="contact" class="form-control">
				</div>
                <div class="form-group">
					<label>Address</label>
					<textarea  name="address" class="form-control"></textarea>
				</div>
                <div class="form-group">
					<label>City</label>
					<input type="text" name="city" class="form-control">
				</div>
                <div class="form-group">
					<label>State</label>
					<input type="text"  name="state" class="form-control">
				</div>
               
                <div class="form-group">
					<label>Gender</label>&nbsp; &nbsp;
					<input type="radio"  name="gender" value="male">Male
                    <input type="radio"  name="gender" value="female">Female
				</div>
				<center><button type="submit" class="btn formbtn1 btn-primary mx-auto d-block my-5" name="submit">Register</button></center>
			</form>
		</div>
	</div>
</div>
	
	
<?php
include("footer.php");
?>