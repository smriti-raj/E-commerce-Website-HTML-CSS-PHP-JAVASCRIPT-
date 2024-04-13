<?php
session_start();
if(isset($_SESSION["email"]))
{
    $email = $_SESSION["email"];
    $id = $_GET["id"];
    include "config.php";
    $res1 = mysqli_query($conn,"select * from `product` where id='$id'");
    if($row1=mysqli_fetch_array($res1))
    {

    }
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
        <div class="col-md-1"></div>
		<div class="col-md-10 mx-auto d-block my-5">
        <div class="row">
                <div class="col-md-11">
                    <h1 class="text-center welcome my-5" style="display:inline">Update Product</h1>
                </div>
                <div class="col-md-1">
                    <a class="dropdown-item btn btn-danger" href="manage_product.php">Manage</a>
                </div>
            </div>
            <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id?>">
                <div class="form-group">
                    <label>Choose Sub-Category </label>
                    <select name="sub_category" class="form-control">
                        <option selected disabled>Select Sub-Category</option>
                        <?php
                        include "config.php";
                         $res = mysqli_query($conn,"select * from `sub_category`");
                         while($row=mysqli_fetch_array($res))
                         {
                            if($row1["sub_cat_id"]==$row["id"])
                            {
                                echo "<option value='$row[id]' selected>".$row["sub_cat_name"]."</option>";    
                            }
                            else{
                                echo "<option value='$row[id]'>".$row["sub_cat_name"]."</option>";
                            }
                            
                         }
                        ?>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Product Name</label>
                        <input type="text" name="product" class="form-control" value="<?php echo $row1["product_name"]?>">
						
						<label>Price</label>
                        <input type="text" name="price" class="form-control" value="<?php echo $row1["price"]?>">
						
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" >
                        <input type="hidden" name="hidden_image" class="form-control" value="<?php echo $row1["image"]?>">
                    </div>
                    <div class="form-group col-md-6">
                       <label>Description</label>
                       <textarea class="form-control" name="description" rows="7"><?php echo $row1["description"]?></textarea>
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

<?php
    if(isset($_POST["submit"]))
    {
        $id = $_POST["id"];
        $sub_category = $_POST["sub_category"];
        $product_name = $_POST["product"];
        $price = $_POST["price"];
        $description = $_POST["description"];

        if($_FILES["image"]["name"])
        {
            $fname = $_FILES["image"]["name"];
            $tmp_name = $_FILES["image"]["tmp_name"];
            $path = rand().$fname;
            move_uploaded_file($tmp_name,'product/'.$path);
        }
        else{
            $path = $_POST["hidden_image"];
        }

        include "config.php";
        $res = mysqli_query($conn,"UPDATE `product` SET `sub_cat_id`='$sub_category',`product_name`='$product_name',`price`='$price',`description`='$description',`image`='$path' WHERE `id`='$id'");
        
        if($res)
        {
            
            echo "<script>window.location.assign('manage_product.php?msg=Record Updated')</script>";
        }
        else{
            echo "<script>window.location.assign('manage_product.php?msg=Try Again')</script>";
        }
    }
    
?>