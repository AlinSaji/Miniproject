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
 
<?php
                 
                    if(isset($_POST['b1']))
 {
    
    $t1=$_POST['t1'];
    $ta=$_POST['ta'];
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    
    $t6=$_POST['t6'];
    $t7=$_POST['t7'];
    
    
    $ins=mysqli_query($dbcon,"insert into staff values('','$t1','$t2','$t3','$t4','$ta','0')");
    
    if($ins>0)
    {
      $ins1=mysqli_query($dbcon,"insert into user_log values('','$t3','$t4','staff','1')");
        if($ins1>0)
        {
                header("location:staff_reg.php?suss=1");
            }
    }
        }
 
 
        ?>
<?php
                 
                    if(isset($_GET['upd']))
 {
    
    
  $upd=$_GET['upd'];  
  $upd1=mysqli_query($dbcon,"update tr_data set st='1' where em='$upd'");
    
   
    if($upd1>0)
    {
        
        $upd2=mysqli_query($dbcon,"update user_log set st='1' where uid='$upd'");
    
   
    if($upd2>0)
    {
       
       header("location:tr_req.php");
}
                        
        }
 }
        ?>



<?php
                 
                    if(isset($_GET['del']))
 {
    
    
  $upd=$_GET['del'];  
  $upd1=mysqli_query($dbcon,"update tr_data set st='2' where em='$upd'");
    
   
    if($upd1>0)
    {
        
        $upd2=mysqli_query($dbcon,"update user_log set st='2' where uid='$upd'");
    
   
    if($upd2>0)
    {
       
       header("location:tr_req.php");
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
                         <h2>PET Trainers</h2>
                        </center>
     
     </section>
    <section class="contact_area section-gap">
        <div class="container">
         
            <div class="row">
               
                <div class="col-lg-12">
                    <form class="row contact_form"  method="post" enctype="multipart/form-data">
                        
                        
                        
                        
                       
                        <div class="col-md-12">
                            
                           
                            
                           
                                    
                                     <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from tr_data order by id desc");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
                                    <table class="table table-bordered">
                                    <thead>
                                        
                                        <tr>
                                            <th scope="col">#</th>
                                            
                                            <th scope="col">Name</th>
                                            <th scope="col">Experience</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Email</th>
                                            <th>More</th>
                                        </tr>
                                       
                                    </thead>
                                    
                                    <tbody>
                                         <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $i ?></th>
                                            
                                            <td><?php echo $r_gal[1] ?></td>
                                            <td><?php echo $r_gal[2] ?></td>
                                            <td><?php echo $r_gal[3] ?></td>
                                             <td><?php echo $r_gal[4] ?></td>
                                             <td><?php echo $r_gal[5] ?></td>
                                            <td>
                                                
                                                            
                                                            
                                                            
                                                            
                                                            
                
                                
                                
                                <?php
        if ($r_gal[8]=='0')
        {
            ?>
                                               
                
                                                <a href="tr_req.php?upd=<?php echo $r_gal[5] ?>"><span  style="color: green"  class="fa fa-check"></span></a>&nbsp;&nbsp; <a href="tr_req.php?del=<?php echo $r_gal[5] ?>"><span style="color: red"  class="fa fa-close"></span></a>                                              
 
                
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