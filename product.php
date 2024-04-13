<?php
include("header.php");

    $sid = $_GET["sid"];
    $count = 1;
    include "config.php";
    $res = mysqli_query($conn,"select * from `product` where sub_cat_id='$sid'");

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
			<li class="breadcrumb-item active" aria-current="page">Products</li>
		</ol>
	</nav>
	<!-- //breadcrumbs -->
	<!-- Shop -->
	<div class="innerf-pages section">
		<div class="fh-container mx-auto">
			<div class="row my-lg-5 mb-5">
					<div class="col-lg-1"></div>
				<!-- grid right -->
				<div class="col-lg-9 mt-lg-0 mt-5 right-product-grid">
					<!-- card group  -->
					<div class="card-group">
						<!-- card -->
						<?php while($row=mysqli_fetch_array($res)) { ?>
						<div class="col-lg-3 col-sm-6 p-0">
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									<img src="product/<?php echo $row['image']; ?>" alt="img" class="card-img-top">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single_product.php?pid=<?php echo $row['id'];?>" class="link-product-add-cart btn btn-primary">Quick View</a>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<div class="row">
										<div class="col-md-9">
											<h5 class="card-title text-capitalize"><?php echo $row['product_name']; ?></h5>
											<div class="card-text d-flex justify-content-between">
												<p class="text-dark font-weight-bold" style="text-decoration:none;">Rs. <?php echo $row['price']; ?></p>
											</div>
										</div>
										<div class="col-md-1"></div>
										<div class="col-md-2">
											<a href="add_to_cart.php?x=<?php echo $row['id'];?>" ><i style="font-size:30px"class="fa fa-shopping-cart"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }?>
						<!-- //card -->
						
							<!-- //row  -->
						</div>
						<!-- //card group 1-->
						
					</div>
				</div>
			</div>
		</div>
		<!--// Shop -->
<?php
include("footer.php");
?>