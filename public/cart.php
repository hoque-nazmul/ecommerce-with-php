<!-- All CSS & JS file -->
<?php include_once("../views/elements/hrep.php"); ?>
<!-- Preloder Support -->
<?php include_once("../views/elements/preloder.php"); ?>
<!-- Header Support -->
<?php include_once("../views/elements/header.php"); ?>

<?php
// set the PDO error mode to exception
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\AddCart;

$_cart = new AddCart;
$sId = session_id();
$carts = $_cart->getCart($sId);
?>

<div class="container-fluid img-overlay top-img_cart">
	<p class="text-center text-black"><a href="index.php">Home/Cart</a></p>
</div>
<div class="container-fluid">

	<div class="container">
		<div class="card my-5">
			<div class="card-header">
				<h4 class="text-center">Your Cart Lists</h4>
			</div>
			<div class="card-body text-center">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Product Name</th>
							<th scope="col">Picture</th>
							<th scope="col">Quantity</th>
							<th scope="col">Price</th>
							<th scope="col">Total Price</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $sum = 0;?>
						<?php if (count($carts) > 0) { ?>
							<?php 
								
								$test = 0;
								foreach ($carts as $cart) : ?>
								<tr>
									<td><?php echo $cart['product_title']; ?></td>
									<td><img src="<?php echo $webroot ?>uploads/product/<?= $cart['picture'] ?>" alt="" height="60px" width="150px"></td>
									<td><?php echo $cart['qty']; ?></td>
									<td>$<?php echo $cart['price']; ?></td>
									<td>$<?php echo $cart['total_price']; ?></td>
									<td style="width:220px;">
										<a href="deleteCart.php?id=<?php echo $cart['id']; ?>" onclick="return confirm('Are You Sure!')" class="btn btn-danger">Delete</a>
									</td>
								</tr>
							<?php 
							$total = $cart['total_price'];;
							$sum = $sum + $total;
							$testings = $test+1;
						endforeach; ?>
						<?php } else { ?>
							<td colspan="5">Currently, Your Cart is Empty. Please, <a href="products.php" class="btn btn-primary my-5">click here</a> to add some product on your Cart.</td>
						<?php } ?>
					</tbody>
				</table>
				<table style="float:right;text-align:left;" width="40%">
					<tr>
						<th>Sub Total : </th>
						<td>TK. $<?php echo $sum;?></td>
					</tr>
					<tr>
						<th>VAT : </th>
						<td>10%</td>
					</tr>
					<tr>
						<th>Grand Total :</th>
						<td>TK. $<?php 
						
							$vat = $sum * 0.1;
							$grandTotal = $sum + $vat;
							echo $grandTotal;
						?> </td>
					</tr>
				</table>
			</div>
			<div class="shopping">
				<div class="shopleft">
					<a href="index.php"> <img src="images/shop.png" alt="" /></a>
				</div>
				<div class="shopright">
					<a href="login.php"> <img src="images/check.png" alt="" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- Home Products Index Support -->
<?php
session_unset();
include_once("../views/elements/footer.php"); ?>