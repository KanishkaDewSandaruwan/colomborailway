<?php 
require_once 'connection.php'; //insert connection to page
require_once 'admin.php'; //Check login 

if (isset($_REQUEST['accept_feedback_id'])) {

	$id = $_REQUEST['accept_feedback_id'];
	$query3="UPDATE feedback SET accept='Accept' WHERE feedback_id='".$id."'";
	$sql3=mysqli_query($con,$query3);
	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"feedbacks.php\";</script>"; 

}elseif (isset($_REQUEST['reject_feedback_id'])) {

	$id = $_REQUEST['reject_feedback_id'];
	$query3="UPDATE feedback SET accept='No' WHERE feedback_id='".$id."'";
	$sql3=mysqli_query($con,$query3);
	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"feedbacks.php\";</script>"; 
}
?>