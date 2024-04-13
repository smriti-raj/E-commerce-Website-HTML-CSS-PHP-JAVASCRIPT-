<?php
session_start();
if(isset($_SESSION["email"]))
{
    $email = $_SESSION["email"];
    $id = $_GET["id"];
    $count = 1;
    include "config.php";
    $res = mysqli_query($conn,"select * from `category` where id='$id'");
    if($row=mysqli_fetch_array($res))
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
                    <h1 class="text-center welcome my-5" style="display:inline">Update Category</h1>
                </div>
                <div class="col-md-1">
                    <a class="dropdown-item btn btn-danger" href="manage_category.php" >Manage</a>
                </div>
            </div>
            <form method="post">
            <input type="hidden" name="id" class="form-control" value="<?php echo $row["id"]?>"/>
                <div class="form-group">
                    <label>Category Type</label>
                    <select name="category_type" class="form-control">
                        
                        <?php
                        if($row["type"]=="Men")
                        {
                        ?>
                        <option selected>Men</option>
                        <option>Women</option>
                        <?php
                        }
                        else if($row["type"]=="Women")
                        {
                        ?>
                        <option>Men</option>
                        <option selected>Women</option>
                        <?php
                        }
                        else{
                        ?>
                        <option selected disabled>Select Type</option>
                        <option>Men</option>
                        <option>Women</option>
                        <?php   
                        }
                        ?>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="category_name" class="form-control" value="<?php echo $row["category_name"]?>"/>
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
        $category_type = $_POST["category_type"];
        $category_name = $_POST["category_name"];
        
        include "config.php";
        $res = mysqli_query($conn,"UPDATE `category` SET `type`='$category_type', `category_name`='$category_name' WHERE `id`='$id'");
        
        if($res)
        {
            echo "<script>window.location.assign('manage_category.php?msg=Record Updated')</script>";
        }
        else{
            echo "<script>window.location.assign('manage_category.php?msg=Try Again')</script>";
        }
    }
    
?>