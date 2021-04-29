<?php require_once "head.php"; ?>
<?php 
$home_query = "SELECT * FROM details";
$home_query_result = mysqli_query($con, $home_query);
$row = mysqli_fetch_assoc($home_query_result);
$bottom_banner_01 = $row['subpage_image'];
$image_src1 = "upload/details/".$bottom_banner_01; ?>

<style type="text/css">
    .hero-area2{background-image:url(<?php echo $image_src1; ?>);
        background-size:cover;
        background-repeat:no-repeat;
        min-height:500px
    }
        @media (max-width: 575px){.hero-area2{min-height:360px}}
</style>
    <main>
        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Search</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->

    <main>

        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <?php 
                                $key = $_REQUEST['key'];
                                $viewquery2 = " SELECT * FROM schedule join station on station.station_id =  schedule.to_station join train on schedule.train_id = train.train_id  where station.Station_name like '%$key%' OR train.train_name like '%$key%' ";
                                $viewresultt = mysqli_query($con,$viewquery2); 
                                while($row4 = mysqli_fetch_assoc($viewresultt)) { 
                                    if ($row4['available'] == 'Yes') {

                                    ?>
                                    <article class="blog_item">
                                        <div class="blog_details">
                                            <a class="d-inline-block">
                                                <h1><?php echo $row4['train_name']; ?></h1>
                                            </a>
                                            <ul class="blog-info-link">
                                                <li style="font-size: 20px;">From : Colombo Fort</li>
                                                <li style="font-size: 20px;">To : <b><?php echo $row4['Station_name']; ?></b></li>
                                            </ul>
                                             <ul class="blog-info-link">
                                                <li style="font-size: 20px;">Depature Time : <?php echo $row4['depature_time']; ?></li>
                                                <li style="font-size: 20px;">Arrivel Time : <?php echo $row4['arrive_time']; ?></li>
                                            </ul>
                                            <h4 class="text-danger mt-5">1st Class Ticket Amount : LKR <?php echo $row4['one_class_price']; ?></h4>
                                            <h4 class="text-danger">2nd Class Ticket Amount : LKR <?php echo $row4['two_class_price']; ?></h4>
                                            <h4 class="text-danger">3rd Class Ticket Amount : LKR <?php echo $row4['tree_class_price']; ?></h4>
                                            <p><?php echo $row4['details']; ?></p>
                                            <ul class="blog-info-link">
                                                <li style="font-size: 20px" ><a href="#"><i class="fa fa-user"></i> Distance : <?php echo $row4['distance']; ?> Km</a></li>
                                                <li style="font-size: 20px" ><a href="#"><i class="fa fa-user"></i> Available 1st Class Seats : <?php echo $row4['one_class_seats']; ?></a></li>
                                                <li style="font-size: 20px" ><a href="#"><i class="fa fa-user"></i> Available 2nd Class Seats  : <?php echo $row4['two_class_seats']; ?></a></li>
                                                <li style="font-size: 20px" ><a href="#"><i class="fa fa-user"></i> Available 3rd Class Seats  : <?php echo $row4['tree_class_seats']; ?></a></li>
                                            </ul>
                                            <button type="button" onclick="window.location.href='booking.php?sch_id=<?php echo $row4['sch_id']; ?>'" class="btn btn-danger btn-lg mt-5" >Book This Train</button>
                                        </div>
                                    </article>
                                <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.Colombo Railway Department <br>Created By : P.K.N. BUDDHINIE SEU/IS/16/MIT/086</p>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>