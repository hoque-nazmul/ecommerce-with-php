<?php
// set the PDO error mode to exception
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\GetProduct;

$_product = new GetProduct;
$products = $_product->GetFeatureProduct();
$newProducts = $_product->GetNewProduct();

?>
<div class="container-fluid">
    <div class="container-fluid pt-5">
        <div class="row wow bounceInLeft">
            <h3 class="ml-4">FEATURE PRODUCTS</h3>
        </div>
        <div class="row">
            <div class="underline ml-4"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row wow bounceInLeft">

            <?php if (count($products) > 0) { ?>
                <?php foreach ($products as $product) : ?>
                    <div class="col-md-3 card-dance">
                        <div class="card custom-card">
                            <div class="inner">
                                <a href="preview.php?id=<?= $product['id'] ?>"><img src="<?php echo $webroot ?>uploads/product/<?= $product['picture'] ?>" alt="card-1" class="card-img-top"></a>
                            </div>
                            <div class="card-body">
                                <h2><?= $product['title'] ?></h2>
                                <p><?= $product['short_description'] ?></p>
                                <p><span class="price">$<?= $product['cost'] ?></span></p>
                                <a href="preview.php?id=<?= $product['id'] ?>" class="btn btn-success pl-4 pr-4">Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php } else { ?>
                <p class="text-center m-auto">You have not any data. Please, <a href="../admin/products/create.php" target="_blank" class="btn btn-primary">click here</a> to add one.</p>
            <?php } ?>

        </div>

    </div>

    <div class="hello bg-light-gray pb-5 mt-5">
        <div class="container-fluid pt-5">

            <div class="row wow bounce">
                <h3 class="ml-4">NEW PRODUCTS</h3>
            </div>
            <div class="row">
                <div class="underline ml-4"></div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row wow bounce">

                <?php if (count($newProducts) > 0) { ?>
                    <?php foreach ($newProducts as $newProduct) : ?>
                        <div class="col-md-3 card-dance">
                            <div class="card custom-card">
                                <div class="inner">
                                    <a href="preview.php?id=<?= $newProduct['id'] ?>"><img src="<?php echo $webroot ?>uploads/product/<?= $newProduct['picture'] ?>" alt="card-1" class="card-img-top"></a>
                                </div>
                                <div class="card-body">
                                    <h2><?= $newProduct['title'] ?></h2>
                                    <p><?= $newProduct['short_description'] ?></p>
                                    <p><span class="price">$<?= $newProduct['cost'] ?></span></p>
                                    <a href="preview.php?id=<?= $newProduct['id'] ?>" class="btn btn-success pl-4 pr-4">Details</a>
                                </div>
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