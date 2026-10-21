<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$mid=$_GET['mid'];

$sel=mysqli_query($dbcon,"select * from s_post where id='$mid'");
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
                 
                    if(isset($_POST['b1']))
 {
    
    $t1=$_POST['t1'];
    
   
    $ins=mysqli_query($dbcon,"insert into msg values('','$mid','$usr','$t1','$date','$tim','st')");
    
    if($ins>0)
    {
     
                header("location:ph_dt.php?mid=$mid");
            }
    }
        
 
        ?>
<?php
                 
                    if(isset($_GET['aid']))
 {
    $aid=$_GET['aid'];
    $sel2=mysqli_query($dbcon,"select * from reg where em='$usr'");
    $r2=mysqli_fetch_row($sel2);
$sel=mysqli_query($dbcon,"select * from pic_db where id='$aid'");
    $r=mysqli_fetch_row($sel);
    $sel1=mysqli_query($dbcon,"select * from reg where em='$r[9]'");
    $r1=mysqli_fetch_row($sel1);
    
    
     $ac1=mysqli_query($dbcon,"select * from account_bank where account_no='$r1[5]'");
    $acc1=mysqli_fetch_row($ac1);
   
     $ac2=mysqli_query($dbcon,"select * from account_bank where account_no='$r2[5]'");
    $acc2=mysqli_fetch_row($ac2);
    if($acc2[9]<$r[13])
    {
       header("location:ph_dt.php?mid=$mid&low=1"); 
    }
 else {
        
     $tot1=$acc1[9]+$r[13];
    $tot2=$acc2[9]-$r[13];
     $upd1=mysqli_query($dbcon,"update account_bank set amount='$tot1' where account_no='$r1[5]'");
    
   
    if($upd1>0)
    {
    $upd2=mysqli_query($dbcon,"update account_bank set amount='$tot2' where account_no='$r2[5]'");
    
   
    if($upd2>0)
    {
    $ins2=mysqli_query($dbcon,"insert into sale values('','$r[9]','$usr','$aid','$r[13]','$date','st')");
    
    if($ins2>0)
    {
     
                header("location:ph_dt.php?mid=$aid&suss=$aid");
            }
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
    <script>
        
        
        var client = {
     init: function() {
          var o=this;

          // this will disable dragging of all images
          $("img").mousedown(function(e){
               e.preventDefault()
          });

          // this will disable right-click on all images
          $("body").on("contextmenu",function(e){
               return false;
          });
    }
};
        var message="Sorry, right-click has been disabled";

function clickIE() {
    if (document.all) {
        (message);
        return false;
    }
}

function clickNS(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which == 2||e.which == 3) {
            (message);
            return false;
        }
    }
}

if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = clickNS;
} else {
    document.onmouseup = clickNS;
    document.oncontextmenu = clickIE;
}

document.oncontextmenu = new Function("return false")
        </script>
        <style>
* {box-sizing: border-box;}

.img-magnifier-container {
  position:relative;
}

.img-magnifier-glass {
  position: absolute;
  border: 3px solid #000;
  border-radius: 50%;
  cursor: none;
  /*Set the size of the magnifier glass:*/
  width: 140px;
  height: 140px;
}
</style>
<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
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

    <section class="blog_area section-gap single-post-area">
       
        <div class="container">
            <div class="row">
                 
                <div class="col-lg-11">
                    <div class="main_blog_details">
                        <div class="img-magnifier-container">
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&callback=myMap"></script>
    <script type="text/javascript">
    
    
    
    
   function initMap() {
        var uluru = {lat: <?php echo $r[4]?>, lng: <?php echo $r[5]?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    
    
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&callback=initMap">
    </script>
                            
                            <div id="map" style="width: 100%; height: 450px;"></div>
                        </div>
                        <a href="#">
                            <h4><?php echo $r[2] ?>  </h4>
                            
                        </a>
                       
                        <p><?php echo $r[3] ?></p>
                        
                        
                    </div>
                    
                    <hr>
                    
                    
                    
                    
                </div>
                
                
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

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