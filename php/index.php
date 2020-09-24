<?php
require '../includes/common.php';
if(isset($_SESSION['email'])){
header('location:products.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lifestyle Store</title>	
   <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="../css/index.css">

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php
			include '../includes/header.php';
		?>	
		<div id="banner_image">
			<div class="container">
				<center>
					<div id="banner_content">
					<h1>We sell lifestyle</h1>
					<p>Flat 40% OFF on premium brands</p>	
					<a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
					</div>
				</center>
			</div>
		</div>
		<?php
			include '../includes/footer.php';
		?>	
	</body>
</html>
