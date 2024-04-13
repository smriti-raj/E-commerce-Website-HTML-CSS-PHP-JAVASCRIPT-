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
                    <h1 class="text-center welcome my-5" style="display:inline">Add Product</h1>
                </div>
                <div class="col-md-1">
                    <a class="dropdown-item btn btn-danger" href="manage_product.php">Manage</a>
                </div>
            </div>
            <?php 
                if(isset($_GET["msg"]))
                {
                    echo "<div class='alert alert-info'>".$_GET["msg"]."</div>";
                }
            ?>
            <form method="post" action="product_db.php" enctype="multipart/form-data" style="margin-top:20px;">
                <div class="form-group">
                    <label>Choose Sub-Category </label>
                    <select name="subcategory" class="form-control">
                        <option selected disabled>Select Sub-Category</option>
                        <?php
                        include "config.php";
                         $res = mysqli_query($conn,"select * from `sub_category`");
                         while($row=mysqli_fetch_array($res))
                         {
                            echo "<option value='$row[id]'>".$row["sub_cat_name"]."</option>";
                         }
                        ?>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Product Name</label>
                        <input type="text" name="product" class="form-control">
						<label>Product Price</label>
                        <input type="text" name="price" class="form-control">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                       <label>Description</label>
                       <textarea class="form-control" name="description" rows="7"></textarea>
                    </div>
                </div>
                <center><button class="btn formbtn1 btn-primary d-block mx-auto" name="submit">Submit</button></center>
            </form>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>