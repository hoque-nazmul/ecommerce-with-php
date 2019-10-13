<?php
include_once("lib/database.php");
include_once("../inc/table_inc/header.php");
$db = new Database();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$query = "SELECT * FROM `carts` WHERE id = '$id' ";
$select_data = $db->select($query);
$data = $select_data->fetch_assoc();
?>
<div class="col-10">
    <div class="jumbotron">
    <h2 class="display-5 text-center font-italic">Welcome to Cart Control Panel</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="float-left">Cart Data</h4>
            <a href="index.php" class="btn btn-primary float-right">Carts List</a>
        </div>
        <div class="card-body py-5" style="background: #E9ECEF;">
            <table class="table m-auto" style="max-width: 700px;">
                <tbody>
                    <tr>
                        <th scope="col">Product Title:</th>
                        <td scope="col"><?php echo $data['product_title']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Product Image:</th>
                        <td scope="col"><img src="<?php echo $data['picture'];?>" alt="" height="50px" width="100px"></td>
                    </tr>
                    <tr>
                        <th scope="col">Seller ID:</th>
                        <td scope="col"><?php echo $data['sId']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Product ID:</th>
                        <td scope="col"><?php echo $data['product_id']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Quantity:</th>
                        <td scope="col"><?php echo $data['qty']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Total Price:</th>
                        <td scope="col"><?php echo $data['total_price']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
<?php include_once("../inc/table_inc/footer.php"); ?>