<?php

	session_start();
	if(!isset($_SESSION['username'])){
		header('location:login.html');
	}
?>

<?php

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con, 'transactional');
	
	$query = "select * from deposit where email_id='".$_SESSION['emailid']."'";
	
	$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h2 class="text-center text-success">Welocome <?php echo $_SESSION['username'];?></h2>
			<a href="logout.php" class="btn btn-danger">LOGOUT</a>
		</div>
		<div class="container">
		<table class="table table-bordered container">
			<h1>Transaction Details 
				<div style="float:right;">
					<h3 style="color:rgb(80, 150, 250)">Net Amount: 
					<?php
					$query1 = "select sum(total_amount) as total from deposit where email_id='".$_SESSION['emailid']."'";
					$result1 = mysqli_query($con, $query1);
					$rows1=mysqli_fetch_assoc($result1);
					
					echo $rows1['total'];
					?>
					</h3>
				</div>
			</h1>
			<thead>
				<tr>
					<th>Id</th>
					<th>Email Id</th>
					<th>Customer Name</th>
					<th>Date</th>
					<th>Amount</th>
					<th>Fine Amount</th>
					<th>Total Amount</th>
				</tr>
			</thead>
			<?php
				while($rows=mysqli_fetch_assoc($result))
				{
			?>
				<tr>
					<td><?php echo $rows['id'];?></td>
					<td><?php echo $rows['email_id'];?></td>
					<td><?php echo $rows['customer_name'];?></td>
					<td><?php echo $rows['deposit_date'];?></td>
					<td><?php echo $rows['deposit_amount'];?></td>
					<td><?php echo $rows['fine_amount'];?></td>
					<td><?php echo $rows['total_amount'];?></td>
				</tr>
			<?php
				}
			?>
		</table>
		</div>
	</body>
</html>