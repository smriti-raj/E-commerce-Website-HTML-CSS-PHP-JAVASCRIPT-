<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart Page - Ustora Demo</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
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
                            <?php if(!isset($_SESSION['email'])){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="user_login.php">Login</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="userregister.php">Register</a>
                                </li> 
                            <?php }else{?>
                                <li class="nav-item">
                                 <a class="text-dark login_btn align-self-center mx-3" href="user_logout.php">
                                 <span>Logout</i></span>
                                </li>
                                <?php
                             }
                             ?>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
                    <div class="col-sm-4">
                    <a class="text-dark login_btn align-self-center mx-3" href="checkout.php">
                        <div class="shopping-item">
                           Cart - <span class="cart-amunt">
                                <?php $t = 0;
                                if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
                                    foreach($_SESSION['cart'] as $id=>$quantity){
                                            $t++;
                                    }
                                    count($_SESSION['cart']);
                                }
                                    echo "<i>".$t."</i>";
                                ?>
                            </span> <i class="fa fa-shopping-cart"></i> <span class="product-count"> <?php echo $t; ?>
                            <?php if(isset($_SESSION['email'])){ ?>
                            <a class="text-dark login_btn align-self-center mx-3" href="#">
                            
                                <span><i><?php echo $_SESSION['name'];?></i></span>
                                
                            </a>
                            <?php }?>
                                </span>
                        </div>  
					    </a>
                    </div>
                </div>
            </div>
        </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link  active" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a href="mens.php">Men's clothing</a>
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a href="womens.php">Women's clothing</a>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <?php if(!isset($_SESSION['email'])){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="user_login.php">Login</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="userregister.php">Register</a>
                                </li> 
                                <?php }else{?>
                                    <li class="nav-item">
                                 <a class="text-dark login_btn align-self-center mx-3" href="user_logout.php">
                                 <span>Logout</i></span>
                                </li>
                             </a><?php
                             }
                             ?>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->