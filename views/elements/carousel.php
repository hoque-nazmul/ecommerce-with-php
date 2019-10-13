<?php
// set the PDO error mode to exception
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\GetBanners;

$_banner = new GetBanners;
$banners = $_banner->getBanner();

?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

        <?php if (count($banners) > 0) { ?>
            <?php 
                $_active = "active";
                foreach ($banners as $banner) : ?>
                <div class="carousel-item <?php echo $_active;?>">
                    <img class="d-block w-100" src="<?php echo $webroot?>uploads/banner/<?= $banner['picture'] ?>" alt="img1">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="wow bounceInLeft"><?= $banner['title'] ?></h1>
                        <p class="wow shake"><?= $banner['promotional_message'] ?></p>
                        <button class="btn btn-info btn-lg wow bounceInRight">Shop Now</button>
                    </div>
                </div>
            <?php 
                $_active = "";
                endforeach; ?>
        <?php } else { ?>
            <p class="text-center m-auto">You have not any data. Please, <a href="../admin/banners/create.php" target="_blank" class="btn btn-primary">click here</a> to add one.</p>
        <?php } ?>

    </div>
</div>
<div class="container-fluid offer pt-4 pb-4 bg-orange d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 m-right">
                <h4>FREE SHIPPING</h4>
                <p>On all orders over 90$</p>
            </div>

            <div class="col-md-4 m-right">
                <h4>CALL US ANYTIME</h4>
                <p>+8801632476125</p>
            </div>

            <div class="col-md-4">
                <h4>OUR LOCATION</h4>
                <p>On all orders over 90$</p>
            </div>
        </div>
    </div>
</div>
