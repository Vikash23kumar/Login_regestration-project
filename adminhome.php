<?php

	session_start();
	if(!isset($_SESSION['username'])){
		header('location:admin.html');
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Admin home page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style>
			.divbtn{
				float:right;
			}
			.img{
				
				width:100%;
				height:75vh;
			}
		</style>
	</head>
	<body>
		<h1 class="text-center text-primary">Welocome <?php echo $_SESSION['username'];?></h1>
		<div class="container">
			<a href="adminlogout.php" class="btn btn-danger">LOGOUT</a>
			<div class="btn btn-right divbtn">
				<a href="insertdata.php" class="btn btn-primary">Insert data</a>
				<a href="showdata.php" class="btn btn-primary">Show data</a>
			</div>
			<div>
				<img src="istockphoto-909894906-612x612.jpg" class="img">
			</div>
		</div>
	</body>
</html>