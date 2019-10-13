<?php
include_once("lib/database.php");
$db = new Database();
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$query = "DELETE FROM `popular_tag` WHERE id = '$id' ";
$delete_data = $db->delete($query);
?>