<?php
include("header.php");
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
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
   <!--services-->
    <div class="agileits-services" id="services">
        <div class="no-gutters agileits-services-row row">
            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-sync-alt p-4"></span>
                <h4 class="mt-2 mb-3">30 days replacement</h4>
            </div>
            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-gift p-4"></span>
                <h4 class="mt-2 mb-3">Gift Card</h4>
            </div>

            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-lock p-4"></span>
                <h4 class="mt-2 mb-3">secure payments</h4>
            </div>
            <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
                <span class="fas fa-shipping-fast p-4"></span>
                <h4 class="mt-2 mb-3">free shipping</h4>
            </div>
        </div>
    </div>
    <!-- //services-->
    <!-- about -->
    <div class="row no-gutters pb-5">
        <div class="col-sm-4">
            <div class="hovereffect">
                <img class="img-fluid" src="images/a1.jpg" alt="">
                <div class="overlay">
                    <h5>women's fashion</h5>
                    <a class="info" href="women.php">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="hovereffect">
                <img class="img-fluid" src="images/a2.jpg" alt="">
                <div class="overlay">
                    <h5>men's fashion</h5>
                    <a class="info" href="men.php">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="hovereffect">
                <img class="img-fluid" src="images/a3.jpg" alt="">
                <div class="overlay">
                    <h5>kid's fashion</h5>
                    <a class="info" href="girls.php">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //about -->
       <!-- product tabs -->
    <section class="tabs_pro py-md-5 pt-sm-3 pb-5">
        <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>s</span>mart clothing</h5>
        <div class="tabs tabs-style-line pt-md-5">
            <nav class="container">
                <ul id="clothing-nav" class="nav nav-tabs tabs-style-line" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#women" id="women-tab" role="tab" data-toggle="tab" aria-controls="women" aria-expanded="true">Women's Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#men" role="tab" id="men-tab" data-toggle="tab" aria-controls="men">Men's Fashion
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#girl" role="tab" id="girl-tab" data-toggle="tab" aria-controls="girl">Girl's Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#boy" role="tab" id="boy-tab" data-toggle="tab" aria-controls="boy">Boy's Fashion</a>
                    </li>
                </ul>
            </nav>
            <!-- Content Panel -->
            <div id="clothing-nav-content" class="tab-content py-sm-5">
                <div role="tabpanel" class="tab-pane fade show active" id="women" aria-labelledby="women-tab">
                    <div id="owl-demo" class="owl-carousel text-center">
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pf1.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="womens.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Self Design Women's Tunic</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$28.00</p>
                                        <p class="line-through">$35.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Self Design Women's Tunic">
                                        <input type="hidden" name="amount" value="28.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pf2.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="womens.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Embroidered Women's Tunic</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$24.99</p>
                                        <p class="line-through">$29.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Embroidered Women's Tunic">
                                        <input type="hidden" name="amount" value="24.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pf3.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="womens.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Sleeveless Women's Top</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$20.99</p>
                                        <p class="line-through">$26.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Sleeveless Women's Top">
                                        <input type="hidden" name="amount" value="20.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>

                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pf9.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="womens.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Slim Women's Blue Jeans</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$19.99</p>
                                        <p class="line-through">$24.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Men's Hooded Blue T-Shirt">
                                        <input type="hidden" name="amount" value="19.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pf11.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="womens.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Slim Women's Blue Jeans</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$14.99</p>
                                        <p class="line-through">$18.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Slim Women's Blue Jeans">
                                        <input type="hidden" name="amount" value="14.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <div class="product-men p-3 text-center">
                                <img src="images/p2.png" class="img-responsive" alt="" />
                                <a href="women.php" class="btn btn-lg bg-info text-white">view more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="men" aria-labelledby="men-tab">
                    <div id="owl-demo1" class="owl-carousel text-center">
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pm1.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Solid Formal Black Shirt</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$40.00</p>
                                        <p class="line-through">$50.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Solid Formal Black Shirt">
                                        <input type="hidden" name="amount" value="40.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pm2.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Solid Formal Brown Shirt</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$24.99</p>
                                        <p class="line-through">$35.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Solid Formal Brown Shirt">
                                        <input type="hidden" name="amount" value="24.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <!-- card -->
                        <div class="item">
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pm11.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Black Casual Men's Blazer</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$20.00</p>
                                        <p class="line-through">$25.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Black Casual Men's Blazer">
                                        <input type="hidden" name="amount" value="20.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pt1.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Slim Fit Men's Black Trousers</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$14.99</p>
                                        <p class="line-through">$18.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Slim Fit Men's Black Trousers">
                                        <input type="hidden" name="amount" value="18.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pt2.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Slim Fit Men's Denim Jeans</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$24.99</p>
                                        <p class="line-through">$35.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Slim Fit Men's Denim Jeans">
                                        <input type="hidden" name="amount" value="24.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class=" card product-men p-3 ">
                                <div class="men-thumb-item ">
                                    <img src="images/pt3.jpg " alt="img " class="card-img-top ">
                                    <div class="men-cart-pro ">
                                        <div class="inner-men-cart-pro ">
                                            <a href="mens.php " class="link-product-add-cart ">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body py-3 px-2 ">
                                    <h5 class="card-title text-capitalize ">Slim Fit Men's Gold Trousers</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold ">$14.99</p>
                                        <p class="line-through ">$18.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Slim Fit Men's Gold Trousers">
                                        <input type="hidden" name="amount" value="14.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">

                            <div class="product-men p-3 text-center">
                                <img src="images/p2.png" class="img-responsive" alt="">
                                <a href="men.php" class="btn btn-lg bg-info text-white">view more</a>
                            </div>
                            <!-- //card -->
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="girl" aria-labelledby="girl-tab">
                    <div id="owl-demo2" class="owl-carousel text-center">
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pg1.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="girl.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Midi/Knee Length Casual Dress</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$20.00</p>
                                        <p class="line-through">$39.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Midi/Knee Length Casual Dress">
                                        <input type="hidden" name="amount" value="20.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pg2.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="girl.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Midi/Knee Length Casual Dress</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$24.99</p>
                                        <p class="line-through">$34.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Midi/Knee Length Casual Dress">
                                        <input type="hidden" name="amount" value="24.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pg3.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="girl.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$14.99</p>
                                        <p class="line-through">$27.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                        <input type="hidden" name="amount" value="14.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3 out_w3">
                                <div class="men-thumb-item position-relative">
                                    <img src="images/pg7.jpg" alt="img" class="card-img-top">
                                    <span class="px-2 position-absolute">out of stock</span>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Girls Party Top and Skirt Set</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$19.00</p>
                                        <p class="line-through">$25.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pg4.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="girl.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Girl's Full Length Party Dress </h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$20.00</p>
                                        <p class="line-through">$35.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Full Length Party Dress">
                                        <input type="hidden" name="amount" value="20.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pg5.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="girl.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$18.00</p>
                                        <p class="line-through">$25.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                        <input type="hidden" name="amount" value="18.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <div class="product-men p-3 text-center">
                                <img src="images/p2.png" class="img-responsive" alt="" />
                                <a href="girls.php" class="btn btn-lg bg-info text-white">view more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="boy" aria-labelledby="boy-tab">
                    <div id="owl-demo3" class="owl-carousel text-center">
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb1.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Shirt, Waistcoat and Pant Set</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$21.00</p>
                                        <p class="line-through">$39.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Shirt, Waistcoat and Pant Set">
                                        <input type="hidden" name="amount" value="21.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb2.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Festive Kurta and Pyjama Set</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$19.99</p>
                                        <p class="line-through">$29.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Festive Kurta and Pyjama Set">
                                        <input type="hidden" name="amount" value="19.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb3.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Boys Casual Shirt and Jeans</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$17.99</p>
                                        <p class="line-through">$24.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Boys Casual Shirt and Jeans">
                                        <input type="hidden" name="amount" value="24.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3 out_w3">
                                <div class="men-thumb-item position-relative">
                                    <img src="images/pb7.jpg" alt="img" class="card-img-top">
                                    <span class="px-2 position-absolute">out of stock</span>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Casual Blazer,Shirt and Trouser Set</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$18.00</p>
                                        <p class="line-through">$26.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb4.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Dungaree Casual Solid Denim</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$19.99</p>
                                        <p class="line-through">$24.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Dungaree Casual Solid Denim">
                                        <input type="hidden" name="amount" value="19.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb5.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Boy's Casual Blue T-Shirt</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$15.00</p>
                                        <p class="line-through">$20.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Boy's Casual Blue T-Shirt">
                                        <input type="hidden" name="amount" value="15.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb6.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Boy's Casual Grey T-Shirt</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$10.00</p>
                                        <p class="line-through">$25.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Boy's Casual Grey T-Shirt">
                                        <input type="hidden" name="amount" value="10.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb8.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Casual Shirt and Denim Jeans</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$15.99</p>
                                        <p class="line-through">$25.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Casual Shirt and Denim Jeans">
                                        <input type="hidden" name="amount" value="15.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb9.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Festive Kurta And Pyjama Set</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$18.00</p>
                                        <p class="line-through">$25.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Festive Kurta And Pyjama Set">
                                        <input type="hidden" name="amount" value="18.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <div class="product-men p-3 text-center">
                                <img src="images/p2.png" class="img-responsive" alt="" />
                                <a href="boys.php" class="btn btn-lg bg-info text-white">view more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- //product tabs -->

    <!-- insta posts -->
    <section class="py-lg-5">
        <!-- insta posts -->
        <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>s</span>hop on insta</h5>
        <div class="gallery row no-gutters pt-lg-5">
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i1.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 56</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 2</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i2.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 89</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 5</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i3.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 42</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 1</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i4.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 38</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 0</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i5.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 38</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 0</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i6.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 38</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 0</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="gallery row no-gutters pb-5">
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i7.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 56</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 2</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i8.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 89</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 5</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i9.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 42</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 1</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i10.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 38</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 0</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i11.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 38</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 0</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                <img src="images/i12.jpg" class="img-fluid" alt="" />
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes">
                            <i class="fas fa-heart"></i> 38</li>
                        <li class="gallery-item-comments">
                            <i class="fas fa-comment"></i> 0</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //insta posts -->
<?php
include("footer.php");
?>