<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$query = "SELECT * FROM `orders` WHERE id = '$id' ";
$select_data = $db->select($query);
$data = $select_data->fetch_assoc();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $product            = mysqli_real_escape_string($db->link, $_POST['product']);
  $qty              = mysqli_real_escape_string($db->link, $_POST['qty']);
  $query = "UPDATE `orders` SET 
                            `product`='$product',
                            `qty`='$qty'
                            WHERE id = '$id' ";
  $create_data = $db->edit($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
  <h2 class="display-5 text-center font-italic">Welcome to Orders Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Update Order</h4>
      <a href="index.php" class="btn btn-primary float-right">Order List</a>
    </div>
    <div class="card-body">
      <form action="update.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
      <div class="form-group">
          <label for="name">Product Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo $data['product'];?>" name="product">
        </div>
        <div class="form-group">
          <label for="qty">Quantity</label>
          <input type="number" class="form-control" id="qty" aria-describedby="emailHelp" value="<?php echo $data['qty'];?>" name="qty">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php include_once("../inc/table_inc/footer.php"); ?>