
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
                        <?php
                        if(isset($_SESSION["email"]))
                        {
                        ?>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="dropdown-item" href="add_category.php">Category</a>
                            <!-- <a class="dropdown-item" href="manage_category.php">Manage</a> -->   
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="dropdown-item" href="add_sub_category.php">Sub Category</a>
                            <!-- <a class="dropdown-item" href="manage_sub_category.php">Manage</a> -->
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="dropdown-item" href="add_product.php">Product</a>
                            <!-- <a class="dropdown-item" href="manage_product.php">Manage</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="view_order.php">View Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="view_feedback.php">View Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="logout.php">Logout</a>
                        </li>
                        <?php   
                        }
                        else{
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
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
                    <?php
                        if(isset($_SESSION["email"]))
                        {
                        ?>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="dropdown-item" href="add_category.php">Category</a>
                            <!-- <a class="dropdown-item" href="manage_category.php">Manage</a> -->   
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="dropdown-item" href="add_sub_category.php">Sub Category</a>
                            <!-- <a class="dropdown-item" href="manage_sub_category.php">Manage</a> -->
                        </li>
                        <li class="nav-item dropdown has-mega-menu" style="position:static;">
                            <a class="dropdown-item" href="add_product.php">Product</a>
                            <!-- <a class="dropdown-item" href="manage_product.php">Manage</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="view_order.php">View Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="view_feedback.php">View Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn" href="logout.php">Logout</a>
                        </li>
                        <?php   
                        }
                        else{
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
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
                        <?php
                        }
                        ?>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->