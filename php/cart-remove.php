<?php require "../includes/common.php";
$id=$_GET['id'];
$user_id=$_SESSION['user_id'];
echo$id;
echo$user_id;
$dq="delete from users_items where user_id='$user_id' and item_id='$id'";
$dqr=mysqli_query($con,$dq);
header('location:cart.php');
?>
