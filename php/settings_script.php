<?php
require"../includes/common.php";
if(!isset($_SESSION['email']))
header('location:index.php');
$user_id=$_SESSION['user_id'];
$pass=$_POST['password'];
$pass0=md5($pass);
$pass1=$_POST['newpassword1'];
$pass2=$_POST['newpassword2'];
$sq="select * from users where id='$user_id' and password='$pass0'";
$sqr=mysqli_query($con,$sq);
if($pass=="")
	echo"You kept password field empty!!!";
elseif(!mysqli_num_rows($sqr))
	echo"You have entered wrong password!!!";
elseif ($pass1!=$pass2) 
 	echo "You didn't re-entered new password correctly!!!";
elseif(!strlen($pass1)>6)
	echo "Password should have at-least 6 characters!!!";
elseif(mysqli_num_rows($sqr)){
$pass1=md5($pass1);
$cp="UPDATE `users` SET `password` = '$pass1' WHERE `users`.`id` = '$user_id'";
$cpr=mysqli_query($con,$cp);
header('location:products.php');
}
?>
