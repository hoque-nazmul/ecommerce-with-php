<?php
include_once("../inc/table_inc/header.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\Products;

$_id = $_GET['id'];
$_product = new Products;
$data = $_product->show($_id);
?>
<div class="col-10">
    <div class="jumbotron">
        <h2 class="display-5 text-center font-italic"><a href="../contact/index.php" class="float-left ml-2"><img src="../../public/images/download.png" alt=""></a>Welcome to Product Control Panel</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="float-left">Product Data</h4>
            <a href="index.php" class="btn btn-primary float-right">Product List</a>
        </div>
        <div class="card-body py-5" style="background: #E9ECEF;">
            <table class="table m-auto" style="max-width: 700px;">
                <tbody>
                    <tr>
                        <th scope="col">Title:</th>
                        <td scope="col"><?php echo $data['title']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Image:</th>
                        <td scope="col"><img src="<?php echo $webroot ?>uploads/product/<?= $data['picture'] ?>" alt="" height="50px" width="100px"></td>
                    </tr>
                    <tr>
                        <th scope="col">Short Description:</th>
                        <td scope="col"><?php echo $data['short_description']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Description:</th>
                        <td scope="col"><?php echo $data['description']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Product Type:</th>
                        <td scope="col"><?php echo $data['product_type']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Total Price:</th>
                        <td scope="col"><?php echo $data['total_sales']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Cost:</th>
                        <td scope="col"><?php echo $data['cost']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">MRP:</th>
                        <td scope="col"><?php echo $data['mrp']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Is Active:</th>
                        <td scope="col"><?php echo $data['is_active']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Created Time:</th>
                        <td scope="col"><?php echo $data['created_at']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Modified Time:</th>
                        <td scope="col"><?php echo $data['modified_at']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php include_once('inc/footer.php'); ?>