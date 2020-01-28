<?php

	session_start();
	
	$con = mysqli_connect('localhost','root','');
	if($con){
		echo"Connection Successful";
	}else{
		echo"Connection Unsuccessful";
	}
	
	mysqli_select_db($con, 'transactional');
	
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$sql = "select * from adminlogin where admin_id='$username' AND password='$password'";
	
	$query = mysqli_query($con, $sql);
	
	$row = mysqli_num_rows($query);
	if($row==1){
		echo"Login Successful";
		$_SESSION['username'] = $username;
		header('location:adminhome.php');
	}
	else{
		echo"Login UnSuccessful";
		header('location:admin.html');
	}
?>