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
                    <h1 class="text-center welcome my-5" style="display:inline">Add Sub Category</h1>
                </div>
                <div class="col-md-1">
                    <a class="dropdown-item btn btn-danger" href="manage_sub_category.php">Manage</a>
                </div>
            </div>
			
            <?php 
                if(isset($_GET["msg"]))
                {
                    echo "<div class='alert alert1 alert-info'>".$_GET["msg"]."</div>";
                }
            ?>
            <form method="post" action="sub_category_db.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Choose Category </label>
                    <select name="category_type" class="form-control">
                        <option selected disabled value="">Select Category</option>
                        <?php
                        include"config.php";
                         $res = mysqli_query($conn,"select * from `category` order by `type`");
                         while($row=mysqli_fetch_array($res))
                         {
                            echo "<option value='$row[id]'>".$row["type"]."-".$row["category_name"]."</option>";
                         }
                        ?>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Sub Category Name</label>
                        <input type="text" name="sub_category_name" class="form-control">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                       <label>Description</label>
                       <textarea class="form-control" name="description" rows="4"></textarea>
                    </div>
                </div>
                <center><button class="btn btn-primary d-block mx-auto formbtn1" name="submit">Submit</button></center>
            </form>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>