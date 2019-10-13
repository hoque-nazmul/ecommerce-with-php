<?php
include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');

use Bitm\Products;

$id = $_GET['id'];
$_product = new Products;
$_product->delete($id);
?>