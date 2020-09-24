<?php
require "../includes/common.php";

$name=$_POST['name'];
if($name=="")
	echo"Empty name Field";
$email=$_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  echo "Incorrect email";
}
$password=$_POST['password'];
if (strlen($password) < 6) {
  echo "Password should have at-least 6 characters";
}
$contact=$_POST['contact'];
if($contact=="")
	echo"Empty contact Field";
$city=$_POST['city'];
if($city=="")
	echo"Empty city Field";
$address=$_POST['address'];
if($address=="")
	echo"Empty address Field";

$ck="select id from users where email='$email'";
$ckr=mysqli_query($con,$ck);
if(mysqli_num_row>0)
	echo"error:emali already exists!!";
else{
$name=mysqli_real_escape_string($con,$name);
$email=mysqli_real_escape_string($con,$email);
$password=md5(mysqli_real_escape_string($con,$password));
$contact=mysqli_real_escape_string($con,$contact);
$city=mysqli_real_escape_string($con,$city);
$address=mysqli_real_escape_string($con,$address);

$iq="insert into users (name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
$iqr=mysqli_query($con,$iq);

$_SESSION['user_id']=mysqli_insert_id($con);
$_SESSION['email']=$email;
header('location:products.php');
}
?>
