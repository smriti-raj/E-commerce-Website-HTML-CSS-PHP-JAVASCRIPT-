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
<div class="container-fluid">
	<div class="row">
        <div class="col-md-2"></div>
		<div class="col-md-8 mx-auto d-block my-5">
            <div class="row">
                <div class="col-md-11">
                    <h1 class="text-center welcome my-5" style="display:inline">Add Category</h1>
                </div>
                <div class="col-md-1">
                    <a class="dropdown-item btn btn-danger" href="manage_category.php" >Manage</a>
                </div>
            </div>
            <?php 
                if(isset($_GET["msg"]))
                {
                    echo "<div class='alert alert-info'>".$_GET["msg"]."</div>";
                }
            ?>
            <form method="post" action="category_db.php" style="margin-top:20px;">
                <div class="form-group">
                    <label>Category Type</label>
                    <select name="category_type" class="form-control">
                        <option selected disabled>Select Type</option>
                        <option>Men</option>
                        <option>Women</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="category_name" class="form-control">
                </div>
                <center><button class="btn btn-primary d-block mx-auto" name="submit">Submit</button></center>
            </form>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>