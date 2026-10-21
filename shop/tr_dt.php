<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

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
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-12">
							<div class="single_travel wow fadeInUp" data-wow-duration="1s">
								<figure>
                                                                    <img class="img-fluid w-100"style="width: 100%;height: 300px" src="../img/jumping-happy-obedient-dog-pet-training-concept-web-banner-puppy-listening-funny-ears-copy-space-163712682.jpg" alt="">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="#">Pets Diseases  and other Details</a>
									</h3>
									
								</div>
							</div>
						</div>
                                              <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from tut  order by id desc");
                                                         while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                        ?>
						<div class="col-lg-12 col-md-12 col-sm-12">
							
								<figure>
                                                                    <h3>
										<?php echo $r_gal[1] ?>
									</h3>
                                                                    <br/>
                                                                    <?php echo $r_gal[3] ?>
								</figure>
								
									
									
                                                    <hr>
							
						</div>
                                            
                                            
						<?php
                                                
                                                
                                                            }
                                                            
                                                            
                                                            ?>
						
						
						
					</div>

					
				</div>
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						
						
						
						
						<div class="br"></div>
                                                <aside class="single_sidebar_widget post_category_widget">
                                                    
                                                    
                                                    <img style="width: 100%;height: 500px" src="../img/ph1.jpg">
                                                </aside>
                                                <div class="br"></div>
                                                <aside class="single_sidebar_widget post_category_widget">
                                                    
                                                    
                                                    <img style="width: 100%;height: 500px" src="../img/ph2.jpg">
                                                </aside>
                                                <div class="br"></div>
                                                <aside class="single_sidebar_widget post_category_widget">
                                                    
                                                    
                                                    <img style="width: 100%;height: 500px" src="../img/ph3.jpg">
                                                </aside>
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