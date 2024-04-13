<?php
include("header.php");

    $pid = $_GET["pid"];
    $count = 1;
    include "config.php";
    $res = mysqli_query($conn,"select * from `product` where id='$pid'");
	$row=mysqli_fetch_array($res);

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
			<li class="breadcrumb-item active" aria-current="page">Single Product</li>
		</ol>
	</nav>
	<!-- //breadcrumbs -->
    <!-- Single -->
    <div class="innerf-pages section py-5">
        <div class="container">
            <div class="row my-sm-5">
                <div class="col-lg-4 single-right-left">
                    <div class="grid images_3_of_2">
                        <div class="flexslider1">
                            <ul class="slides">
                                <li data-thumb="product/<?php echo $row['image'];?>">
                                    <div class="thumb-image">
                                        <img src="product/<?php echo $row['image'];?>" data-imagezoom="true" alt=" " class="img-fluid"> </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                    <h3><?php echo $row['product_name'];?></h3>
                    </h3>
                    <div class="caption">

                        <ul class="rating-single">
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                        <h6>Rs. 
                           <?php echo $row['price'];?> </h6>
                    </div>
                    <div class="desc_single">
                        <h5>Description</h5>
                        <p><?php echo $row['description'];?></p>
                    </div>
                    <div class="occasion-cart">
                        <div class="chr single-item single_page_b">
                            
                                        <div class="col-md-2">
											<a href="add_to_cart.php?x=<?php echo $row['id'];?>" class="btn "><i style="font-size:30px"class="fa fa-shopping-cart"></i> Add to Cart</a>
										</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Single -->
<?php
include("footer.php");
?>