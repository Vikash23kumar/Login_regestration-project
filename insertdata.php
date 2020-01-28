<!DOCTYPE html>
<html>
	<head>
		<title>Insert data</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
		<h1>Insert data</h1>
		  <form class="form-horizontal" action="insertbackend.php" method="POST">
			<div class="form-group">
			  <label class="control-label col-sm-2" for="accountnumber">Email Id:</label>
			  <div class="col-sm-10">
				<input type="text" class="form-control" id="accountnumber" placeholder="Acoount number" name="email">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="fullname">Customer Name:</label>
			  <div class="col-sm-10">
				<input type="text" class="form-control" id="fullname" placeholder="Customer name" name="cname">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="date">Date:</label>
			  <div class="col-sm-10">          
				<input type="date" class="form-control" id="date" placeholder="Enter date" name="date">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="amt">Amount:</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" id="amt" placeholder="Enter amount" name="amount">
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="famt">Fine Amount:</label>
			  <div class="col-sm-10">          
				<input type="text" class="form-control" id="famt" placeholder="Enter fine amount" name="fineamount">
			  </div>
			</div>
			<div class="form-group">        
			  <div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success">Submit</button>
				<a href="adminhome.php" class="btn btn-success">Back</a>
			  </div>
			</div>
		  </form>
		</div>
	</body>
</html>