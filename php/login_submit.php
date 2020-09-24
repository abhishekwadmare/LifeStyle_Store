<?php
	require '../includes/common.php';
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=md5(mysqli_real_escape_string($con,$_POST['password']));
	$sq="select id,email from users where email='$email' and password='$password'";
	$sqr=mysqli_query($con,$sq) or die(mysqli_error($con));
	if(mysqli_num_rows($sqr)==0)
		echo"Wrong password or email_id!!!";	
	else{
		$row=mysqli_fetch_array($sqr);
		$_SESSION['email']=$row['email'];
		$_SESSION['user_id']=$row['id'];
		header('location: products.php');
		exit;	
	}	
?>
