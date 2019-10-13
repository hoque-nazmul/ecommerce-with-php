<?php
session_start();
include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');
use Bitm\AddCart;

$data = $_POST;
$id = $_GET['id'];
//Validate title
$_cart = new AddCart;
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$quantity = $_POST['quantity'];
	$sId = session_id();
	$add_cart = $_cart->addToCart($quantity, $id, $sId);
}