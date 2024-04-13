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
                <div class="col-md-12">
                    <h1 class="text-center welcome my-5">View User Order</h1>
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
                    <th>User Email</th>
                    <th>Order ID</th>
                    <th>Order Date</th>
                    <th>Price</th>
					
                </tr>
                <?php
                    $count = 1;
                    include "config.php";
                    $res = mysqli_query($conn,"select * from user_order");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo "<tr>";
                        echo "<td>".$count."</td>";
                        echo "<td>".$row["user_email"]."</td>";
                        echo "<td>".$row["id"]."</td>";
                        echo "<td>".$row["order_date"]."</td>";
                        echo "<td> Rs.".$row["amount"]."/-</td>";
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