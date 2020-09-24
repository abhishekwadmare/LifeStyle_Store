<?php 
require "../includes/common.php";
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$iq="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$iqr=mysqli_query($con,$iq);
header("location:products.php");
?>
