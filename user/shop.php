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
                                                                    <img class="img-fluid w-100"style="width: 100%;height: 300px" src="../pic/124.jpg" alt="">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="#">Search Pet Shop</a>
									</h3>
									
								</div>
							</div>
						</div>
                                            <?php
                
                        if(isset($_POST['b1']))
                        {
                            $la=$_POST['la'];
    $lo=$_POST['lo'];
                        ?>
                                              <?php
                        $sel1=mysqli_query($dbcon,"SELECT id, SQRT( POW(69.1 * (la - $la), 2) + POW(69.1 * ($lo - lo) * COS(la / 57.3), 2)) AS distance FROM hos_data where st='1' HAVING distance < 60 ORDER BY distance");
                                                        if(mysqli_num_rows($sel1)>0)
                                                        {
                                                          
                                                        
                                                        while($r1=mysqli_fetch_row($sel1))
                                                            {
                                                        $sel_gal=mysqli_query($dbcon,"select * from hos_data where  id='$r1[0]'");
                                                         $r_gal=mysqli_fetch_row($sel_gal);
                                                            
                                                        ?>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="single_travel wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
								<figure>
                                                                    <img class="img-fluid w-100" style="width: 100%;height: 400px" src="../img3///<?php echo $r_gal[8] ?>" alt="">
								</figure>
								<div class="overlay"></div>
								<div class="text-wrap">
									<h3>
										<a href="ph_dt.php?mid=<?php echo $r_gal[0] ?>"><?php echo $r_gal[1] ?></a>
									</h3>
									<div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<a href="#">
												<span class="icon fa fa-home"></span> <?php echo $r_gal[3] ?>
                                                                                                
                                                                                                <span class="icon fa fa-phone"></span> <a href="tel:<?php echo $r_gal[2] ?>"><?php echo $r_gal[2] ?></a>
											</a>
                                                                                    <br/>
                                                                                    <b style="font-size: larger">Services:-
                                                                                    <?php
                                                                                      $sel2=mysqli_query($dbcon,"select * from srv where hid='$r_gal[6]'");
                                                                                    while($r2=mysqli_fetch_row($sel2))
                                                            {
                                                                                    
                                                                                    ?>
                                                                                    <?php echo $r2[1] ?>, 
                                                                                    <?php
                                                            }
                                                                                    ?>
                                                                                    </b>
                                                                                                <br/>
                                                                                               <b style="font-size: larger">Vaccination:-
                                                                                    <?php
                                                                                      $sel2=mysqli_query($dbcon,"select * from spec where uid='$r_gal[6]'");
                                                                                    while($r2=mysqli_fetch_row($sel2))
                                                            {
                                                                                    
                                                                                    ?>
                                                                                                   <a target="_blank" href="vac.php?mid=<?php echo $r2[0] ?>"><?php echo $r2[1] ?> <span class="fa fa-pencil-square"></span></a>, 
                                                                                    <?php
                                                            }
                                                                                    ?>
                                                                                    </b> 
										</div>
                                                                            <br/><br/>
										<div>
                                                                                    <a target="_blank" style="color: green"  href="pic.php?mid=<?php echo $r_gal[6] ?>" ><i class="btn btn-success">Pets</i></a>
                                                                                    &nbsp;&nbsp;
                
                                                                                </div>
									</div>
								</div>
							</div>
						</div>
                                            
                                            
						<?php
                                                
                                                            }
                                                            }
                                                            else
                                                            {
                                                                echo"No data Found";
                                                            }
                                                            
                        }
                        else
                        {
                                                            ?>
						
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <form class="row contact_form"  method="post" enctype="multipart/form-data">
                        
                        
                        
                        <div class="col-md-6">
                            
                             
                            <div class="form-group">
                                <span>Enter location</span>
                                <input id="pac-input"  class="form-control"  type="text" placeholder="Search Your Location...">
                                                        
                            </div>
                            <div class="form-group">
                                <span>Latitude</span>
                           <input type="text"  class="form-control" name="la"id="lat" placeholder="Double Click on map" value="">

                            </div>
                            
                            <div class="form-group">
                                <span>Longitude</span>
                               <input type="text"  class="form-control" name="lo" id="lng"value=""placeholder="Double Click on map">
                                                          
                            </div>
                          
                            <center>
                            <button type="submit" value="submit"name="b1" class="btn submit_btn">Search</button>
                            </center>
                        </div>
                       
                        <div class="col-md-6">
                            
                            
                                                
                                                
                                                
                                                
            <center><p><b>Double click on the map to get more accuracy</b></p></center>
            <div id="map" style="width: 100%; height: 400px"></div>
            <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 8.490001, lng: 76.95397},
          zoom: 18,
          mapTypeId: 'roadmap'
        });
        google.maps.event.addListener(map, 'dblclick', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("lat").value=e.latLng.lat();
                document.getElementById("lng").value=e.latLng.lng();
            });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
        
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&libraries=places&callback=initAutocomplete"
         async defer></script>
        
                                            
                        </div>
                       
                    </form>
                                            </div>
                                            
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