<?php
	require_once 'connection.php'; //insert connection to page

	if(!isset($_SESSION['user_id'])){
		header('location:login.php');
	}else{
		$id = $_SESSION['user_id'];
		$viewquery = " SELECT * FROM user where user_id = '$id'";
        $viewresult = mysqli_query($con,$viewquery); 
        $row1 = mysqli_fetch_assoc($viewresult);

        if (!isset($row1['name'])) {
        	header('location:login.php');
        }
	}
?>