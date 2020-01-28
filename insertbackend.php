<?php

	$con = mysqli_connect('localhost','root','');
	/*if($con){
		echo"Connection Successful";
	}
	else{
		echo"Connection Unsuccessful";
	}*/
	
	mysqli_select_db($con, 'transactional');
	
	$emailid = $_POST['email'];
	$customername = $_POST['cname'];
	$date = $_POST['date'];
	$amount = $_POST['amount'];
	$fineamount = $_POST['fineamount'];
	//$tm = "select total_amount from deposit";
	$totalamount = $amount + $fineamount;
	
	$query = "insert into deposit(email_id, customer_name, deposit_date, deposit_amount, fine_amount, total_amount) values('$emailid', '$customername', '$date', '$amount', '$fineamount', '$totalamount')";
	
	$insert = mysqli_query($con, $query);
	if($insert){
		echo"Data inserted successfully";
	}
	else{
		echo"Data not inserted";
	}
?>

<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style>
			.divbtn{
				float:center;
			}
		</style>
	</head>
	<body class="container">
		<a href="adminhome.php" class="btn btn-primary divbtn">Back</a>
	</body>
</html>