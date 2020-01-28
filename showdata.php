<?php
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con, 'transactional');
	
	$query = "select * from deposit";
	
	$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Fetch data</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style>
			.btndiv{
				float:right;
				margin-top:10px;
				margin-bottom:5px;
			}
		</style>
	</head>
	<body class="container">
		<div class="form-group">       
			<div class="col-sm-offset-2 col-sm-10">
				<a href="adminhome.php" class="btn btn-success btndiv">Back</a>
			</div>
		</div>
		<table class="table table-bordered">
			<h1>Transaction Details</h1>
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
					<td><?php echo $rows['account_number'];?></td>
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
	</body>
</html>