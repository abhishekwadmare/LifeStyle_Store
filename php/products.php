<?php
	require '../includes/common.php';	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lifestyle Store</title>
		<title>Lifestyle Store</title>	
		<link rel="stylesheet" type="text/css" href="../css/index.css">
   <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>	
	<body>
		<?php include "../includes/header.php"; include "cid.php"; ?>
		<div class="container cont">
			<div class="row">
				<div class="jumbotron">
					<center><h1>Welcome to our Lifestyle Store!</h1>
					<p>We have the best cameras, watches and shirt for you. No need to hunt around, we have all in one place.</p></center>
				</div>
			</div>
			<!--Cameras-->
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/c1.jpeg">
						<div class="caption">
							<center><h3>Nikon S7200</h3>
							<p>Price Rs.36000.00</p>
							<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
<?php
} else {
if (ciatc(1)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
							</center>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../img/c2.jpeg">
						<div class="capton">
							<center>
								<h3>Canon EOS</h3>
								<p>Price Rs.40000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
<?php
} else {
if (ciatc(2)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/c3.jpeg">
						<div class="caption">
							<center>
								<h3>Canon EOS</h3>
								<p>Price Rs.50000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (ciatc(3)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
							</center>
						</div>	
					</div>
				</div>	
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/c4.jpeg">
						<div class="caption">
							<center>
								<h3>Canon EOS</h3>
								<p>Price Rs.80000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (ciatc(4)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?> 
							</center>
						</div>	
					</div>
				</div>	
			</div>
			<!--watches-->
			<div class="row">
				
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/w1.jpeg">
						<div class="caption">
							<center><h3>Titan Model #301</h3>
							<p>Price Rs.13000.00</p>
							<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (ciatc(5)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
						</center>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../img/w2.jpeg">
						<div class="capton">
							<center>
								<h3>Titan Model #201</h3>
								<p>Price Rs.3000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (ciatc(6)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/w3.jpeg">
						<div class="caption">
							<center>
								<h3>HMT Milan</h3>
								<p>Price Rs.8000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (ciatc(7)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
							</center>
						</div>	
					</div>
				</div>	
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/w4.jpeg">
						<div class="caption">
							<center>
								<h3>Faber Luba #111</h3>
								<p>Price Rs.18000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (ciatc(8)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?> 
							</center>
						</div>	
					</div>
				</div>	
			</div>
			<!--Shirts-->
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/s1.jpeg">
						<div class="caption">
							<center><h3>H&W</h3>
							<p>Price Rs.800.00</p>
							<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (ciatc(9)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
							</center>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../img/s2.jpeg">
						<div class="capton">
							<center>
								<h3>Luis Phil</h3>
								<p>Price Rs.1000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (ciatc(10)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
							</center>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/s3.jpeg">
						<div class="caption">
							<center>
								<h3>John Zok</h3>
								<p>Price Rs.1500.00</p>
								<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (ciatc(11)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?> 
							</center>
						</div>	
					</div>
				</div>	
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="../img/s4.jpeg">
						<div class="caption">
							<center>
								<h3>Jhalsani</h3>
								<p>Price Rs.1300.00</p>
								<?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (ciatc(12)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?> 
							</center>
						</div>	
					</div>
				</div>		
			</div>
	
		</div>
		<?php include "../includes/footer.php"; ?>
	</body>
</html>
