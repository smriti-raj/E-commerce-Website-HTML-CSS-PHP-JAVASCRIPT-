<?php
include("header.php");

    $cid = $_GET["cid"];
    $count = 1;
    include "config.php";
    $res = mysqli_query($conn,"select * from `sub_category` where category_id='$cid'");

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
			<li class="breadcrumb-item active" aria-current="page">Sub Category</li>
		</ol>
	</nav>
	<!-- //breadcrumbs -->
	<!-- Shop -->
	<div class="innerf-pages section">
		<div class="fh-container mx-auto">
			<div class="row my-lg-5 mb-5">
				<div class="col-lg-2"></div>
				<!-- grid right -->
				<div class="col-lg-8 mt-lg-0 mt-5 right-product-grid">
					<!-- card group  -->
					<div class="card-group">
						<!-- card -->
						<?php while($row=mysqli_fetch_array($res)) { ?>
						<div class="col-lg-3 col-sm-6 p-0">
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									<img src="sub_category/<?php echo $row['image']; ?>" alt="img" class="card-img-top">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<h5 class="card-title text-capitalize"><?php echo $row['sub_cat_name']; ?></h5>
								</div>
								<!-- card footer -->
								<div class="card-footer d-flex justify-content-end">
									<a href="product.php?sid=<?php echo $row['id']; ?>" class="formbtn1 btn btn-primary">View More</a>
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