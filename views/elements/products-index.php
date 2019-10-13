<?php
// set the PDO error mode to exception
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\GetProduct;

$_product = new GetProduct;
$products = $_product->GetMostProduct();
$newProducts = $_product->GetSCARFSProduct();
$saleProducts = $_product->GetSALEProduct();
?>

<div class="container-fluid pt-5 pb-5">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-md-6 col-lg-4">
                <div class="row">
                    <h4>MOST WANTED</h4>
                </div>
                <div class="row">
                    <div class="underline-green"></div>
                </div>
                <?php if (count($products) > 0) { ?>
                    <?php foreach ($products as $product) : ?>
                        <div class="media mt-5">
                            <img src="<?php echo $webroot ?>uploads/product/<?= $product['picture'] ?>" class="img-fluid mr-3" alt="media1">
                            <div class="media-body mt-2">
                                <h5><?= $product['title'] ?></h5>
                                <h6>$<?= $product['cost'] ?></h6>
                                <a href="preview.php?id=<?= $product['id'] ?>" class="btn btn-success pl-4 pr-4"><i class="fa fa-cart-plus" aria-hidden="true"></i> Details</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php } else { ?>
                    <p class="text-center m-auto">You have not any data. Please, <a href="../admin/products/create.php" target="_blank" class="btn btn-primary">click here</a> to add one.</p>
                <?php } ?>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="row">
                    <h4>SCARFS</h4>
                </div>
                <div class="row">
                    <div class="underline-blue"></div>
                </div>

                <?php if (count($newProducts) > 0) { ?>
                    <?php foreach ($newProducts as $newProduct) : ?>
                        <div class="media mt-5">
                            <img src="<?php echo $webroot ?>uploads/product/<?= $newProduct['picture'] ?>" class="img-fluid mr-3" alt="media1">
                            <div class="media-body mt-2">
                                <h5><?= $newProduct['title'] ?></h5>
                                <h6>$<?= $newProduct['cost'] ?></h6>
                                <a href="preview.php?id=<?= $newProduct['id'] ?>" class="btn btn-primary pl-4 pr-4"><i class="fa fa-cart-plus" aria-hidden="true"></i> Details</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php } else { ?>
                    <p class="text-center m-auto">You have not any data. Please, <a href="../admin/products/create.php" target="_blank" class="btn btn-primary">click here</a> to add one.</p>
                <?php } ?>

            </div>

            <div class="col-lg-4 d-none d-lg-block">
                <div class="row">
                    <h4>ON SALE</h4>
                </div>
                <div class="row">
                    <div class="underline-black"></div>
                </div>

                <?php if (count($saleProducts) > 0) { ?>
                    <?php foreach ($saleProducts as $saleProduct) : ?>
                        <div class="media mt-5">
                            <img src="<?php echo $webroot ?>uploads/product/<?= $saleProduct['picture'] ?>" class="img-fluid mr-3" alt="media1">
                            <div class="media-body mt-2">
                                <h5><?= $saleProduct['title'] ?></h5>
                                <h6>$<?= $saleProduct['cost'] ?></h6>
                                <a href="preview.php?id=<?= $saleProduct['id'] ?>" class="btn btn-dark pl-4 pr-4"><i class="fa fa-cart-plus" aria-hidden="true"></i> Details</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php } else { ?>
                    <p class="text-center m-auto">You have not any data. Please, <a href="../admin/products/create.php" target="_blank" class="btn btn-primary">click here</a> to add one.</p>
                <?php } ?>

            </div>
        </div>
    </div>
</div>