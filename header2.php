<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Shopping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Owl-Carousel-CSS -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
                <h1>
                    <a class="navbar-brand" href="index.php">Shop
                    </a>
                </h1>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    
                    <div class="nav-icon d-flex">
					<?php if(!isset($_SESSION['email'])){ ?>
                        <!-- sigin and sign up -->
                        <a class="text-dark login_btn align-self-center mx-3" href="#myModal_btn" data-toggle="modal" data-target="#myModal_btn">
                            <i class="far fa-user">Login</i>
                        </a>
                        <!-- sigin and sign up -->
					<?php }?>
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="hubcart hubcart2 cart cart box_1">
                            <a class="text-dark login_btn align-self-center mx-3" href="checkout.php">
                            <span> <?php $t = 0;
							if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
								foreach($_SESSION['cart'] as $id=>$quantity){
										$t++;
								}
								 count($_SESSION['cart']);
							}
								echo "<i>".$t."</i>";
							?>
                                        <i class="fas fa-shopping-bag"></i></span>
										
							</a>
                            </div>
                        </div>
                        <!-- //shopping cart ends here -->
						<?php if(isset($_SESSION['email'])){ ?>
						<a class="text-dark login_btn align-self-center mx-3" href="#">
                            <span><i><?php echo $_SESSION['name'];?></i></span>
                        </a>
                        <!-- sigin and sign up -->
                        <a class="text-dark login_btn align-self-center mx-3" href="user_logout.php">
                            <span><i class="far fa-user">Logout</i></span>
                        </a>
                        <!-- sigin and sign up -->
					<?php }?>
                    </div>
                </div>
            </nav>
            <!-- //top nav -->
            <!-- bottom nav -->
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link  active" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Men's clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="px-0 container">
                                    <div class="row">
                                        
										<?php
										include"config.php";
										 $res = mysqli_query($conn,"select * from `category` where type='Men'");
										 while($row=mysqli_fetch_array($res))
										 {
										?>
										<div class="col-md-4">
											<a class="dropdown-item" href="subcat.php?cid=<?php echo $row['id'] ?>"><?php echo $row['category_name'] ?></a>
										</div>
										<?php	
										 }
										?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Women's clothing</a>
                            <div class="dropdown-menu" style="width:100%">
                                <div class="px-0 container">
                                    <div class="row">
                                        
										<?php
										include"config.php";
										 $res = mysqli_query($conn,"select * from `category` where type='Women'");
										 while($row=mysqli_fetch_array($res))
										 {
										?>
										<div class="col-md-4">
											<a class="dropdown-item" href="subcat.php?cid=<?php echo $row['id'] ?>"><?php echo $row['category_name'] ?></a>
										</div>
										<?php	
										 }
										?>
                                    </div>
                                </div>
                            </div>
                        </li>
                         <!-- <li class="nav-item">
                            <a class="nav-link active" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- //bottom nav -->
        </div>
        <!-- //header container -->
    </header>
    <!-- //header -->
