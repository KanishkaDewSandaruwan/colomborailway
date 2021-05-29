<?php 
require_once 'connection.php'; //insert connection to page
require_once 'admin.php'; //Check login 

if (isset($_REQUEST['accept'])) {

	$id = $_REQUEST['accept'];

	$viewquery = " SELECT * FROM booking where booking_id='".$id."'";
    $viewresult = mysqli_query($con,$viewquery);
    $row1 = mysqli_fetch_assoc($viewresult);
    if ($row1['payment'] != 'Pending') {

				$query3="UPDATE booking SET status='Accept' WHERE booking_id='".$id."'";
				$sql3=mysqli_query($con,$query3);
				echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"bookings.php\";</script>"; 
	}else{
        	echo "<script type=\"text/javascript\"> alert(\"Customer Need to Pay Before Accept Booking\"); window.location= \"bookings.php\";</script>";
        }

}elseif (isset($_REQUEST['reject'])) {

	$id = $_REQUEST['reject'];
	$query3="UPDATE booking SET status='Reject' WHERE booking_id='".$id."'";
	$sql3=mysqli_query($con,$query3);
	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"bookings.php\";</script>"; 
}
?>