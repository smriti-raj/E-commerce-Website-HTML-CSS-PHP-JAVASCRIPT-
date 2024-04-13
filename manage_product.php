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
        <div class="col-md-1"></div>
		<div class="col-md-10 mx-auto d-block my-5">
            <div class="row">
                <div class="col-md-11">
                    <h1 class=" welcome my-5">Manage Product</h1>
                </div>
                <div class="col-md-1">
                    <a class="dropdown-item btn btn-danger" href="add_product.php">Add</a>
                </div>
            </div>
            <?php 
                if(isset($_GET["msg"]))
                {
                    echo "<div class='alert alert-info'>".$_GET["msg"]."</div>";
                }
            ?>
             <table class="display table table-bordered" id="example">
                <tr>
                    <th>#</th>
                    <th>Sub-Category</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    $count = 1;
                    include "config.php";
                    $res = mysqli_query($conn,"select product.*,sub_category.sub_cat_name from `sub_category` inner join `product` on sub_category.id=product.sub_cat_id");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo "<tr>";
                        echo "<td>".$count."</td>";
                        echo "<td>".$row["sub_cat_name"]."</td>";
                        echo "<td>".$row["product_name"]."</td>";
                        echo "<td>".$row["price"]."</td>";
                        echo "<td>".$row["description"]."</td>";
                        echo "<td><img src='product/$row[image]' style='width:250px; height:200px;'></td>";
                        echo "<td><a href='update_product.php?id=$row[id]'><i class='fa fa-edit text-success'></i></a></td>";
                        echo "<td><a href='delete_product.php?id=$row[id]'><i class='fa fa-trash text-danger'></i></a></td>";
                        echo "</tr>";
                        $count++;
                    }
                ?>
            </table>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>