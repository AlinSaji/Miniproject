<?php
include 'connection.php';
ob_start();
?>
 <?php

session_start();
if(isset($_POST['b1']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
$log=mysqli_query($dbcon,"select * from user_log where uid='$t1' and pwd='$t2'and st='1'");
if(mysqli_num_rows($log)>0)
{
$r=mysqli_fetch_row($log);
if($r[3]=="admin")
{
    $_SESSION['uid']=$t1;
    header("location:./admin/shop.php");
    
}
if($r[3]=="user")
{
    $_SESSION['uid']=$t1;
    header("location:./user/shop.php");
}

if($r[3]=="shop")
{
    $_SESSION['uid']=$t1;
    header("location:./shop/pic.php");
}
if($r[3]=="shl")
{
    $_SESSION['uid']=$t1;
    header("location:./shl/pic.php");
}
if($r[3]=="trainer")
{
    $_SESSION['uid']=$t1;
    header("location:./trainer/home.php");
}
}
else
{
    echo '<script>alert("Incorrect Username/Password")</script>'; 
}
    

}
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
                         <h2>Login Now</h2>
                        </center>
     
     </section>
    <section class="contact_area section-gap">
        <div class="container">
         
            <div class="row">
               
                <div class="col-lg-12">
                    <form class="row contact_form"  method="post" >
                        
                        
                        
                        <div class="col-md-6">
                            
                            <br/><br/>
                            <div class="form-group">
                                <span>Email</span>
                                <input type="email" class="form-control" style="height: 50px"  name="t1" placeholder="Enter your Email">
                            </div>
                          
                            <div class="form-group">
                                <span>Password</span>
                                <input type="password" class="form-control" style="height: 50px"  name="t2" placeholder="*******">
                            </div>
                            <center>
                            <button type="submit" value="submit"name="b1" class="btn submit_btn">Login</button>
                            </center>
                        </div>
                        <br/>
                        <div class="col-md-6">
                            
                            <img style="width: 100%;height: 300px" src="pic/721.jpg">
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