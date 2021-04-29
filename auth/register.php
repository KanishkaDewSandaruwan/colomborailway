<?php 
    require_once "../connection.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RAILWAY TICKET BOOKING</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../dashboard/vendors/feather/feather.css">
  <link rel="stylesheet" href="../dashboard/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../dashboard/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../dashboard/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="icon" type="image/png" href="../img/logo/Sri_Lanka_Railway_logo.png" sizes="300x300" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../img/logo/logo.svg" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST">
                <div class="form-group">
                  <input type="text" name="name" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" name="phone" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Your Phone Number">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" name="address" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Your Address">
                </div>

                <div class="form-group">
                  <input type="text" name="nic" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Your NIC Number">
                </div>

                <div class="form-group">
                  <input type="password" name="pass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="form-group">
                  <input type="password" name="cpass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password">
                </div>
                <div class="mt-3">
                  <button type="submit" name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
                </div>
                <?php 

                  if (isset($_POST['submit'])) {

                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $address = $_REQUEST['address'];
                    $phone = $_REQUEST['phone'];
                    $nic = $_REQUEST['nic'];
                    $psaaword = $_REQUEST['pass'];
                    $conpw = $_REQUEST['cpass'];

                    $query2="SELECT * FROM user WHERE email='$email'";
                      $sql2=mysqli_query($con,$query2);

                      $query3="SELECT * FROM user WHERE phone='$phone'";
                      $sql3=mysqli_query($con,$query3);

                      $query4="SELECT * FROM user WHERE nic='$nic'";
                      $sql4=mysqli_query($con,$query4);

                    if (empty($name)) {

                      echo "<script>alert(\"Plese Enter Your Name.\");window.location.href=\"index.php\";</script>";
                      
                    }
                    elseif (empty($email)) {
                      
                      echo "<script>alert(\"Plese Enter Your Email.\");window.location.href=\"index.php\";</script>";
                      
                    }
                    elseif (empty($address)) {
                      
                      echo "<script>alert(\"Plese Enter Your address.\");window.location.href=\"index.php\";</script>";
                      
                    }
                    elseif (empty($phone)) {
                      
                      echo "<script>alert(\"Plese Enter Your Phone Number.\");window.location.href=\"index.php\";</script>";
                      
                    }
                    elseif (empty($nic)) {
                      
                      echo "<script>alert(\"Plese Enter Your NIC Number.\");window.location.href=\"index.php\";</script>";
                      
                    }
                    elseif (empty($psaaword)) {
                      
                      echo "<script>alert(\"Plese Enter New Password.\");window.location.href=\"index.php\";</script>";
                      
                    }
                    elseif (empty($conpw)) {
                      
                      echo "<script>alert(\"Plese confirm Your Password.\");window.location.href=\"index.php\";</script>";
                    
                    }
                    elseif (!preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)) {

                      echo "<script>alert(\"Plese Enter Valid Phone Number.\");window.location.href=\"index.php\";</script>";
                      
                    }
                    elseif ($psaaword!=$conpw) {
                      
                      echo "<script>alert(\"Password is Not Match.\");window.location.href=\"index.php\";</script>";
                      
                    }
                    elseif (mysqli_num_rows($sql2)>0) {
                    
                      echo "<script>alert(\"Email already Exsisted.\");window.location.href=\"index.php\";</script>";
                      
                    }
                    elseif (mysqli_num_rows($sql3)>0) {
                      
                      echo "<script>alert(\"Phone Number already Exsisted.\");window.location.href=\"index.php\";</script>";
                    }
                    elseif (mysqli_num_rows($sql4)>0) {
                    
                      echo "<script>alert(\"NIC Number already Exsisted.\");window.location.href=\"index.php\";</script>";
                      
                    }
                    else {

                      $q1="INSERT INTO user(name,phone,email,address,password,nic) values('$name','$phone','$email','$address','".md5($psaaword)."','$nic')";
                        $res1=mysqli_query($con,$q1);

                        if ( $res1){
                          echo "<script>alert(\"congratulations! your registration was successful.\");window.location.href=\"login.php\";</script>";
                      }
                      else{
                        echo "<script>alert(\"Ohh Snap! your registration Fail. Plese Try Again!.\");window.location.href=\"register.php\";</script>";
                      }
                    }
                  }

                   ?>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
