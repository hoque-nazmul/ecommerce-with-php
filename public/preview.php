<!-- All CSS & JS file -->
<?php include_once("../views/elements/hrep.php"); ?>
<!-- Preloder Support -->
<?php include_once("../views/elements/preloder.php"); ?>
<!-- Header Support -->
<?php include_once("../views/elements/header.php"); ?>
<?php 
include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');

use Bitm\GetProduct;

$id = $_GET['id'];

$_product = new GetProduct;
$singleProduct = $_product->GetSingleProduct($id);

?>

<div class="main">
	<div class="content">
		<div class="section group">
			<div class="cont-desc span_1_of_2">
				<div class="grid images_3_of_2">
					<img src="<?php echo $webroot ?>uploads/product/<?= $singleProduct['picture'] ?>" alt="" />
				</div>
				<div class="desc span_3_of_2">
					<h2><?= $singleProduct['title'] ?></h2>
					<p><?= $singleProduct['short_description'] ?></p>
					<div class="price">
						<p>Price: <span>$<?= $singleProduct['cost'] ?></span></p>
						<p>Category: <span>Uncatagorized</span></p>
						<p>Brand:<span><?= $singleProduct['product_type'] ?></span></p>
					</div>
					<div class="add-cart">
						<form action="storeCart.php?id=<?= $singleProduct['id'] ?>" method="post">
							<input type="number" class="buyfield" name="quantity" value="<?= $singleProduct['total_sales'] ?>" />
							<input type="submit" class="buysubmit" name="submit" value="Buy Now" />
						</form>
					</div>
				</div>
				<div class="product-desc">
					<h2>Product Details</h2>
					<p><?= $singleProduct['description'] ?></p>
				</div>

			</div>
			<div class="rightsidebar span_3_of_1">
				<h2>CATEGORIES</h2>
				<ul>
					<li><a href="productbycat.php">Mobile Phones</a></li>
					<li><a href="productbycat.php">Desktop</a></li>
					<li><a href="productbycat.php">Laptop</a></li>
					<li><a href="productbycat.php">Accessories</a></li>
					<li><a href="productbycat.php">Software</a></li>
					<li><a href="productbycat.php">Sports & Fitness</a></li>
					<li><a href="productbycat.php">Footwear</a></li>
					<li><a href="productbycat.php">Jewellery</a></li>
					<li><a href="productbycat.php">Clothing</a></li>
					<li><a href="productbycat.php">Home Decor & Kitchen</a></li>
					<li><a href="productbycat.php">Beauty & Healthcare</a></li>
					<li><a href="productbycat.php">Toys, Kids & Babies</a></li>
				</ul>

			</div>
		</div>
	</div>
</div>
<!-- Home Products Index Support -->
<?php include_once("../views/elements/footer.php"); ?>