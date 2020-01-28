<!DOCTYPE html>
<html>
	<head>
		<title>BK&Co. Company</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			<style>
				*{
					margin:0;
					padding:0;
					font-family:century gothic;
				}
				header{
					background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(blue50594.jpg);
					height:100vh;
					background-size:cover;
					background-position:center;
				}
				ul{
					float:right;
					list-style-type:none;
					margin-top:25px;
				}
				ul li{
					display:inline-block;
				}
				ul li a{
					text-decoration:none;
					color:#fff;
					padding:5px 20px;
					border:1px solid transparent;
					transition:0.6s ease;
				}
				ul li a:hover{
					background-color:#fff;
					color:#000;
					text-decoration:none;
				}
				.logo img{
					float:left;
					width:150px;
					height:auto;
				}
				.main{
					max-width:1200px;
					margin:auto;
				}
				.title{
					position:absolute;
					top:50%
					left:50%
					transform:translate(-50%,-50%);
					float:center;
				}
				.title h1{
					color:#fff;
					font-size:70px;
				}
				.button{
					position:absolute;
					top:60%
					left:50%
					transform:translate(-50%,-50%);
					float:center;
				}
				.bun{
					border:1px solid;
					padding:10px 30px;
					text-decoration:none;
				}
			</style>
	</head>
	<body>
		<header>
			<div class="main">
				<div class="logo">
					<img src="">
				</div>
				<ul>
					<li><a href="#">Admin</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</div>
			<div class="title">
				<h1>Vikash Development</h1>
			</div>
			<div class="button">
				<a href="#" class="btn btn-info btn-block bun">About Developer</a>
			</div>
		</header>
	</body>
</html>
