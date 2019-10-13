<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$query = "SELECT * FROM `carts` WHERE id = '$id' ";
$select_data = $db->select($query);
$data = $select_data->fetch_assoc();
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
  $query = "UPDATE `carts` SET 
                            `sId`='$sid',
                            `product_id`='$pid',
                            `picture`='$uploaded_name',
                            `product_title`='$title',
                            `qty`='$qty',
                            `total_price`='$tlp' 
                            WHERE id = '$id' ";
  $create_data = $db->edit($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
    <h2 class="display-5 text-center">Welcome to My Crud Application</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Edit Cart</h4>
      <a href="index.php" class="btn btn-primary float-right">Carts List</a>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
        <div class="form-group">
          <label for="name">Product Title</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo $data['product_title'];?>" name="title">
        </div>
          <img src="<?php echo $data['picture'];?>" width="200px" height="100px" alt="">
        <div class="form-group">
          <label for="exampleFormControlFile1">Product Image</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
        </div>
        <div class="form-group">
          <label for="name">Seller ID</label>
          <input type="number" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo $data['sId'];?>" name="sid">
        </div>
        <div class="form-group">
          <label for="name">Product ID</label>
          <input type="number" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo $data['product_id'];?>" name="pid">
        </div>
        <div class="form-group">
          <label for="name">Quantity</label>
          <input type="number" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo $data['qty'];?>" name="qty">
        </div>
        <div class="form-group">
          <label for="name">Total Price</label>
          <input type="number" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo $data['total_price'];?>" name="tlp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php include_once("../inc/table_inc/footer.php"); ?>