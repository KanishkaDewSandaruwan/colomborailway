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
                            <h2>My Account</h2>
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
                      <h1 class="text-danger text-uppercase">My Booking Details</h1><br><br>
                      <table class="table v-middle" style="text-align: center;">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Train</th>
                                            <th class="border-top-0 text-white">Departure Time </th>
                                            <th class="border-top-0 text-white">Arrive Station</th>
                                            <th class="border-top-0 text-white">Arrive Time</th>
                                            <th class="border-top-0 text-white">Amount</th>
                                            <th class="border-top-0 text-white">Booking Date</th>
                                            <th class="border-top-0 text-white">Seats</th>

                                            <th class="border-top-0 text-white">Payment</th>
                                            <th class="border-top-0 text-white">Progress</th>
                                            <th class="border-top-0 text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                      $count=1;
                                      $id = $_SESSION['user_id'];
                                        $viewquery = " SELECT * FROM booking where user_id = ".$id." order by trndate desc";
                                        $viewresult = mysqli_query($con,$viewquery);
                                    
                                         ?>
                                        <tbody>
                                          <?php while($row = mysqli_fetch_assoc($viewresult)) { 

                                                $viewquery1 = " SELECT * FROM schedule where sch_id='".$row['sch_id']."'";
                                                $viewresult1 = mysqli_query($con,$viewquery1);
                                                $row1 = mysqli_fetch_assoc($viewresult1);
                                                $train_id = $row1['train_id'];
                                                $station_id = $row1['to_station'];

                                                $viewquery2 = " SELECT * FROM user where user_id='".$row['user_id']."'";
                                                $viewresult2 = mysqli_query($con,$viewquery2);
                                                $row2 = mysqli_fetch_assoc($viewresult2);

                                                $viewquery4 = " SELECT * FROM user_backup where user_id='".$row['user_id']."'";
                                                $viewresult4 = mysqli_query($con,$viewquery4);
                                                $row6 = mysqli_fetch_assoc($viewresult4);



                                                $gettrain = "SELECT * FROM train where train_id = '$train_id' ";
                                                $viewresult1 = mysqli_query($con, $gettrain);
                                                $row3 = mysqli_fetch_assoc($viewresult1);

                                                $getstation = "SELECT * FROM station where station_id ='$station_id' ";
                                                $viewresult2 = mysqli_query($con, $getstation);
                                                $row4 = mysqli_fetch_assoc($viewresult2);
                                                ?>
                                                <tr>
                                                    <td><?php echo $row3['train_name']; ?></td>
                                                    <td><?php echo $row1['depature_time']; ?></td>
                                                    <td><?php echo $row4['Station_name']; ?></td>
                                                    <td><?php echo $row1['arrive_time']; ?></td>
                                                    <td>LKR <?php echo $row['total_amount']; ?></td>
                                                    <td><?php echo $row['booking_date']; ?></td>
                                                    <td><?php echo $row['traveller']; ?></td>
                                                    <td><?php echo $row['payment']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                    <td><div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <a class="dropdown-item" href="cancelBooking.php?booking_id=<?php echo $row['booking_id']; ?>"><i class="fas fa-ban"> Cancel Booking</i></a>
                                                          <a class="dropdown-item" href="payment.php?booking_id=<?php echo $row['booking_id']; ?>&total=<?php echo $row['total_amount']; ?>"><i class="fas fa-credit-card"> Pay</i></a>
                                                        </div>
                                                      </div>
                                                    </td>
                                                </tr>
                                            <?php   $count++;   }?>
                                    </tbody>
                                </table>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <?php 
                          $viewquery = " SELECT * FROM user where user_id = '".$_SESSION['user_id']."'";
                          $viewresult = mysqli_query($con,$viewquery);
                          $row = mysqli_fetch_assoc($viewresult); ?>


                          <h1 class="text-danger text-uppercase">My Account Details</h1><br><br>
                          <!-- <div class="dropdown-divider"></div> -->
                          <div class="col-md-10">
                              <div class="row ml-3">  
                                 <h3 style="color: black;"><?php echo $row['name']; ?></h3>
                              </div>
                              <div class="row ml-3">
                                 <h3 style="color: black;"><?php echo $row['address']; ?></h3>
                              </div>
                              <div class="row ml-3">
                                 <h3 style="color: black;"><?php echo $row['phone']; ?></h3>
                              </div>
                              <div class="row ml-3">
                                 <h3 style="color: black;"><?php echo $row['email']; ?></h3>
                              </div>
                          </div>

                      </div>
                          <div class="col-md-4">
                              <button type="button" name="submit" class="btn col-md-10 btn-lg p-4  btn-info" data-toggle="modal" data-target="#editprofile" style="border-radius:20px; margin-top: 5%;">Edit Profile</button>
                              <button type="button" name="submit" class="btn col-md-10 btn-lg p-4  btn-info" data-toggle="modal" data-target="#exampleModal" style="border-radius:20px; margin-top: 5%;">Change Password</button>
                              <button type="button" name="submit" class="btn col-md-10 btn-lg p-4  btn-info" data-toggle="modal" data-target="#exampleModalemail" style="border-radius:20px; margin-top: 5%;">Change Email</button>
                              <button type="button" name="submit" class="btn col-md-10 btn-lg p-4  btn-danger" onclick="window.location.href='delete.php?user_id=<?php echo $row['user_id']; ?>'" style="border-radius:20px; margin-top: 5%;">Delete Account</button>
                          </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="password" name="cpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Password"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="password" name="npass" id="userPassword" class="form-control input-sm chat-input" placeholder="New Password"/>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="password" name="conpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Confirm Password"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="pass_change"  class="btn btn-primary">Save changes</button>
                          </div>
                           <?php
                            if(isset($_POST['pass_change']))
                            {


                            $currentpass=stripslashes($_REQUEST['cpass']);
                            $newpass=stripslashes($_REQUEST['npass']);
                            $confpass=stripslashes($_REQUEST['conpass']);
                            $g = $_SESSION['user_id'];

                            if(!empty($currentpass)){
                              if(!empty($newpass)){
                                if(!empty($confpass)){

                                  $loginsql="SELECT * FROM user WHERE password='".md5($currentpass)."'";
                                  $result=mysqli_query($con,$loginsql) or mysqli_errno();
                                  $rows=mysqli_fetch_assoc($result);

                                  $query5="SELECT password FROM user WHERE user_id='".$g."'";
                                  $sql5=mysqli_query($con,$query5);
                                  $row=mysqli_fetch_assoc($sql5);

                                  if(isset($rows['password'])==isset($row['password']))
                                  {
                                    if($newpass==$confpass){
                                      $query3="SELECT * FROM user WHERE password='$newpass'";
                                      $sql3=mysqli_query($con,$query3);

                                      if(mysqli_num_rows($sql3)>0)
                                      {
                                        echo "password already Exsisted";
                                      }
                                      else
                                      {
                                          $query2="UPDATE user SET password='".md5($newpass)."' WHERE user_id='".$g."'";
                                          $sql2=mysqli_query($con,$query2);
                                          echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='logout.php'; </script>"; 
                                      }

                                    }else{ echo "<script>alert(\"Password is Not Match\");</script>";} 
                                  }else{ echo "<script>alert(\"Current Password is Wrong\");</script>";} 
                                }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";} 
                              }else{ echo "<script>alert(\"Enter New Password\");</script>";} 
                            }else{ echo "<script>alert(\"Enter Current Password\");</script>";} 

                            }
                        ?>
                        </form>
                        </div>
                      </div>
                    </div>

                    <!-- Modal Edit Profile-->
                    <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Profile Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="text" name="name" id="name" class="form-control input-sm chat-input" placeholder="Your Name"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="phone" id="phone" class="form-control input-sm chat-input" placeholder="Phone Number"/>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="address" id="address" class="form-control input-sm chat-input" placeholder="Your Address"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="pass_detail"  class="btn btn-primary">Save changes</button>
                          </div>
                            <?php
                                if(isset($_POST['pass_detail']))
                                {


                                    $name = $_REQUEST['name'];
                                    $phone = $_REQUEST['phone'];
                                    $address = $_REQUEST['address'];
                                    $geID = $_SESSION['user_id'];
                                    $cdate = date("Y/m/d m:H:s");


                                      
                                                if(!empty($name))
                                                  {
                                                    $query3="UPDATE user SET name='$name' WHERE user_id='".$geID."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                                                  }

                                                  if(!empty($address))
                                                  {
                                                    $query3="UPDATE user SET address='$address' WHERE user_id='".$geID."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                                                  }

                                                  if(!empty($phone))
                                                  {
                                                    if(preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                                        $query3="UPDATE user SET phone='$phone' WHERE user_id='".$geID."'";
                                                        $sql3=mysqli_query($con,$query3);
                                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";

                                                      }else{echo "Enter Valid Phone Number";}
                                                  }


                                }
                            ?>
                        </form>
                        </div>
                      </div>
                    </div>
                         <!-- Modal -->
                    <div class="modal fade" id="exampleModalemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Email</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="email" name="cemail" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Email"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="email" name="nemail" id="userPassword" class="form-control input-sm chat-input" placeholder="New Email"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit"  class="btn btn-primary">Save changes</button>
                          </div>
                          <?php
                  if(isset($_POST['submit']))
                  {

                  $currentemail=stripslashes($_REQUEST['cemail']);
                  $newemail=stripslashes($_REQUEST['nemail']);
                  $g = $_SESSION['user_id'];

                  if(!empty($currentemail)){
                    if(!empty($newemail)){
                      if(filter_var($newemail, FILTER_VALIDATE_EMAIL)){

                        $loginsql="SELECT * FROM user WHERE email='".$currentemail."'";
                        $result=mysqli_query($con,$loginsql) or mysqli_errno();
                        $rows=mysqli_fetch_assoc($result);

                        $query5="SELECT email FROM user WHERE user_id='".$g."'";
                        $sql5=mysqli_query($con,$query5);
                        $row=mysqli_fetch_assoc($sql5);

                        if(isset($rows['email'])==isset($row['email']))
                        {
                            $query3="SELECT * FROM user WHERE email='$newemail'";
                            $sql3=mysqli_query($con,$query3);

                            if(mysqli_num_rows($sql3)>0)
                            {
                              echo "<script>alert(\"Email already Exsisted\");</script>";
                            }
                            else
                            {
                                $query2="UPDATE user SET email='".$newemail."' WHERE email='".$currentemail."'";
                                $sql2=mysqli_query($con,$query2);
                                echo "<script type=\"text/javascript\"> alert(\"Email Update Successfull\"); window.location.href='logout.php'; </script>"; 
                            }
                        }else{ echo "<script>alert(\"Current Email is Wrong\");</script>";} 
                    
                      }else{ echo "<script>alert(\"Enter Valid Email\");</script>";} 
                    }else{ echo "<script>alert(\"Enter New Email\");</script>";} 
                  }else{ echo "<script>alert(\"Enter Current Email\");</script>";} 

                  }
              ?>
                        </form>
                        </div>
                      </div>
                    </div>
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