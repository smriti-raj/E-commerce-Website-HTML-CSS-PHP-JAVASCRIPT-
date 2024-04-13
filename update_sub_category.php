<?php
session_start();
if(isset($_SESSION["email"]))
{
    $email = $_SESSION["email"];
    $id = $_GET["id"];
    include "config.php";
    $res1 = mysqli_query($conn,"select * from `sub_category` where id='$id'");
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
        <div class="col-md-2"></div>
            <div class="col-md-8 mx-auto d-block my-5">
            <div class="row">
                    <div class="col-md-11">
                        <h1 class="text-center welcome my-5" style="display:inline">Update Sub Category</h1>
                    </div>
                    <div class="col-md-1">
                        <a class="dropdown-item btn btn-danger" href="manage_sub_category.php">Manage</a>
                    </div>
            </div>
            <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id?>">
                <div class="form-group">
                    <label>Choose Category </label>
                    <select name="category_type" class="form-control">
                        <option selected disabled>Select Category</option>
                        <?php
                        include "config.php";
                         $res = mysqli_query($conn,"select * from `category` order by `type`");
                         while($row=mysqli_fetch_array($res))
                         {
                            if($row1["category_id"]==$row["id"])
                            {
                                echo "<option value='$row[id]' selected>".$row["type"]."-".$row["category_name"]."</option>";    
                            }
                            else{
                                echo "<option value='$row[id]'>".$row["type"]."-".$row["category_name"]."</option>";
                            }
                            
                         }
                        ?>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Sub Category Name</label>
                        <input type="text" name="sub_category_name" class="form-control" value="<?php echo $row1["sub_cat_name"]?>">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" >
                        <input type="hidden" name="hidden_image" class="form-control" value="<?php echo $row1["image"]?>">
                    </div>
                    <div class="form-group col-md-6">
                       <label>Description</label>
                       <textarea class="form-control" name="description" rows="4"><?php echo $row1["description"]?></textarea>
                    </div>
                </div>
                <center>
                <button class="btn btn-primary d-block mx-auto formbtn1" name="submit">Submit</button>
                </center>
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
        $category_type = $_POST["category_type"];
        $sub_category_name = $_POST["sub_category_name"];
        $description = $_POST["description"];

        if($_FILES["image"]["name"])
        {
            $fname = $_FILES["image"]["name"];
            $tmp_name = $_FILES["image"]["tmp_name"];
            $path = rand().$fname;
            move_uploaded_file($tmp_name,'sub_category/'.$path);
        }
        else{
            $path = $_POST["hidden_image"];
        }

        include "config.php";
        $res = mysqli_query($conn,"UPDATE `sub_category` SET `category_id`='$category_type',`sub_cat_name`='$sub_category_name',`description`='$description',`image`='$path' WHERE `id`='$id'");
        
        if($res)
        {
            
            echo "<script>window.location.assign('manage_sub_category.php?msg=Record Updated')</script>";
        }
        else{
            echo "<script>window.location.assign('manage_sub_category.php?msg=Try Again')</script>";
        }
    }
    
?>