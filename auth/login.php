<?php 
    require_once "../connection.php";
    session_start();
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
                <img style="width: 100%" src="../img/logo/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get start</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="POST">
                <div class="form-group">
                  <input type="text" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="password" name="pass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN" name="submit">
                </div>
                <?php if(isset($_POST['submit'])) {

                        $email = stripslashes($_REQUEST['email']);
                        $password = stripslashes($_REQUEST['pass']);

                        $signin = "SELECT * FROM user WHERE email ='$email' AND password ='".md5($password)."'";
                        $result3 = mysqli_query($con,$signin) or mysqli_errno();
                        $rows4 = mysqli_num_rows($result3);
                        
                        if($rows4==1){
                            if ($row1 = mysqli_fetch_assoc($result3)) {

                                $id = $row1['user_id'];
                                $_SESSION['user_id']=$id;
                                echo "<script type=\"text/javascript\">window.location.href='../index.php'; </script>";
                            }
                        }
                        else{

                            echo "<script>alert(\"Username or Password is incorrect.\");window.location.href=\"login.php\";</script>";
                        }
                    } ?>
                    <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
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
