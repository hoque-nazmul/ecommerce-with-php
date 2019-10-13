<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $permitted = ['jpg', 'png', 'jpeg', 'gif'];
  $img_name = $_FILES['img']['name'];
  $img_size = $_FILES['img']['size'];
  $img_tmp = $_FILES['img']['tmp_name'];
  $div_filename = explode('.',$img_name);
  $extention = strtolower(end($div_filename));
  $uploaded_name = substr(md5(time()), 0, 10).'.'.$extention;
  $uploaded_name = "uploads/".$uploaded_name;
  move_uploaded_file($img_tmp, $uploaded_name);
  $title          = mysqli_real_escape_string($db->link, $_POST['title']);
  $sid            = mysqli_real_escape_string($db->link, $_POST['sid']);
  $pid            = mysqli_real_escape_string($db->link, $_POST['pid']);
  $qty            = mysqli_real_escape_string($db->link, $_POST['qty']);
  $tlp            = mysqli_real_escape_string($db->link, $_POST['tlp']);
  $query = "INSERT INTO `carts`(`product_title`, `picture`, `sId`, `product_id`, `qty`, `total_price`) VALUES ('$title', '$uploaded_name ', '$sid', '$pid', '$qty', '$tlp') ";
  $create_data = $db->create($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
  <h2 class="display-5 text-center font-italic">Welcome to Cart Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Create Cart</h4>
      <a href="index.php" class="btn btn-primary float-right">Carts List</a>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
        <div class="form-group">
          <label for="name">Product Title</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Title" name="title">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Product Image</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
        </div>
        <div class="form-group">
          <label for="name">Seller ID</label>
          <input type="number" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Seller ID" name="sid">
        </div>
        <div class="form-group">
          <label for="name">Product ID</label>
          <input type="number" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Product ID" name="pid">
        </div>
        <div class="form-group">
          <label for="name">Quantity</label>
          <input type="number" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Product Quantity" name="qty">
        </div>
        <div class="form-group">
          <label for="name">Total Price</label>
          <input type="number" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Total Price" name="tlp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php include_once("../inc/table_inc/footer.php"); ?>