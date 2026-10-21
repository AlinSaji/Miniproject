
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
date_default_timezone_set("Asia/Kolkata"); 
$tim=date("H:i:sa");
$date=date('Y-m-d'); 
$sel1=mysqli_query($dbcon,"select * from hos_data where em='$usr'");
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
                 
                    if(isset($_POST['b1']))
 {
    
    $t1=$_POST['t1'];
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
      
    $ins=mysqli_query($dbcon,"insert into tut values('','$t1','$t2','$t3','$date','$usr','0')");
    
    if($ins>0)
    {
      
                header("location:add_tut.php?suss=1");
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
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    
    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate1() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&callback=myMap&libraries=places&callback=initAutocomplete"
        async defer></script>
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
                         <h2>PET TIPS & TRICKS</h2>
                        </center>
     
     </section>
    <section class="contact_area section-gap">
        <div class="container">
         
            <div class="row">
               
                <div class="col-lg-12">
                    <form class="row contact_form"  method="post" enctype="multipart/form-data">
                        
                        
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <span>Title</span>
                                <input type="text" class="form-control"required=""  name="t1" placeholder="Enter Heading">
                            </div>
                           
                            <div class="input-group-icon mt-10">
								
								<div class="form-select" id="default-select">
									<select name="t2" id="stat"  onchange="loaddistrict(this.value);loadst_hos(this.value)">
                                        <option value="">--Choose Category--</option>
                                        <?php
                                        $sel_state=mysqli_query($dbcon,"select * from cate");
                                        while($r_state=mysqli_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[0] ?>"><?php echo $r_state[1] ?></option>
                                       <?php
                                           }
                                        ?>
                                    </select>
								</div>
							</div>
                            
                            
                            
                            
                              <div class="form-group">
                                <span>Youtube link</span>
                                <input type="text" class="form-control"required=""  name="t3" placeholder="Enter embeded code in youtube link">
                            </div>
                            
                            
                           
                            
                            <center>
                            <button type="submit" value="submit"name="b1" class="btn submit_btn">Add Now</button>
                            </center>
                        </div>
                       
                        <div class="col-md-6">
                            
                            <img style="width: 100%;height: 550px" src="../img/3148602.jpg">
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