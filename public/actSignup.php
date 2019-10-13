<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\Helpers;

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
	header("location:signup.php");
}   elseif(is_empty($data['email'])){
    $_SESSION['error'] = "Email is Required!";
	header("location:signup.php");
}   elseif(is_empty($data['password'])){
    $_SESSION['error'] = "Password is Required!";
	header("location:signup.php");
}elseif(is_empty($data['phone'])){
    $_SESSION['error'] = "Phone is Required!";
	header("location:signup.php");
}  else {
	$_signUp = new Helpers;
    $_signUp->signUp($data);
}