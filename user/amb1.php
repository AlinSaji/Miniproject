<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

$did=$_GET['did'];
$cid=$_GET['cid'];
$sel1=mysqli_query($dbcon,"select * from tr_data where em='$did'");
    $r1=mysqli_fetch_row($sel1);
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
<?php
                 
                    if(isset($_POST['sub']))
 {
    
    $t1=$_POST['t1'];
    
   $date=date('Y-m-d');
     $log=mysqli_query($dbcon,"select * from cont where did='$did' and cid='$cid'and uid='$usr'");
if(mysqli_num_rows($log)>0)
{
    
    $ins=mysqli_query($dbcon,"insert into msg values('','$t1','$date','pat','$usr','$cid','0')");
    
    if($ins>0)
    {
      header("location:amb1.php?did=$did&cid=$cid");
            
        }
    }
 else {
      $ins1=mysqli_query($dbcon,"insert into cont values('','$cid','$did','$usr','$t1','$date','0')");
    
    if($ins1>0)
    {   
    $ins=mysqli_query($dbcon,"insert into msg values('','$t1','$date','pat','$usr','$cid','0')");
    
    if($ins>0)
    {
     header("location:amb1.php?did=$did&cid=$cid");   
 } 
    }
 }
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
										<a href="#">Pets Tips & Tricks</a>
									</h3>
									
								</div>
							</div>
						</div>
                                             
						<div class="col-lg-12 col-md-12 col-sm-12">
							
								<div class="comments">
                                                <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form method="post">
                            
                            <div class="form-group">
                                <textarea name="t1" class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                    placeholder = "Messege"  required=""></textarea>
                            </div>
                            <button type="submit" value="submit"name="sub" class="btn submit_btn">Send Message</button>
                            
                        </form>
                    </div>
                                                <br/>
						<h3 class="single"> Comments</h3>
						<div class="comments-area">
                                                    
                                                    <?php
                       
                                                        $sel=mysqli_query($dbcon,"select * from msg where cid='$cid' order by id desc");
                                                        if(mysqli_num_rows($sel)>0)
                                                        {
                                                        ?>
                                                                      <?php
                                                            while($sel1=mysqli_fetch_row($sel))
                                                            {
                                                               
                                                                ?>
                                                    
                                                    <?php
                                                    if($sel1[3]=="pat")
                                                    {
                                                     $se=mysqli_query($dbcon,"select * from usr_data where em='$sel1[4]'");
                                                      $r=mysqli_fetch_row($se);   
                                                    
                                                    ?>
							
                                                    
                                                    <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img style="width: 90px;height: 80px" src="../img2/<?php echo $r[6] ?>" alt=" " class="img-responsive">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#"><?php echo $r[1] ?></a></h5>
                                        <p class="date"><?php echo $sel1[2] ?> </p>
                                        <p class="comment">
                                           <?php echo $sel1[1] ?>
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                                                    <?php
                                                    }
 else {
     
  $se=mysqli_query($dbcon,"select * from tr_data where em='$sel1[4]'");
                                                      $r=mysqli_fetch_row($se);  
                                                    ?>
                                                    
                                                   
                                                    
                                                    
                                                    
                                                    
                                                      <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img style="width: 90px;height: 80px" src="../img1/<?php echo $r[7] ?>" alt=" " class="img-responsive">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#"><?php echo $r[1] ?> <span style="color: green">[Trainer]</span></a></h5>
                                        <p class="date"><?php echo $sel1[2] ?> </p>
                                        <p class="comment">
                                           <?php echo $sel1[1] ?>
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                                                    
                                                    <?php
 }
 ?>
                                                    <?php
                                                            }
                                                        }
                                                        ?>
							
							
						</div>
					</div>
								
									
									
                                                    <hr>
							
						</div>
                                            
                                            
						
						
						
						
					</div>

					
				</div>
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						
						<aside class="single_sidebar_widget author_widget">
                                                    <img class="author_img img-fluid"style="width: 100%;height: 300px" src="../img1/<?php echo $r1[7] ?>" alt="">
							
							<div class="br"></div>
                                                        <h3 class="widget_title"><?php echo $r1[1] ?></h3>
						</aside>
						
						
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