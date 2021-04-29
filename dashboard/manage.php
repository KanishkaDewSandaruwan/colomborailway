<?php 
require_once 'connection.php'; //insert connection to page
require_once 'admin.php'; //Check login 

if (isset($_REQUEST['accept'])) {

	$id = $_REQUEST['accept'];
	$query3="UPDATE booking SET status='Accept' WHERE booking_id='".$id."'";
	$sql3=mysqli_query($con,$query3);
	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"bookings.php\";</script>"; 

}elseif (isset($_REQUEST['reject'])) {

	$id = $_REQUEST['reject'];
	$query3="UPDATE booking SET status='Reject' WHERE booking_id='".$id."'";
	$sql3=mysqli_query($con,$query3);
	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"bookings.php\";</script>"; 
}
?>