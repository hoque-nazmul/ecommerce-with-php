<?php
include_once("../inc/table_inc/header.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\Products;

$id = $_GET['id'];
$_product = new Products;
$data = $_product->edit($id);

?>
<div class="col-10">
    <div class="jumbotron">
        <h2 class="display-5 text-center font-italic"><a href="../contact/index.php" class="float-left ml-2"><img src="../../public/images/download.png" alt=""></a>Welcome to Product Control Panel</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="float-left">Update Product</h4>
            <a href="index.php" class="btn btn-primary float-right">Product List</a>
        </div>
        <div class="card-body">
            <form action="update.php" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Title" name="title" value="<?php echo $data['title']; ?>">
                </div>
                <img src="<?php echo $webroot ?>uploads/product/<?= $data['picture'] ?>" alt="" height="100px" width="200px">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="picture" value="<?php echo $data['picture']; ?>">
                </div>
                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <input type="text" class="form-control" id="short_description" aria-describedby="emailHelp" placeholder="Enter Your Short Description" name="short_description" value="<?php echo $data['short_description']; ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?php echo $data['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="total_sales">Total Sales</label>
                    <input type="number" class="form-control" id="html" placeholder="Enter Your Total Sales" name="total_sales" value="<?php echo $data['total_sales']; ?>">
                </div>
                <div class="form-group">
                    <label for="status">Product Type</label>
                    <select class="form-control" id="status" name="product_type">
                        <option selected>Select Product Type</option>
                        <option value="feature">FEATURE PRODUCTS</option>
                        <option value="new">NEW PRODUCTS</option>
                        <option value="most">MOST WANTED</option>
                        <option value="scarf">SCARFS</option>
                        <option value="onSale">ON SALE</option>
                        <option value="product_tech">LATEST FROM TECH PRODUCTS</option>
                        <option value="product_ladies">LATEST FROM LADIES DRESS</option>
                        <option value="brandShoe">SMART SHOES</option>
                        <option value="brandLadies">SMART LADIES DRESS</option>
                        <option value="brandtech">LATEST TECHNOLOGY ITEM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cost">Cost</label>
                    <input type="number" step="0.01" class="form-control" id="html" placeholder="Enter Your Cost" name="cost" value="<?php echo $data['cost']; ?>">
                </div>
                <div class="form-group">
                    <label for="mrp">MRP</label>
                    <input type="number" step="0.01" class="form-control" id="html" placeholder="Enter Your MRP" name="mrp" value="<?php echo $data['mrp']; ?>">
                </div>
                <div class="form-group">
                    <label for="special_price">Special Price</label>
                    <input type="number" step="0.01" class="form-control" id="html" placeholder="Enter Your Special Price" name="special_price" value="<?php echo $data['special_price']; ?>">
                </div>
                <div class="form-group">
                    <label for="html">Activate Banner</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active" value="1">
                        <label class="form-check-label" for="exampleRadios2">
                            True
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active" value="0">
                        <label class="form-check-label" for="exampleRadios2">
                            False
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <?php include_once("../inc/table_inc/footer.php"); ?>