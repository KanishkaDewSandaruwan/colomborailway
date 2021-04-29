<?php require_once "head.php";

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
                            <h2>BOOKING</h2>
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
              $image_src1 = "upload/about/".$about_image;
              ?>
        <!-- peoples-visit Start -->
        <div class="peoples-visit dining-padding-top mt-5">
            <!-- Single Left img -->
            <div class="single-visit left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">


                                    <?php if (isset($_REQUEST['sch_id'])) { 

                                        $sch_id = $_REQUEST['sch_id'];
                                        $getsch = "SELECT * FROM schedule where sch_id = '$sch_id'";
                                        $viewresult4 = mysqli_query($con, $getsch);
                                        $row=mysqli_fetch_assoc($viewresult4);

                                        $id = $row['sch_id'];

                                        $train_id = $row['train_id'];
                                        $station_id = $row['to_station'];

                                        $gettrain = "SELECT * FROM train where train_id = '$train_id' ";
                                        $viewresult1 = mysqli_query($con, $gettrain);
                                        $row1 = mysqli_fetch_assoc($viewresult1);

                                        $getstation = "SELECT * FROM station where station_id ='$station_id' ";
                                        $viewresult2 = mysqli_query($con, $getstation);
                                        $row2 = mysqli_fetch_assoc($viewresult2); ?>

                                        <div class="form-row">
                                      <div class="form-group col-md-12">
                                      <label class="text-dark" for="original_price"><b>Train Schedule</b></label><br>
                                            <select id="inputState" name="trainsch" class="form-control">
                                          <option value='<?php echo $id; ?>' selected><?php echo $row1['train_name']." ".$row2['Station_name']." ".$row['depature_time']; ?></option>';
                                         <?php 
                                                
                                                $sch_id = $_REQUEST['sch_id'];
                                                $getsch = "SELECT * FROM schedule";
                                                $viewresult4 = mysqli_query($con, $getsch);
                                            

                                             $c=1;
                                             while($row=mysqli_fetch_assoc($viewresult4)){
                                                $id = $row['sch_id'];

                                                $train_id = $row['train_id'];
                                                $station_id = $row['to_station'];

                                                $gettrain = "SELECT * FROM train where train_id = '$train_id' ";
                                                $viewresult1 = mysqli_query($con, $gettrain);
                                                $row1 = mysqli_fetch_assoc($viewresult1);

                                                $getstation = "SELECT * FROM station where station_id ='$station_id' ";
                                                $viewresult2 = mysqli_query($con, $getstation);
                                                $row2 = mysqli_fetch_assoc($viewresult2);

                                               echo "<option value='$id' >".$row1['train_name']." ".$row2['Station_name']." ".$row['depature_time']."</option>";
                                               $c++;
                                             } ?>
                                        </select>
                                    </div>
                                    </div>



                                    <?php }else{ ?>
                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                      <label class="text-dark" for="original_price"><b>Train Schedule</b></label><br>
                                            <select id="inputState" name="trainsch" class="form-control">
                                          <option selected>.... Select Your Train Schedule ....</option>';
                                         <?php 
                                                
                                                $getsch = "SELECT * FROM schedule";
                                                $viewresult4 = mysqli_query($con, $getsch);
                                            

                                             $c=1;
                                             while($row=mysqli_fetch_assoc($viewresult4)){
                                                $id = $row['sch_id'];

                                                $train_id = $row['train_id'];
                                                $station_id = $row['to_station'];

                                                $gettrain = "SELECT * FROM train where train_id = '$train_id' ";
                                                $viewresult1 = mysqli_query($con, $gettrain);
                                                $row1 = mysqli_fetch_assoc($viewresult1);

                                                $getstation = "SELECT * FROM station where station_id ='$station_id' ";
                                                $viewresult2 = mysqli_query($con, $getstation);
                                                $row2 = mysqli_fetch_assoc($viewresult2);

                                               echo "<option value='$id' >".$row1['train_name']." ".$row2['Station_name']." ".$row['depature_time']."</option>";
                                               $c++;
                                             } ?>
                                        </select>
                                    </div>
                                    </div>
                                    <?php } ?>
                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                      <label class="text-dark" for="original_price"><b>Train Class</b></label><br>
                                            <select id="inputState" name="trainclass" class="form-control">
                                          <option selected>.... Select Class toBook Seats ....</option>
                                          <option value="1">1st Class</option>
                                          <option  value="2">2nd Class</option>
                                          <option value="3">3rd Class</option>
                                        </select>
                                    </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                      <label class="text-dark" for="original_price"><b>Booking Date</b></label><br>
                                            <input type="date" id="bdate" id="bookingtime" name="bdate" class="form-control">
                                            <p style="display: none;" class="text-danger mt-2"><b>Sorry. This Date Train is unavailable</b></p>
                                      </div>
                                    </div>

                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                      <label class="text-dark" for="original_price"><b> Travellers</b></label><br>
                                            <input type="number" id="bookingtime" name="traveller" class="form-control">
                                      </div>
                                    </div>

                                  <div class="modal-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Save Booking</button>
                                    <?php 
                                    if(isset($_POST['submit'])){

                                        if(!isset($_SESSION['user_id'])){
                                            echo '<script>window.location.href="auth/login.php";</script>'; 
                                        }
                                        

                                      $trainsch = $_REQUEST['trainsch'];
                                      $trainclass = $_REQUEST['trainclass'];
                                      $bdate = $_REQUEST['bdate'];
                                      $traveller = $_REQUEST['traveller'];

                                      $user_id = $_SESSION['user_id'];

                                      $cdate = date("Y/m/d m:H:s");

                                        if ($trainsch != '.... Select Your Train Schedule ....') {
                                            if ($trainclass != '.... Select Class toBook Seats ....') {
                                                if (!empty($bdate)) {
                                                    if (!empty($traveller)) {
                                                        if (new DateTime() <= new DateTime($bdate)){

                                                            $getsch = "SELECT * FROM unavailable where un_date = '$bdate' AND sch_id = '$trainsch' ";
                                                            $viewresult = mysqli_query($con, $getsch);

                                                            if ($row = mysqli_fetch_assoc($viewresult)) {
                                                                echo "<script>alert(\"Sorry. This train unavailable at this Day\");</script>";
                                                            }else{

                                                                    $total = 0;
                                                                    $seats = 0;
                                                                    $train_seats = 0;

                                                                    $getsch = "SELECT * FROM schedule where sch_id = '$trainsch'";
                                                                    $viewresult4 = mysqli_query($con, $getsch);
                                                                    $row0 = mysqli_fetch_assoc($viewresult4);

                                                                          if ($trainclass == 1) {
                                                                               $total = $traveller * $row0['one_class_price'];

                                                                                $getsch = "SELECT * FROM seats_calculate where sch_id = '$trainsch' AND book_date = '$bdate'  ";
                                                                                $viewresult4 = mysqli_query($con, $getsch);
                                                                                $row1 = mysqli_fetch_assoc($viewresult4);
                                                                                $seats = $row1['one_class_seats'];

                                                                                $getsch1 = "SELECT * FROM schedule where sch_id = '$trainsch'";
                                                                                $viewresult9 = mysqli_query($con, $getsch1);
                                                                                $rows9 = mysqli_fetch_assoc($viewresult9);
                                                                                $train_id = $rows9['train_id'];

                                                                                $gettrain = "SELECT * FROM train where train_id = '$train_id' ";
                                                                                $viewresult1 = mysqli_query($con, $gettrain);
                                                                                $row2 = mysqli_fetch_assoc($viewresult1);

                                                                                $train_seats = $row2['one_class_seats'];

                                                                          }elseif ($trainclass == 2) {
                                                                                $total = $traveller * $row0['two_class_price'];

                                                                                $getsch = "SELECT * FROM seats_calculate where sch_id = '$trainsch' AND book_date = '$bdate'  ";
                                                                                $viewresult4 = mysqli_query($con, $getsch);
                                                                                $row1 = mysqli_fetch_assoc($viewresult4);
                                                                                $seats = $row1['two_class_seats'];

                                                                                $getsch1 = "SELECT * FROM schedule where sch_id = '$trainsch'";
                                                                                $viewresult9 = mysqli_query($con, $getsch1);
                                                                                $rows9 = mysqli_fetch_assoc($viewresult9);
                                                                                $train_id = $rows9['train_id'];

                                                                                $gettrain = "SELECT * FROM train where train_id = '$train_id' ";
                                                                                $viewresult1 = mysqli_query($con, $gettrain);
                                                                                $row2 = mysqli_fetch_assoc($viewresult1);

                                                                                $train_seats = $row2['two_class_seats'];

                                                                          }elseif ($trainclass == 3) {
                                                                                $total = $traveller * $row0['tree_class_price'];

                                                                                $getsch = "SELECT * FROM seats_calculate where sch_id = '$trainsch' AND book_date = '$bdate'  ";
                                                                                $viewresult4 = mysqli_query($con, $getsch);
                                                                                $row1 = mysqli_fetch_assoc($viewresult4);
                                                                                $seats = $row1['tree_class_seats'];

                                                                                $getsch1 = "SELECT * FROM schedule where sch_id = '$trainsch'";
                                                                                $viewresult9 = mysqli_query($con, $getsch1);
                                                                                $rows9 = mysqli_fetch_assoc($viewresult9);
                                                                                $train_id = $rows9['train_id'];

    
                                                                                $gettrain = "SELECT * FROM train where train_id = '$train_id' ";
                                                                                $viewresult1 = mysqli_query($con, $gettrain);
                                                                                $row2 = mysqli_fetch_assoc($viewresult1);

                                                                                $train_seats = $row2['tree_class_seats'];
                                                                          }
                                                                          $seats = $seats + $traveller;

                                                                          if ($seats <= $train_seats) {
                                                                            $getcal = "SELECT * FROM seats_calculate where sch_id = '$trainsch' AND book_date = '$bdate'  ";
                                                                            $viewresult5 = mysqli_query($con, $getcal);

                                                                            if ($row9 = mysqli_fetch_assoc($viewresult5)) {

                                                                                $q1="INSERT INTO  booking(sch_id,booking_date,traveller,total_amount,payment,status,trndate,user_id) values('$trainsch','$bdate','$traveller','$total','Pending','Pending','$cdate','$user_id')";
                                                                              $res1=mysqli_query($con,$q1);

                                                                                if ( $res1)
                                                                                {

                                                                                      if ($trainclass == 1) {
          
                                                                                            $query3="UPDATE seats_calculate SET one_class_seats='$seats'WHERE book_date='".$bdate."'";
                                                                                            $sql3=mysqli_query($con,$query3);

                                                                                      }elseif ($trainclass == 2) {
                                                                                            $query3="UPDATE seats_calculate SET two_class_seats='$seats' WHERE book_date='".$bdate."'";
                                                                                            $sql3=mysqli_query($con,$query3);

                                                                                      }elseif ($trainclass == 3) {
                                                                                            $query3="UPDATE seats_calculate SET tree_class_seats='$seats' WHERE book_date='".$bdate."'";
                                                                                            $sql3=mysqli_query($con,$query3);
                                                                                      }


                                                                                    echo '<script>alert("Booking Saved is Scussessfully."); window.location.href="myaccount.php";
                                                                                      </script>'; 
                                                                                }else{
                                                                                  echo "<script>alert(\"Booking Save is Not Scussess\");</script>";
                                                                                } 

                                                                            }else{

                                                                              $q1="INSERT INTO  booking(sch_id,booking_date,traveller,total_amount,payment,status,trndate,user_id) values('$trainsch','$bdate','$traveller','$total','Pending','Pending','$cdate','$user_id')";
                                                                              $res1=mysqli_query($con,$q1);

                                                                              $q2="INSERT INTO  seats_calculate(sch_id,book_date,one_class_seats,two_class_seats,tree_class_seats) values('$trainsch','$bdate','0','0','0')";
                                                                                mysqli_query($con,$q2);

                                                                                if ( $res1)
                                                                                {
                                                                                  $seats = $seats + $traveller;

                                                                                  if ($trainclass == 1) {
      
                                                                                        $query3="UPDATE seats_calculate SET one_class_seats='$seats'WHERE book_date='".$bdate."'";
                                                                                        $sql3=mysqli_query($con,$query3);

                                                                                  }elseif ($trainclass == 2) {
                                                                                        $query3="UPDATE seats_calculate SET two_class_seats='$seats' WHERE book_date='".$bdate."'";
                                                                                        $sql3=mysqli_query($con,$query3);

                                                                                  }elseif ($trainclass == 3) {
                                                                                        $query3="UPDATE seats_calculate SET tree_class_seats='$seats' WHERE book_date='".$bdate."'";
                                                                                        $sql3=mysqli_query($con,$query3);
                                                                                  }


                                                                                    echo '<script>alert("Booking Saved is Scussessfully."); window.location.href="myaccount.php";
                                                                                      </script>'; 
                                                                                }else{
                                                                                  echo "<script>alert(\"Booking Save is Not Scussess\");</script>";
                                                                                } 
                                                                            }

                                                                          }else{ echo "<script>alert(\"Soryyy!! No any Seats Available\");</script>";}
                                                            }
                                                        }else{ echo "<script>alert(\"Please Select Future Date\");</script>";}
                                                    }else{ echo "<script>alert(\"Select Enter Number of Traveller\");</script>";}
                                                }else{ echo "<script>alert(\"Select Booking Date\");</script>";}
                                            }else{ echo "<script>alert(\"Select Class\");</script>";}
                                        }else{ echo "<script>alert(\"Select Schedule\");</script>";}

                                    }
                                    ?>
                                  </div>
                                </form>
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