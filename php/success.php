<?php require"../includes/common.php";?>
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
	<?php include"../includes/header.php"; 
if(!isset($_SESSION['email']))
header('location:index.php');
$user_id=$_SESSION['user_id'];
$sq="update users_items set status='Confirmed' where user_id='$user_id'";
$sqr=mysqli_query($con,$sq);
?>
		<div class="cont container">
			<div class="alert alert-success">
				Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click</a> here to purchase any other item.
			</div>
		</div>
	<?php include"../includes/footer.php"; ?>
</body>
</html>
