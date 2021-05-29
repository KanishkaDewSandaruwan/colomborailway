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
                            <h2>About us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- About Details Start -->
        <?php $viewquery = "SELECT * FROM about";
              $viewresult = mysqli_query($con,$viewquery);
              $row5 = mysqli_fetch_assoc($viewresult); 

              $about_image = $row5['image'];
              $image_src2 = "upload/home/".$about_image;
              ?>

              <style type="text/css">
                .single-visit.left-img::before{position:absolute;left:0;content:"";top:0;bottom:0;background-image:url('<?php echo $image_src2; ?>');width:50%;border-radius:0 5px 0 0;background-size:cover;background-repeat:no-repeat}
                @media only screen and (min-width: 768px) and (max-width: 991px){.peoples-visit.single-visit.left-img::before{display:none}}@media only screen and (min-width: 576px) and (max-width: 767px){.peoples-visit .single-visit.left-img::before{display:none}}@media (max-width: 575px){.peoples-visit .single-visit.left-img::before{display:none}}
              </style>
        <!-- peoples-visit Start -->

         <?php $viewquery = "SELECT * FROM about";
              $viewresult = mysqli_query($con,$viewquery);
              $row5 = mysqli_fetch_assoc($viewresult); 

              $about_image = $row5['image'];
              $image_src2 = "upload/home/".$about_image;
              ?>

              <style type="text/css">
                .single-visit.left-img::before{position:absolute;left:0;content:"";top:0;bottom:0;background-image:url('<?php echo $image_src2; ?>');width:50%;border-radius:0 5px 0 0;background-size:cover;background-repeat:no-repeat}
                @media only screen and (min-width: 768px) and (max-width: 991px){.peoples-visit.single-visit.left-img::before{display:none}}@media only screen and (min-width: 576px) and (max-width: 767px){.peoples-visit .single-visit.left-img::before{display:none}}@media (max-width: 575px){.peoples-visit .single-visit.left-img::before{display:none}}
              </style>
        <!-- peoples-visit Start -->
        <div class="peoples-visit dining-padding-top mt-5">
            <!-- Single Left img -->
            <div class="single-visit left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 bg-white p-5">
                            <div class="visit-caption">
                                <span>We are offering for you</span>
                                <h3><?php echo $row5['title']; ?></h3>
                                <p><?php echo $row5['description']; ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- peoples-visit End -->
        <!-- Testimonial Start -->
        <?php require_once "feedback_page.php"; ?>
        <!-- Testimonial End -->

        <!-- Popular Locations Start -->
        <?php require_once "gallery_page.php"; ?>
        <!-- Popular Locations End -->

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