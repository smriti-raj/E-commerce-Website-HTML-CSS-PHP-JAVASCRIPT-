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
                        <h1 class=" welcome my-5">Manage Sub Category</h1>
                    </div>
                    <div class="col-md-1">
                        <a class="dropdown-item btn btn-danger" href="add_sub_category.php">Add</a>
                    </div>
                </div>
            <?php 
                if(isset($_GET["msg"]))
                {
                    echo "<div class='alert alert-info'>".$_GET["msg"]."</div>";
                }
            ?>
             <table class="display table table-striped table-bordered" id="example">
                <tr>
                    <th>#</th>
                    <th>Category Type</th>
                    <th>Sub Category Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    $count = 1;
                    include "config.php";
                    $res = mysqli_query($conn,"select sub_category.*,category.category_name,category.type from `sub_category` inner join `category` on category.id=sub_category.category_id");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo "<tr>";
                        echo "<td>".$count."</td>";
                        echo "<td>".$row["type"]." - ".$row["category_name"]."</td>";
                        echo "<td>".$row["sub_cat_name"]."</td>";
                        echo "<td>".$row["description"]."</td>";
                        echo "<td><img src='sub_category/$row[image]' style='width:250px; height:200px;'></td>";
                        echo "<td><a href='update_sub_category.php?id=$row[id]'><i class='fa fa-edit text-success'></i></a></td>";
                        echo "<td><a href='delete_sub_category.php?id=$row[id]'><i class='fa fa-trash text-danger'></i></a></td>";
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