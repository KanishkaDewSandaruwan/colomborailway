<?php
require_once 'connection.php';

if(isset($_REQUEST['station_id']))
{
          $id = $_REQUEST['station_id'];

          $querygetcode="SELECT  * FROM station where station_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['station_id'];

          $querygetcode1="SELECT  * FROM schedule where to_station='".$a."'";
          $catresult1=mysqli_query($con,$querygetcode1);

          while($row=mysqli_fetch_assoc($catresult1)){
                  $query1="DELETE FROM schedule WHERE to_station='$a'";
                  mysqli_query($con,$query1);
          }

          $query1="DELETE FROM station WHERE station_id='$a '";
          mysqli_query($con,$query1);
          header('location:station.php');

}
else if(isset($_REQUEST['feedback_id']))
{
          $id = $_REQUEST['feedback_id'];

          $querygetcode="SELECT  * FROM feedback where feedback_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['feedback_id'];

          $query1="DELETE FROM feedback WHERE feedback_id='$a '";
          mysqli_query($con,$query1);
          header('location:feedbacks.php');

}else if(isset($_REQUEST['booking_id']))
{
          $id = $_REQUEST['booking_id'];

          $querygetcode="SELECT  * FROM booking where booking_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['booking_id'];

          $query1="DELETE FROM booking WHERE booking_id='$a '";
          mysqli_query($con,$query1);
          header('location:bookings.php');

}  else if(isset($_REQUEST['image_id'])){
          $id = $_REQUEST['image_id'];

          $querygetcode="SELECT  * FROM galary where image_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['image_id'];

          $query1="DELETE FROM galary WHERE image_id='$a '";
          mysqli_query($con,$query1);
          header('location:gallery.php');

} else if(isset($_REQUEST['un_id'])){
          $id = $_REQUEST['un_id'];
          $sch_id = $_REQUEST['sch_id'];

          $querygetcode="SELECT  * FROM unavailable where un_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['un_id'];

          $query1="DELETE FROM unavailable WHERE un_id='$a '";
          mysqli_query($con,$query1);
          header('location:schedulunavailable.php?sch_id='.$sch_id.'');

}else if(isset($_REQUEST['train_id'])){
          $id = $_REQUEST['train_id'];

          $querygetcode="SELECT  * FROM train where train_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['train_id'];

          $querygetcode1="SELECT  * FROM schedule where train_id='".$a."'";
          $catresult1=mysqli_query($con,$querygetcode1);

          while($row=mysqli_fetch_assoc($catresult1)){
                  $query1="DELETE FROM schedule WHERE train_id='$a'";
                  mysqli_query($con,$query1);
          }

          $query1="DELETE FROM train WHERE train_id='$a '";
          mysqli_query($con,$query1);
          header('location:train.php');
}

else if(isset($_REQUEST['user_id']))
{
          $id = $_REQUEST['user_id'];

          $querygetcode="SELECT  * FROM user where user_id='".$id."'";
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

                      header('location:user.php');
                }
              }
}
else{
  header('location:dashboard.php'); 
}
?>