<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$sel=mysqli_query($dbcon,"select * from staff where em='$usr'");
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
<?php
if(isset($_GET['upd']))
{
   
    $upd=$_GET['upd'];
    
        $upd2=mysqli_query($dbcon,"update s_post set st='1'where id='$upd'");
    
   
    if($upd2>0)
    {
         
       header("location:pic.php");
}
}                         
                            


?>
          <?php
                            if(isset($_GET['del']))
{
                                
                                
   
    $del=$_GET['del'];
   
        $del2=mysqli_query($dbcon,"update s_post set st='2'where id='$del'");
    
   
    if($del2>0)
    {
       header("location:pic.php");
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
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<div class="single_travel wow fadeInUp" data-wow-duration="1s">
								<figure>
                                                                    <img class="img-fluid w-100"style="width: 100%;height: 300px" src="../img/wp4991568.jpg" alt="">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="#">Insurance Request</a>
									</h3>
									
								</div>
							</div>
						</div>
                                              
                            
                           
                                    
                                    
                                        <?php
                        $sel_gal=mysqli_query($dbcon,"select * from s_post where dis='$r[5]' order by id desc");
                                                        
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
                                    
                                                           
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            
                                            <tr>
                                                <th>From</th>
                                                <th>Contact</th>
                                                <th>Pet Category</th>
                                                <th>Pet</th>
                                                 <th>Description</th>
                                                 <th>Insurance</th>
                                                 <th>Certificate</th>
                                                 <th>More</th>
                                                 
                                                
                                               
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $sel1=mysqli_query($dbcon,"select * from usr_data where em='$r_gal[7]'");
    $r1=mysqli_fetch_row($sel1);
                                                                $i++;
                                                                ?>
                                            <tr>
                                                
                                                <td><?php echo $r1[1] ?></td>
                                                <td><a href="tel:<?php echo $r1[2] ?>"><?php echo $r1[2] ?></a></td>
                                                   <td><?php echo $r_gal[5] ?></td>
                                                    <td><?php echo $r_gal[2] ?></td>
                                                     <td><?php echo $r_gal[3] ?></td>
                                                     <td><?php echo $r_gal[4] ?></td>
                                                     <td><a target="_blank" href="../img7/<?php echo $r_gal[6] ?>"><span class="fa fa-download"></span></a></td>
                                                <td>
                                                
                                                
                                                            
                                                            
                                                            
                                                            
                                                            
                
                                
                                
                                <?php
        if ($r_gal[8]=='0')
        {
            ?>
                                                    <a href="pic.php?upd=<?php echo $r_gal[0] ?>"><span style="color: green" class="fa fa-check"></span></a>&nbsp;&nbsp; <a href="pic.php?del=<?php echo $r_gal[0] ?> "><span style="color: red" class="fa fa-close"></span></a>
            <?php
        }
 ?>
     
 
         <?php
        if ($r_gal[8]=='1')
        {
            
        ?>
             
                                <i><img style="width: 45px;height: 40px" src="../gif/checkmark.gif"><font style="font-size: large" color='orange'>&nbsp;&nbsp;<font  color='green'></font></i>
                                 <?php
        }
        ?>
                                <?php
        if ($r_gal[8]=='2')
        {
        ?>
             
                                <i><img style="width: 45px;height: 40px" src="../gif/Dont_symbol_wobble_lg_clr.gif"><font style="font-size: large" color='orange'>&nbsp;&nbsp;<font  color='green'></font></i>
            
            <?php
        }
        ?>
            
                               
                       
                                                        
                                            </td>
                                            </tr>
                                            <?php
                                                            }
                                                            ?>
                                        </tbody>
                                        
                                    </table>
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