<?php include "header.php";?>
<?php
if(isset($_SESSION["email"]))
{
	$email = $_SESSION["email"];
}
else{
	echo "<script>window.location.assign('index.php?msg=Session Out!! Please Login')</script>";
}
?>
	<!-- inner banner -->
	<div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
			<!-- <span>f</span>ashion
			<span>h</span>ub</h4> -->
	</div>
	<!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Order</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!--checkout-->
    <section class="checkout_wthree py-sm-5 py-3">
        <div class="container">
            <div class="check_w3ls">
                <div class="d-sm-flex justify-content-between mb-4">
                    <h4>Review your order
                    </h4>
                    <h4 class="mt-sm-0 mt-3">Your shopping cart contains
                        <span>following Products</span>
                    </h4>
                </div>
                <div class="checkout-right">
                    <table class="timetable_sub table table-stripped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Product Name</th>

                                <th>Price</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
						 <?php 
						$t =0;$total=0;$pid=0;
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
	foreach($_SESSION['cart'] as $id=>$quantity){

				
			$t++;
			
			include"config.php";
$res  = mysqli_query($conn,"select * from product where `id`='$id'");



if($row=mysqli_fetch_array($res))
{
$pid=$row['id'];
?> 
                            <tr class="rem1">
                                <td class="invert"><?php echo $t; ?></td>
                                <td class="invert-image">
                                    <a href="single_product.php">
                                        <img style="height:100px;width:100px;" src="product/<?php echo $row['image']; ?>" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <form action="increase.php">
												<input type="hidden" value="<?php echo $id; ?>" name="id"/>
												<input type="number" style="width:50px" value="<?php echo $quantity; ?>" name="qty" min="0"/><input type="submit" value="update">
											</form>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert"><?php echo $row['product_name']; ?></td>

                                <td class="invert"><?php $total += ($row['price']*$quantity); echo ($row['price']*$quantity)."<br/>"; ?></td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close1"><a href='removit.php?x=<?php echo $id; ?>' class="btn btn-secondary ml-4"><i class="fa fa-trash"></i></a> </div>
                                    </div>

                                </td>
                            </tr>
<?php } } }
else{
?>
							<tr>
								<td colspan="6">No item in cart</td>
							</tr>
<?php
 } ?>

                        </tbody>
                    </table>
                </div>
                <div class="row checkout-left mt-5">
                    <div class="col-md-4 checkout-left-basket">
                        <h4>Your total amount to be paid is</h4>
                        <ul>
                            <li>Total
                                <i>-</i>
                                <span>Rs. <?php echo $total; ?> /-</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 address_form">
                        <h4>Billing Address</h4>
                        <form action="pay.php" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                            <div class="creditly-wrapper wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Full name: </label>
                                            <input class="billing-address-name form-control" type="hidden" name="pid" placeholder="Product Id" value="<?php echo $pid;?>">
											<input class="billing-address-name form-control" type="hidden" name="amount" placeholder="Product Id" value="<?php echo $total;?>">
											<input class="billing-address-name form-control" type="hidden" name="email" placeholder="Product Id" value="<?php echo $email;?>">
											<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                        </div>
                                        
                                            <div class="card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Landmark: </label>
                                                    <input class="form-control" type="text" placeholder="Landmark">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Address type: </label>
                                            <select class="form-control option-fieldf">
                                                <option>Office</option>
                                                <option>Home</option>
                                                <option>Commercial</option>

                                            </select>
                                        </div>
                                    </div>
                                    <?php
                                    if($total!="0"){
                                    ?>
                                    <button class="btn formbtn1 btn-primary mt-4">Place Order</button>
                                    <?php }?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//checkout-->
 <?php include"footer.php";?>