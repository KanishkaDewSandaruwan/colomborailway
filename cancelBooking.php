<?php 
require_once 'connection.php';
session_start();
require_once 'user.php'; //Check login 

if(isset($_REQUEST['booking_id']))
{
	$id = $_REQUEST['booking_id'];

		$query3="UPDATE booking SET status='Cancel' WHERE booking_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
} ?>