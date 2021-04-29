<?php 
  require_once 'connection.php'; //insert connection to page
  session_start();
  if(!isset($_SESSION['user_id'])){
    header('location:auth/login.php');
  }

if(isset($_REQUEST['user_id']))
{
          $id = $_REQUEST['user_id'];

          $querygetcode="SELECT * FROM user where user_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['user_id'];
          $g=$result_row['email'];

          $cdate = date("Y/m/d m:H:s");

            $viewquery = " SELECT * FROM user where email='".$g."'";
              $viewresult = mysqli_query($con,$viewquery);
              if ($row = mysqli_fetch_assoc($viewresult)) {

                $name = $row['name'];
                $cus_id = $row['user_id'];
                $phone = $row['phone'];
                $email = $row['email'];


              $q1="INSERT INTO user_backup(user_id,name,phone,email,trn_date) values('$cus_id','$name','$phone','$email','$cdate')";
                $res1=mysqli_query($con,$q1);

                if ($res1) {


              $query1="DELETE FROM user WHERE email='$g '";
                      mysqli_query($con,$query1);

                      header('location:logout.php');
                }
              }
}
else{
  header('location:myaccount.php'); 
} ?>