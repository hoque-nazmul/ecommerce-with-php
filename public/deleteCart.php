<?php
include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');

use Bitm\AddCart;

$id = $_GET['id'];
$_deleteCart = new AddCart;
$_deleteCart->delete($id);


?>