<?php require"../includes/common.php";
if(!isset($_SESSION['email']))
header('location:index.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lifestyle Store</title>	
		<link rel="stylesheet" type="text/css" href="../css/index.css">
   <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
	<?php include"../includes/header.php";?>
		<div class="row">
			<div class="cont col-xs-4 col-xs-offset-4">
				<h2>Change Password</h2>
				<form method="POST" action="settings_script.php">
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Old Password">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="newpassword1" placeholder="New Password">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="newpassword2" placeholder="Re-enter New Password">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Change</button>
					</div>
				</form>
			</div>
		</div>
		<?php include"../includes/footer.php"; ?>
</body>
</html>
