<?php
  //set headers to NOT cache a page
  session_start();
  header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
  header("Pragma: no-cache"); //HTTP 1.0
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 


  // Date in the past
  //or, if you DO want a file to cache, use:

  header("Cache-Control: max-age=2592000"); 
  
//30days (60sec * 60min * 24hours * 30days)

// set the PDO error mode to exception
include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');

use Bitm\AddCart;

$_cartNums = new AddCart;
$sId = session_id();

$cartNum = $_cartNums-> getNum($sId);
// echo $sId;
// die();
// echo count($cartNum);
// die();
?>
<!-- Header Top -->
<div class="container-fluid bg-dark d-none d-lg-block">
    <div class="container">
        <div class="row text-light pt-2 pb-2">
            <div class="col-md-9"><i class="fa fa-envelope-o" aria-hidden="true"></i> nazmul.hoquecu98@gmail.com
            </div>
            <div class="col-md-3 text-right text-light mylogin">
                <a href="login.php"><i class="fa fa-user-o ml-5" aria-hidden="true"></i> Login / Sign up </a>
            </div>
        </div>
    </div>
</div>

<!-- Header Bottom -->
<div class="container-fluid bg-black">
    <nav class="container navbar navbar-expand-lg navbar-dark bg-black">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="topbrands.php">Top Brands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-search my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="shopping_cart">
                <div class="cart">
                    <a href="cart.php" title="View my shopping cart" rel="nofollow">
                        <span class="cart_title">Cart</span>
                        <span class="no_product">( 
                            <?php 
                                if(count($cartNum) == 0){
                                    echo "empty";
                                }else{
                                    echo count($cartNum);
                                }    
                            ?>
                            )</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>