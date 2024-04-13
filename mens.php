<?php
include('header.php');
?>
<style>
	.newcont{
		border:2px solid #20A388;
		
	}
	
</style>
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
			<li class="breadcrumb-item active" aria-current="page">Men Category</li>
		</ol>
	</nav>
	<!-- //breadcrumbs -->
	<!-- Shop -->
	<div class="innerf-pages section">
		<div class="fh-container mx-auto">
            <?php
                include"config.php";
                $res = mysqli_query($conn,"select * from `category` where type='Men'");
                while($row=mysqli_fetch_array($res))
                {
                ?>
				<div class="container newcont">
                <div class="row marginrow" >
                    <div class="col-md-1"></div>
                    <div class="col-md-4 ">
						<ul>
							<hr>
							<li><h2><a class="dropdown-item" href="subcat.php?cid=<?php echo $row['id'] ?>"><?php echo $row['category_name'] ?></a></h1></li>
							<hr>
						</ul>
                    </div>
                
				
                <?php	
                }
                ?>
                  </div></div>  
        </div>
    </div>
<?php
include('footer.php');
?>