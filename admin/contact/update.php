<?php
include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');

use Bitm\Contact;

$data = $_POST;
$_contact = new Contact;
$_contact->update($data);