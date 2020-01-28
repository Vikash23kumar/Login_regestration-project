<?php
	
	session_start();
	header('location:login.html');
	
	$con = mysqli_connect('localhost','root','');
	if($con){
		echo" connection successful";
	}
	else{
		echo"connection unsuccessful";
	}
	
	mysqli_select_db($con, 'transactional');
	
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$mobilenumber = $_POST['mnumber'];
	$emailid = $_POST['email'];
	$password = ($_POST['pass']);
	
	$q = "select * from signup where email_id = '$emailid'";
	
	$result = mysqli_query($con, $q);
	
	$num = mysqli_num_rows($result);
	if($num == 1){
		echo"User already exist...";
	}
	else{
		$qy = "insert into signup(firstname, lastname, mobile_number, email_id, password) values ('$firstname', '$lastname', '$mobilenumber', '$emailid', '$password')";
		mysqli_query($con, $qy);
		echo"Data save successful";
	}



?>