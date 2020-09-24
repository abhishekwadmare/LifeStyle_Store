<?php
function ciatc($item_id)
{
require "../includes/common.php";
$user_id=$_SESSION['user_id'];
$sq="select * from users_items where item_id='$item_id' and user_id='$user_id' and status='Added to cart'";
$sqr=mysqli_query($con,$sq);
if(mysqli_num_rows($sqr)>=1)
	return 1;
else
	return 0;
}
?>
