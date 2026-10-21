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
 
<?php
                 
                    if(isset($_POST['b1']))
 {
    
    $t1=$_POST['t1'];
    
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    
    $t4=$_POST['t4'];
   
    $up=$_FILES['myFile']['name'];
   $count=rand('100000','999999');
    $nfn=$count."".substr($up,strrpos($up,"."));
   
    
     if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//../img7//$nfn"))
    {
    
    $ins=mysqli_query($dbcon,"insert into s_post values('','$t1','$t2','$t3','INC-$num','$t4','$nfn','$usr','0')");
    
    if($ins>0)
    {
      
                header("location:add_post.php?suss=1");
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
            
                                                include 'menu.php';
            
            ?>
        </div>
    </header>
     <section>
           <center>
                         <h2>SEND INSURANCE REQUEST </h2>
                        </center>
     
     </section>
    <section class="contact_area section-gap">
        <div class="container">
         
            <div class="row">
               
                <div class="col-lg-12">
                    <form class="row contact_form"  method="post" enctype="multipart/form-data">
                        
                        
                        
                        <div class="col-md-6">
                            <div class="form-select" id="default-select">
                                <span>District</span>
                                <select name="t1"   required="required" onchange="loaddistrict(this.value);loadst_hos(this.value)">
                                        <option value="">--Choose District--</option>
                                        <?php
                                        $sel_state=mysqli_query($dbcon,"select * from district where StCode='18'");
                                        while($r_state=mysqli_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[2] ?>"><?php echo $r_state[2] ?></option>
                                       <?php
                                           }
                                        ?>
                                    </select>
                            </div>
                            <div class="input-group-icon mt-10">
								
								<div class="form-select" id="default-select">
                                                                      <span>Pet Category</span>
									<select name="t4" id="stat"  onchange="loaddistrict(this.value);loadst_hos(this.value)">
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
                            <div class="form-group">
                                <span>Title</span>
                                <input type="text" class="form-control"required=""  name="t2" placeholder="Enter Pet">
                            </div>
                           
                            
                            <div class="form-group">
                                <span>Pet Details</span>
                                <textarea class="form-control" name="t3"required=""rows="1" placeholder="Details"></textarea>
                            </div>
                             
                            
                          
                            <div class="form-group">
                                <span>Your Photo</span>
                                <input name="myFile" class="form-control" type="file"required="">
                            </div>
                            <center>
                            <button type="submit" value="submit"name="b1" class="btn submit_btn">Post Details</button>
                            </center>
                        </div>
                       
                        <div class="col-md-6">
                        
                            <img style="width: 100%;height:500px " src="../img/What-You-Should-Know-About-Pet-Insurance.webp">
                        
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

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