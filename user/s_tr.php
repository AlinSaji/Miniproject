<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$num=rand('100000','999999');
$sel=mysqli_query($dbcon,"select * from hos_data where em='$usr'");
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
	<section>
           <center>
                         <h2>Search Trainers</h2>
                        </center>
     
     </section>
	<section class="category_area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
                                           
                                            
                                            <style>
                                                
                                              

.people-nearby .google-maps{
  background: #f8f8f8;
  border-radius: 4px;
  border: 1px solid #f1f2f2;
  padding: 20px;
  margin-bottom: 20px;
}

.people-nearby .google-maps .map{
  height: 300px;
  width: 100%;
  border: none;
}

.people-nearby .nearby-user{
  padding: 20px 0;
  border-top: 1px solid #f1f2f2;
  border-bottom: 1px solid #f1f2f2;
  margin-bottom: 20px;
}

img.profile-photo-lg{
  height: 80px;
  width: 80px;
  border-radius: 50%;
}  
                                                
                                                
                                                </style>
                                            
                                            <?php
                        if(isset($_POST['b1']))
 {
  $t1=$_POST['t2']  ;     
                            $sel_gal1=mysqli_query($dbcon,"select * from spec where nme='$t1'");
                                                        if(mysqli_num_rows($sel_gal1)>0)
                                                        {$i=0;
                                                        ?>
                                            
                                            <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="people-nearby">
              
                <?php
                                                            while($r_gal1=mysqli_fetch_row($sel_gal1))
                                                            {
                                                                $sel_gal=mysqli_query($dbcon,"select * from tr_data where em='$r_gal1[2]'");
                                                                $r_gal=mysqli_fetch_row($sel_gal);
                                                                $i++;
                                                                ?>
                
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                      <img style="width: 100%;height: 150px" src="../img1/<?php echo $r_gal[7] ?>" alt="user" class="img img-thumbnail">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link"><?php echo $r_gal[1] ?></a></h5>
                    <p>Experience :- <?php echo $r_gal[2] ?>
                    <br/>
                    <?php echo $r_gal[4] ?>
                    <br/>
                    Contact:<a href="tel:<?php echo $r_gal[3] ?>"><span class="fa fa-phone-square"> <?php echo $r_gal[3] ?></span></a>
                    <?php
                        
                                                        $sel_gal1=mysqli_query($dbcon,"select * from spec where uid='$r_gal[5]'");
                                                         while($r_gal1=mysqli_fetch_row($sel_gal1))
                                                            {
                                                             
                                                         ?>
                    <div class="main_blog_details">
                    <div class="float-left">
                               
                        <a class="btn-success" href="#"><?php echo $r_gal1[1] ?></a> &nbsp;
                            </div>
                    </div>
                    
                    <?php
                                                            }
                                                            ?>
                    </p>
                    
                  </div>
                  <div class="col-md-3 col-sm-3">
                      <a target="_blank" href="tr_dt.php?mid=<?php echo $r_gal[5] ?>"><button class="btn btn-success pull-right">View Info</button></a>
                     
                       <a href="amb1.php?did=<?php echo $r_gal[5] ?>&cid=<?php echo $num ?>"><button class="btn btn-primary pull-right">Start Conservation</button></a>
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
						
						
	<?php
                                                        }
                                                        ?>
					</div>

					
                               <?php
 }
 else
 {
 ?>
                                    
                                    
                                    <center>
                            
                           <form class="row contact_form"  method="post" >
                        
                        
                        
                        
                            <div class="form-group">
                                <span>Specialization in</span>
                                
                            <div class="form-select" id="default-select">
									<select name="t2">
                                        <option value="">--Choose Category--</option>
                                        <?php
                                        $sel_state=mysqli_query($dbcon,"select * from cate");
                                        while($r_state=mysqli_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[1] ?>"><?php echo $r_state[1] ?></option>
                                       <?php
                                           }
                                        ?>
                                    </select>
								</div>
                            </div>
                          
                            <br/>
                            <center>
                            <button type="submit" value="submit"name="b1" class="btn submit_btn">Search Now</button>
                            </center>
                        
                           </form>
                                    </center>
                       <?php
 }
 ?>
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