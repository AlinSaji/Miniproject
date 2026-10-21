<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$mid=$_GET['mid'];
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
    $date=date('Y-m-d');
    
    
    $ins=mysqli_query($dbcon,"insert into vac values('','$t1','$t2','$date','$mid','$usr','0')");
    
    if($ins>0)
    {
      
                header("location:vac.php?mid=$mid");
            }
    }
        
 
 
        ?>
<?php
                            if(isset($_GET['del']))
{
    $del1=mysqli_query($dbcon,"delete from vac where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del1>0)
    {
       header("location:vac.php");
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="../ckeditor/ckeditor.js"></script>
      <script src="../ckeditor/samples/js/sample.js"></script>
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
                         <h2>Add Pet Vaccine info</h2>
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
                                <input type="text" class="form-control"required=""  name="t1" placeholder="Title">
                            </div>
                           
                            <div class="form-group">
                                <span>Details</span>
                                <textarea id="editor" name="t2" required="required"class="form-control" placeholder="Description"></textarea>
                            </div>
                            
                             
                            
                            
                            <center>
                            <button type="submit" value="submit"name="b1" class="btn submit_btn">Register</button>
                            </center>
                        </div>
                       <script>
	initSample();
</script>
<div class="col-md-6">
    
    <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from vac where pid='$mid' order by id desc");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
                                    <table class="table table-bordered">
                                    <thead>
                                        
                                        <tr>
                                            <th scope="col">#</th>
                                            
                                            <th scope="col">Title</th>
                                            <th scope="col">More</th>
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
                                            <td><a href="vac.php?del=<?php echo $r_gal[0] ?>"><span style="color: red" class="fa fa-trash"></span></a></td>
                                            
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