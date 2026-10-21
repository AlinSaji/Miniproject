<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

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
            
                                                include 'menu.php';
            
            ?>
        </div>
    </header>
     <section>
           <center>
                         <h2>Pet Doubts</h2>
                        </center>
     
     </section>
    <section class="contact_area section-gap">
        <div class="container">
         
            <div class="row">
               
                <div class="col-lg-12">
                    <form class="row contact_form"  method="post" >
                        
                        
                        
                        <div class="col-md-12">
                            
                            
						
                            
                           
                                    
                                     <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from cont where did='$usr' and st='0' order by id desc");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
                                    <table class="table table-bordered ">
                                    <thead>
                                        
                                        <tr>
                                            <th scope="col">#</th>
                                            
                                            <th scope="col">From</th>
                                             <th scope="col">Contact</th>
                                              <th scope="col">Emergency</th>
                                              
                                               <th scope="col">Date</th>
                                               <th scope="col">More</th>
                                              
                                           
                                        </tr>
                                       
                                    </thead>
                                    
                                    <tbody>
                                         <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $doc=mysqli_query($dbcon,"select * from usr_data where em='$r_gal[3]' order by id desc");
                                                                $doc1=mysqli_fetch_row($doc);
                                                                
                                                                $i++;
                                                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $i ?></th>
                                            
                                            <td><?php echo $doc1[1] ?></td>
                                            <td><a href="tel:<?php echo $doc1[2] ?>"><?php echo $doc1[2] ?></a></td>
                                            <td><b><?php echo $r_gal[4] ?></b></td>
                                            <td><?php echo $r_gal[5] ?></td>
                                            <td><a href="amb1.php?cid=<?php echo $r_gal[1] ?>&did=<?php echo $r_gal[2] ?>"><span class="fa fa-wechat"></span></a>
                                             
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