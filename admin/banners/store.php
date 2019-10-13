<?php
include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');
use Bitm\Banner;

$data = $_POST;

//Validate title
function is_empty($value){
    if($value == ''){
        return true;
    }else{
        return false;
    }
}
if(is_empty($data['title'])){
    session_start();
    $_SESSION['success'] = "Title can't be empty. Please enter title";
    header("location:create.php");
}else{
    $_banner = new Banner;
    $_banner->store($data);
}
