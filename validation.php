<?php
	
	session_start();
	
	
	$con = mysqli_connect('localhost','root','');
	if($con){
		echo"connection successful";
	}
	else{
		echo"connection unsuccessful";
	}
	
	mysqli_select_db($con, 'transactional');
	
	
	$emailid = $_POST['email'];
	$password = ($_POST['pass']);
	
	$q = "select * from signup where email_id = '$emailid' AND password = '$password'";
	
	$result = mysqli_query($con, $q);
	
	$num = mysqli_num_rows($result);
	if($num == 1){
		$data = mysqli_fetch_array($result);
		$_SESSION['username'] = $data['firstname']."&nbsp;".$data['lastname'];
		$_SESSION['emailid'] = $data['email_id'];
		header('location:home.php');
	}
	else{
		header('location:login.html'); 
	}

?>