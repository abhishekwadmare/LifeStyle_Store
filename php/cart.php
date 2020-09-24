<?php
require"../includes/common.php";
if(!isset($_SESSION['email']))
header('location:login.php');
?>	
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
	<?php include "../includes/header.php";
$user_id=$_SESSION['user_id'];
$sq="select * from users_items ui inner join items i on i.id=ui.item_id where ui.user_id='$user_id' and status='Added to cart'";
$sqr=mysqli_query($con,$sq);
$sum=0;
$count=0;
if(!mysqli_num_rows($sqr))
{
?>
 <div class="cont container">
			<div class="alert alert-warning">
				Add Items to cart First!!!. <a href="products.php">Click</a> here to purchase items.
			</div>
		</div>
	<?php }else{ ?>
		<div class="row">
			<div class="cont col-xs-6 col-xs-offset-3">
				<table class="table table-striped">
				<thead>
					<tr>
						<th>Item Number</th>
						<th>Item Name</th>
						<th>Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
<?php while($row=mysqli_fetch_array($sqr)) { ?>
					<tr>
						<td><?php $count=$count+1; echo$count; ?></td>
						<td><?php echo$row['name'];?></td>
						<td><?php echo$row['price']; $sum=$sum+$row['price'];?></td>
						<td><a href='cart-remove.php?id=<?php echo $row['item_id'];?>' class='remove_item_link'> Remove</a></td>
					</tr>
<?php }?>
					<tr>
						<td></td>
						<td>Total</td>
						<td>Rs. <?php echo$sum;?>/-</td>
						<td><a href="success.php" class="btn btn-primary">Confirmed Order</a></td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	<?php }?>
				<?php include "../includes/footer.php"; ?>
</body>
</html>
