<?php
include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');

use Bitm\Banner;

$id = $_GET['id'];
$_banner = new Banner;
$_banner->delete($id);


?>