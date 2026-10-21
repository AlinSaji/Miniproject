<?php
include 'connection.php';
ob_start();
?>


<nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="#">
                        <b style="color: black"> <span class="fa fa-camera-retro"></span> <?php echo $title ?></b>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-center mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reg1.php">User Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reg3.php">Shelter Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reg2.php">Shop Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reg.php">Trainer Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>