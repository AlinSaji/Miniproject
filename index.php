<?php
include 'connection.php';
ob_start();
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="temp/img/favicon.png" type="image/png">
	<title><?php echo $title ?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="temp/css/bootstrap.css">
	<link rel="stylesheet" href="temp/vendors/linericon/style.css">
	<link rel="stylesheet" href="temp/css/font-awesome.min.css">
	<link rel="stylesheet" href="temp/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="temp/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="temp/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="temp/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="temp/vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="temp/css/style.css">
	<link rel="stylesheet" href="temp/css/responsive.css">
        <style>
        
      

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}  
        
        </style>
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<?php
                        include 'menu.php';
                        
                        ?>
		</div>
	</header>
	<!--================ Header Menu Area =================-->

	<!--================ Home Banner Area =================-->
        <section class="home_banner_area">
            
            
            <video style="width: 100%" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source style="width: 100%" src="videos/1.mp4" type="video/mp4">
  </video>
        </section
        
        
        
        <section class="travel_category">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Welcome  to our website  Pet Paradise</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row owl-carousel" id="travel_cat">
				<div class="single_travel wow fadeIn" data-wow-duration="1s">
					<figure>
						<img class="img-fluid" src="temp/img/travel/t1.jpg" alt="">
					</figure>
					<div class="overlay"></div>
					<div class="text-wrap">
						<h3>
							<a href="#">Pet Paradise</a>
						</h3>
						
					</div>
				</div>
				<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
					<figure>
						<img class="img-fluid" src="temp/img/travel/t2.jpg" alt="">
					</figure>
					<div class="overlay"></div>
					<div class="text-wrap">
						<h3>
							<a href="#">Pet Paradise</a>
						</h3>
						
					</div>
				</div>
				<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
					<figure>
						<img class="img-fluid" src="temp/img/travel/t3.jpg" alt="">
					</figure>
					<div class="overlay"></div>
					<div class="text-wrap">
						<h3>
							<a href="#">Pet Paradise</a>
						</h3>
						
					</div>
				</div>
				<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".9s">
					<figure>
						<img class="img-fluid" src="temp/img/travel/t1.jpg" alt="">
					</figure>
					<div class="overlay"></div>
					<div class="text-wrap">
						<h3>
							<a href="#">Pet Paradise</a>
						</h3>
						
					</div>
				</div>
				<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
					<figure>
						<img class="img-fluid" src="temp/img/travel/t2.jpg" alt="">
					</figure>
					<div class="overlay"></div>
					<div class="text-wrap">
						<h3>
							<a href="#">Pet Paradise</a>
						</h3>
						
					</div>
				</div>
				<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".9s">
					<figure>
						<img class="img-fluid" src="temp/img/travel/t3.jpg" alt="">
					</figure>
					<div class="overlay"></div>
					<div class="text-wrap">
						<h3>
							<a href="#">Pet Paradise</a>
						</h3>
						
					</div>
				</div>
				<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
					<figure>
						<img class="img-fluid" src="temp/img/travel/t1.jpg" alt="">
					</figure>
					<div class="overlay"></div>
					<div class="text-wrap">
						<h3>
							<a href="#">Pet Paradise</a>
						</h3>
						
					</div>
				</div>
				<div class="single_travel wow fadeIn" data-wow-duration="1s" data-wow-delay=".9s">
					<figure>
						<img class="img-fluid" src="temp/img/travel/t2.jpg" alt="">
					</figure>
					<div class="overlay"></div>
					<div class="text-wrap">
						<h3>
							<a href="#">Pet Paradise</a>
						</h3>
						
					</div>
				</div>
			</div>
		</div>
	</section>
        
        
        
        
        
        
        <section class="latest_blog_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>About 
							<br>Pet paradise .</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="single_travel wow fadeInUp" data-wow-duration="1s">
						<figure>
							<img class="img-fluid w-100" src="temp/img/blog-post/b1.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Pet Paradise</a>
							</h3>
							
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
						<figure>
							<img class="img-fluid w-100" src="temp/img/blog-post/b2.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Pet Paradise</a>
							</h3>
							
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
						<figure>
							<img class="img-fluid w-100" src="temp/img/blog-post/b3.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Pet Paradise</a>
							</h3>
							
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single_travel wow fadeInUp mt--60" data-wow-duration="1s" data-wow-delay=".6s">
						<figure>
							<img class="img-fluid w-100" src="temp/img/blog-post/b4.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Pet Paradise</a>
							</h3>
							
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single_travel wow fadeInUp mt--60" data-wow-duration="1s" data-wow-delay=".8s">
						<figure>
							<img class="img-fluid w-100" src="temp/img/blog-post/b5.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Pet Paradise</a>
							</h3>
							
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-12">
					<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
						<figure>
							<img class="img-fluid w-100" src="temp/img/blog-post/b6.jpg" alt="">
						</figure>
						<div class="overlay"></div>
						<div class="text-wrap">
							<h3>
								<a href="#">Pet Paradise</a>
							</h3>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
        
        
        
        
        <section class="different_places">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Let Us Find Your Pet Care Within a Sec.</h1>
						<p>
							"Pet Paradise is the go-to place for pet lovers, offering quality products, expert tips, and joyful inspiration for every furry friend. We’re here to keep tails wagging, purrs coming, and pets living their happiest lives."
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center mt-480" data-wow-duration="1s">
						<img class="img-fluid w-100" src="temp/img/places/p1.jpg" alt="">
						<div class="overlay"></div>
						<h4>Pet Paradise
							</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".2s">
						<img class="img-fluid w-100" src="temp/img/places/p2.jpg" alt="">
						<div class="overlay"></div>
						<h4>Pet Paradise
							</h4>
					</div>
					<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="1s">
						<img class="img-fluid w-100" src="temp/img/places/p3.jpg" alt="">
						<div class="overlay"></div>
						<h4>Pet Paradise
							</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".4s">
						<img class="img-fluid w-100" src="temp/img/places/p4.jpg" alt="">
						<div class="overlay"></div>
						<h4>Pet Paradise
							</h4>
					</div>
					<div class="single_place wow fadeIn text-center" data-wow-duration="1s" data-wow-delay=".8s">
						<img class="img-fluid w-100" src="temp/img/places/p5.jpg" alt="">
						<div class="overlay"></div>
						<h4>Pet Paradise
							</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_place wow fadeIn text-center mt-240" data-wow-duration="1s" data-wow-delay=".6s">
						<img class="img-fluid w-100" src="temp/img/places/p6.jpg" alt="">
						<div class="overlay"></div>
						<h4>Pet Paradise
							</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Travel Category Area =================-->
	
	<!--================ End Popular Post Area =================-->

	<!--================ start footer Area  =================-->
        <footer class="footer-area section-gap">
		<div class="container">
			<div class="single-footer-widget footer_middle">
				<img src="temp/img/logo.png" alt="">
				<p class="mt-50">Stay updated with our latest trends</p>
				<div id="mc_embed_signup">
					<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
					 method="get" class="subscribe_form relative">
						<div class="input-group d-flex flex-row">
							<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
							 required="" type="email">
							<button class="btn sub-btn">
								<span class="lnr lnr-arrow-right"></span>
							</button>
						</div>
						<div class="mt-10 info"></div>
					</form>
				</div>
			</div>
			<div class="footer-bottom footer_copy">
				<div class="footer-social">
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fa fa-dribbble"></i>
					</a>
					<a href="#">
						<i class="fa fa-behance"></i>
					</a>
				</div>

				<p class="col-lg-12 footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="temp/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="temp/#">
			<i class="fa fa-angle-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="temp/js/jquery-3.2.1.min.js"></script>
	<script src="temp/js/popper.js"></script>
	<script src="temp/js/bootstrap.min.js"></script>
	<script src="temp/js/stellar.js"></script>
	<script src="temp/vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="temp/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="temp/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="temp/vendors/isotope/isotope-min.js"></script>
	<script src="temp/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="temp/vendors/jquery-ui/jquery-ui.js"></script>
	<script src="temp/js/jquery.ajaxchimp.min.js"></script>
	<script src="temp/js/mail-script.js"></script>
	<script src="temp/js/wow.min.js"></script>
	<script src="temp/https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="temp/js/theme.js"></script>
</body>

</html>