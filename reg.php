<?php
include 'connection.php';
ob_start();
?>
 
<?php
                 
                    if(isset($_POST['b1']))
 {
    
    $t1=$_POST['t1'];
    $ta=$_POST['ta'];
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    
    
    $up=$_FILES['myFile']['name'];
   $count=rand('100000','999999');
    $nfn=$count."".substr($up,strrpos($up,"."));
   
    
     if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//img1//$nfn"))
    {
         
    $ins=mysqli_query($dbcon,"insert into tr_data values('','$t1','$ta','$t2','$t3','$t4','$t5','$nfn','0')");
    
    if($ins>0)
    {
      $ins1=mysqli_query($dbcon,"insert into user_log values('','$t4','$t5','trainer','1')");
        if($ins1>0)
        {
                header("location:reg.php?suss=1");
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
    <script type="text/javascript">
    function nme(b2)
{
var k5=b2.length;
var ch2=/([a-z])$/;
if(ch2.test(b2)==false)
{
document.getElementById("np3").innerHTML="<font color='red'>*Only Alphabets*</font>";
$("#btn").hide();
return false;
}

else
{
  document.getElementById("np3").innerHTML="";  
  $("#btn").show();
}
}
  
  
  
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function vem(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
     }  
    </script>
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
                         <h2>PET TRAINER REGISTRATION</h2>
                        </center>
     
     </section>
    <section class="contact_area section-gap">
        <div class="container">
         
            <div class="row">
               
                <div class="col-lg-12">
                    <form class="row contact_form"  method="post" enctype="multipart/form-data">
                        
                        
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <span>Name</span>
                                <input type="text" class="form-control"required=""  name="t1" placeholder="Enter your Name">
                            </div>
                           <div class="form-group">
                                <span>Experience</span>
                                <input type="text" class="form-control"required=""  name="ta" placeholder="Experience as a pet trainer">
                            </div>
                            <div class="form-group">
                                <span>Contact</span>
                                <input type="text" class="form-control" required="" name="t2" placeholder="Contact Info"onkeyup="chkc(this.value)" /><span id="o3"></span>
                            </div>
                            <div class="form-group">
                                <span>Address</span>
                                <textarea class="form-control" name="t3"required=""rows="1" placeholder="Address"></textarea>
                            </div>
                             
                            <div class="form-group">
                                <span>Email</span>
                                <input type="email" class="form-control" required="" name="t4" placeholder="Enter your Email"onkeyup="vem(this.value)" /><span id="em"></span>
                            </div>
                          
                            <div class="form-group">
                                <span>Password</span>
                                <input type="password" class="form-control"   name="t5" placeholder="*******">
                            </div>
                            <div class="form-group">
                                <span>Your Photo</span>
                                <input name="myFile" class="form-control" type="file"required="">
                            </div>
                            <center>
                            <button type="submit" value="submit"name="b1" class="btn submit_btn">Register</button>
                            </center>
                        </div>
                       
                        <div class="col-md-6">
                            
                            <img style="width: 100%;height: 700px" src="img/3842756.webp">
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