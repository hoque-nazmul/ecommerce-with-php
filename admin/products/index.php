<?php
include_once("../inc/table_inc/header.php");
// set the PDO error mode to exception
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\Products;

$_product = new Products;
$products = $_product->index();
?>
<div class="col-10">
  <div class="jumbotron">
    <h2 class="display-5 text-center font-italic"><a href="../contact/index.php" class="float-left ml-2"><img src="../../public/images/download.png" alt=""></a>Welcome to Product Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Products List</h4>
      <a href="create.php" class="btn btn-primary float-right">Create Product</a>
    </div>
    <?php if (isset($_SESSION['success'])) {
      $msg = $_SESSION['success']; ?>
      <div class="alert alert-secondary text-center" role="alert">
        <strong>Success! </strong><?php echo $msg; ?>
      </div>
    <?php } ?>

    <div class="card-body text-center">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Picture</th>
            <th scope="col">Sort Description</th>
            <th scope="col">Product Type</th>
            <th scope="col">cost</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($products) > 0) { ?>
            <?php foreach ($products as $product) : ?>
              <tr>
                <td><?php echo $product['title']; ?></td>
                <td><img src="<?php echo $webroot ?>uploads/product/<?= $product['picture'] ?>" alt="Product_img" width="150px" height="60px"></td>
                <td><?php echo $product['short_description']; ?></td>
                <td><?php echo $product['product_type']; ?></td>
                <td><?php echo $product['cost']; ?></td>
                <td style="width:220px;">
                  <a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-info">Edit</a>
                  <a href="show.php?id=<?php echo $product['id']; ?>" class="btn btn-success">View</a>
                  <a href="delete.php?id=<?php echo $product['id']; ?>" onclick="return confirm('Are You Sure!')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php } else { ?>
            <td colspan="5">You have not any data. Please, <a href="create.php" class="btn btn-primary">click here</a> to add one.</td>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <?php
    session_unset();
    include_once("../inc/table_inc/footer.php"); ?>