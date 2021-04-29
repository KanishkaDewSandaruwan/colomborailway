<?php require_once "head.php"; 
if(!isset($_SESSION['user_id'])){
    echo '<script>window.location.href="auth/login.php";</script>'; 
}
                                        

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
                            <h2>Feedback</h2>
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
                  <h1 class="text-danger ml-3">Add Your Feedback</h1>
                </div>
                <div class="row">
                      <form class="reg_form col-md-6 bg-light ml-3 p-4 border rounded p-5" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group col-md-12">
                      <div class="form-group col-md-12">
                      <label for="phone"><b>Your Feedback</label>
                      <input type="text" class="form-control" name="feed" placeholder="Your Feedback">
                      </div>
                    </div>
   

                  <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    <?php 
                    if(isset($_POST['submit'])){

                      $feed = $_REQUEST['feed'];

                      $viewquery = " SELECT * FROM user where user_id = '".$_SESSION['user_id']."'";
                      $viewresult = mysqli_query($con,$viewquery);
                      $row = mysqli_fetch_assoc($viewresult); 

                      $name = $row['name'];
                      $email = $row['email'];
                      $cdate = date("Y/m/d m:H:s");

                            if(!empty($feed)){

                                  $q1="INSERT INTO feedback(name,email,feedback,accept,trn_date) values('$name','$email','$feed','No','$cdate')";
                                  $res1=mysqli_query($con,$q1);

                                  if ( $res1)
                                  {
                                      echo '<script>alert("Feedback Saved is Scussessfully."); window.location.href="index.php";
                                        </script>'; 
                                  }else{
                                    echo "<script>alert(\"Feedback Save is Not Scussess\");</script>";
                                  }
                                            
                                     
                            }else{ echo "<script>alert(\"Please Enter Feedback\");</script>";}
                }
                ?>
                  </div>
                </form>
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