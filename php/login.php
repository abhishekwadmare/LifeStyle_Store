<?php
	require '../includes/common.php';
	if(isset($_SESSION['email']))
	header('location:products.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lifestyle Store</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css"
		<!-- Latest compiled and minified css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<!-- jQuery Library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<!-- Latest compiled and minified javascript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php include "../includes/header.php";?>
		<div class="row">
			<div class="cont col-xs-4 col-xs-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading"><center>LOGIN</center></div>
					<div class="panel-body">
						<p class="text-warning">Login to make purchase</p>
						<form method="POST" action="login_submit.php">
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter email-id">
							</div>	
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
							</div>
							<center><button type="submit" class="btn btn-block btn-primary">Login</button></center>
						</form>
					</div>
					<div class="panel-footer"><a href="signup.html">Don't have an account? Register</a></div>
				</div>
			</div>
		</div>
		<?php include"../includes/footer.php";?>
	</body>
</html>

