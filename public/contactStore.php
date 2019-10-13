<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\Contact;

$data = $_POST;

//Validate title
function is_empty($value)
{
	if ($value == '') {
		return true;
	} else {
		return false;
	}
}
if (is_empty($data['name'])) {
	$_SESSION['error'] = "Name is Required!";
	header("location:contact.php");
}   elseif(is_empty($data['email'])){
    $_SESSION['error'] = "Email is Required!";
	header("location:contact.php");
}   elseif(is_empty($data['comment'])){
    $_SESSION['error'] = "Massage is Required!";
	header("location:contact.php");
}  else {
	$_contact = new Contact;
    $_contact->frontStore($data);
}
