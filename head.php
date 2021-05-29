<?php require_once 'connection.php'; 
session_start();?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>RAILWAY TICKET BOOKING</title>
        <link rel="icon" type="image/png" href="img/logo/Sri_Lanka_Railway_logo.png" sizes="300x300" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="manifest" href="site.webmanifest">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="img/logo/Sri_Lanka_Railway_logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header">
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-4 col-lg-2 col-md-1">
                                <div class="logo">
                                  <a style="font-size: 10px; font-family: 'Times New Roman', Times, serif;" href="index.php"><h4 style="color: white">Welcome! Colombo Railway Department</h4> <h5 style="color: white"> Ticket Booking System</h5></a>
                                </div>  
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="feedback.php">Feedback</a></li>
                                            <li class="add-list"><a href="booking.php"><i class="ti-plus"></i>Booking</a></li>
                                            <?php if (isset($_SESSION['user_id'])) { ?>
                                            <li class="login"><a href="myaccount.php">
                                                <i style="font-size: 15px" class="fas fa-user"> My Account </i></a>
                                            </li>
                                            <li class="login"><a href="logout.php">
                                                <i style="font-size: 15px" class="fas fa-sign-out-alt"> Logout</i></a>
                                            </li>
                                            <?php }else{ ?>
                                            <li class="login"><a href="auth/login.php">
                                                <i style="font-size: 15px" class="fas fa-user">  Sign in </i></a>
                                            </li>
                                            <li class="login"><a href="auth/register.php">
                                                <i style="font-size: 15px" class="fas fa-user-plus"> Sign Up</i></a>
                                            </li>
                                        <?php } ?>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>