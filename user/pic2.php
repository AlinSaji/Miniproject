<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$mid=$_GET['mid'];
$sel=mysqli_query($dbcon,"select * from hos_data where em='$mid'");
    $r=mysqli_fetch_row($sel);
?>
<?php

if($usr=$_SESSION['uid'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="../temp/img/favicon.png" type="image/png">
	<title><?php echo $title ?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../temp/css/bootstrap.css">
	<link rel="stylesheet" href="../temp/vendors/linericon/style.css">
	<link rel="stylesheet" href="../temp/css/font-awesome.min.css">
	<link rel="stylesheet" href="../temp/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="../temp/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="../temp/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="../temp/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="../temp/vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="../temp/css/style.css">
	<link rel="stylesheet" href="../temp/css/responsive.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<?php 
                        
                        include './menu.php';
                        ?>
		</div>
	</header>
	<!--================ Header Menu Area =================-->

	<!--================ Banner Area =================-->
	
	<!--================ End Banner Area =================-->

	<!--================Category Area =================-->
	<section class="category_area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<div class="single_travel wow fadeInUp" data-wow-duration="1s">
								<figure>
                                                                    <img class="img-fluid w-100"style="width: 100%;height: 300px" src="../img3/<?php echo $r[8] ?>" alt="">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="#"><?php echo $r[1] ?></a>
									</h3>
									
								</div>
							</div>
						</div>
                                              <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from pic_db where uid='$mid' order by id desc");
                                                         while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                        ?>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
								<figure>
                                                                    <img class="img-fluid w-100" style="width: 100%;height: 400px" src="../img4//<?php echo $r_gal[8] ?>" alt="">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="ph_dt1.php?mid=<?php echo $r_gal[0] ?>"><?php echo $r_gal[1] ?></a>
									</h3>
									<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<a href="#">
												<span style="color: lightskyblue">Gender:- <?php echo $r_gal[4] ?></span><span style="color: lightskyblue">Age:- <?php echo $r_gal[14] ?></span>
                                                                                                <span class="icon fa fa-money"></span><b style="color: green;font-size: larger"> <?php echo $r_gal[13] ?> Rs/-</b>
											</a>
										</div>
                                                                            
										<div>
                                                                                    <a class="read_more" href="ph_dt1.php?mid=<?php echo $r_gal[0] ?>">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
                                            
                                            
						<?php
                                                
                                                
                                                            }
                                                            
                                                            
                                                            ?>
						
						
						
					</div>

					
				</div>
				
			</div>
		</div>
	</section>
	<!--================Category Area =================-->

	<!--================ start footer Area  =================-->
	
	<!--================ End footer Area  =================-->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="../temp/#">
			<i class="fa fa-angle-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../temp/js/jquery-3.2.1.min.js"></script>
	<script src="../temp/js/popper.js"></script>
	<script src="../temp/js/bootstrap.min.js"></script>
	<script src="../temp/js/stellar.js"></script>
	<script src="../temp/vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="../temp/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="../temp/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="../temp/vendors/isotope/isotope-min.js"></script>
	<script src="../temp/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="../temp/vendors/jquery-ui/jquery-ui.js"></script>
	<script src="../temp/js/jquery.ajaxchimp.min.js"></script>
	<script src="../temp/js/mail-script.js"></script>
	<script src="../temp/js/wow.min.js"></script>
	<script src="../temp/https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="../temp/js/theme.js"></script>
</body>

</html>