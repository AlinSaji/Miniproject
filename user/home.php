<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$num=rand('100000','999999');
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
	<title><?php echo $title ?> - Welcome to Pet Paradise</title>
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
	<section class="home_banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="col-lg-12">
						<h1 class="text-uppercase">Welcome to Pet Paradise</h1>
						<h4>Your one-stop destination for all pet care needs</h4>
						<div class="d-flex align-items-center">
							<a class="primary_btn" href="shop.php"><span>Find Pet Shops</span></a>
							<a class="primary_btn tr-bg" href="#services"><span>Our Services</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Banner Area =================-->

	<!--================Category Area =================-->
	<section class="category_area section-gap" id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-center">
						<h1>Pet Paradise Services</h1>
						<p>Discover everything your pets need in one place</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<!-- Welcome Section -->
						<div class="col-lg-12">
							<div class="single_travel wow fadeInUp" data-wow-duration="1s">
								<figure>
                                    <img class="img-fluid w-100" style="width: 100%;height: 300px" src="../pic/pet-welcome.jpg" alt="Pet Paradise Welcome">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="#">Welcome to Pet Paradise</a>
									</h3>
									<p>Your trusted companion for all pet care services and products</p>
								</div>
							</div>
						</div>

						<!-- Pet Shop Finder Service -->
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
								<figure>
                                    <img class="img-fluid w-100" style="width: 100%;height: 400px" src="../pic/pet-shop.jpg" alt="Find Pet Shops">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="shop.php">Find Nearby Pet Shops</a>
									</h3>
									<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<a href="shop.php">
												<span class="icon fa fa-map-marker"></span> Location-based Search
												<br/>
												<span class="icon fa fa-store"></span> Verified Pet Shops
											</a>
											<br/>
											<b style="font-size: larger">Features:</b>
											<br/>
											• GPS Location Search
											<br/>
											• Pet Care Services
											<br/>
											• Vaccination Centers
											<br/>
											• Quality Products
										</div>
										<br/><br/>
										<div>
											<a href="shop.php" class="btn btn-success">Search Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Pet Care Services -->
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
								<figure>
                                    <img class="img-fluid w-100" style="width: 100%;height: 400px" src="../pic/pet-care.jpg" alt="Pet Care Services">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="#services">Comprehensive Pet Care</a>
									</h3>
									<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<a href="#">
												<span class="icon fa fa-heart"></span> Professional Care
												<br/>
												<span class="icon fa fa-user-md"></span> Expert Veterinarians
											</a>
											<br/>
											<b style="font-size: larger">Services Available:</b>
											<br/>
											• Health Checkups
											<br/>
											• Vaccination Programs
											<br/>
											• Pet Grooming
											<br/>
											• Emergency Care
										</div>
										<br/><br/>
										<div>
											<a href="#contact" class="btn btn-info">Learn More</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Pet Adoption -->
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
								<figure>
                                    <img class="img-fluid w-100" style="width: 100%;height: 400px" src="../pic/pet-adoption.jpg" alt="Pet Adoption">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="#">Pet Adoption Center</a>
									</h3>
									<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<a href="#">
												<span class="icon fa fa-home"></span> Find Your Companion
												<br/>
												<span class="icon fa fa-paw"></span> Loving Pets Available
											</a>
											<br/>
											<b style="font-size: larger">Adopt Today:</b>
											<br/>
											• Dogs & Puppies
											<br/>
											• Cats & Kittens
											<br/>
											• Birds & Small Pets
											<br/>
											• Rescue Animals
										</div>
										<br/><br/>
										<div>
											<a href="adoption.php" class="btn btn-warning">View Pets</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Pet Training -->
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
								<figure>
                                    <img class="img-fluid w-100" style="width: 100%;height: 400px" src="../pic/pet-training.jpg" alt="Pet Training">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="#">Professional Pet Training</a>
									</h3>
									<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<a href="#">
												<span class="icon fa fa-graduation-cap"></span> Expert Trainers
												<br/>
												<span class="icon fa fa-trophy"></span> Proven Methods
											</a>
											<br/>
											<b style="font-size: larger">Training Programs:</b>
											<br/>
											• Basic Obedience
											<br/>
											• Advanced Training
											<br/>
											• Behavioral Correction
											<br/>
											• Puppy Classes
										</div>
										<br/><br/>
										<div>
											<a href="training.php" class="btn btn-primary">Book Training</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================Category Area =================-->

	<!--================Statistics Area =================-->
	<section class="home_gallery_area p_120" style="background: #f9f9ff;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-center">
						<h1>Why Choose Pet Paradise?</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="text-center">
						<i class="fa fa-map-marker fa-3x" style="color: #ff6b6b;"></i>
						<h3>Location-Based Search</h3>
						<p>Find the nearest pet shops and services using GPS technology</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="text-center">
						<i class="fa fa-shield fa-3x" style="color: #4ecdc4;"></i>
						<h3>Verified Partners</h3>
						<p>All registered pet shops and services are verified for quality</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="text-center">
						<i class="fa fa-clock-o fa-3x" style="color: #45b7d1;"></i>
						<h3>24/7 Support</h3>
						<p>Emergency pet care support available round the clock</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="text-center">
						<i class="fa fa-heart fa-3x" style="color: #f9ca24;"></i>
						<h3>Pet Care Excellence</h3>
						<p>Comprehensive care solutions for all your beloved pets</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================Statistics Area =================-->

	<!--================ Contact Area =================-->
	<section class="contact_area section-gap" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-center">
						<h1>Get In Touch</h1>
						<p>Have questions? We're here to help you and your pets</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<form class="row contact_form" method="post" enctype="multipart/form-data">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Your Name" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Your Email" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="phone" placeholder="Your Phone">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
							</div>
							<div class="form-group text-center">
								<button type="submit" name="contact_submit" class="btn submit_btn">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================ Contact Area =================-->

	<!--================ start footer Area  =================-->
	
	<!--================ End footer Area  =================-->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#top">
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
	<script src="../temp/js/theme.js"></script>

	<?php
	// Handle contact form submission
	if(isset($_POST['contact_submit'])) {
		$name = mysqli_real_escape_string($dbcon, $_POST['name']);
		$email = mysqli_real_escape_string($dbcon, $_POST['email']);
		$phone = mysqli_real_escape_string($dbcon, $_POST['phone']);
		$subject = mysqli_real_escape_string($dbcon, $_POST['subject']);
		$message = mysqli_real_escape_string($dbcon, $_POST['message']);
		$date = date('Y-m-d H:i:s');
		
		$insert = mysqli_query($dbcon, "INSERT INTO contacts (name, email, phone, subject, message, date_created) VALUES ('$name', '$email', '$phone', '$subject', '$message', '$date')");
		
		if($insert) {
			echo "<script>alert('Thank you for contacting us! We will get back to you soon.');</script>";
		} else {
			echo "<script>alert('Sorry, there was an error sending your message. Please try again.');</script>";
		}
	}
	?>
</body>

</html>