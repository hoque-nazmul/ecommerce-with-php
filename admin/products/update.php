<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\Products;

$data = $_POST;
$_product = new Products;
$_product->update($data);
