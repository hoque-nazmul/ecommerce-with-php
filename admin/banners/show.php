<?php
include_once("../inc/table_inc/header.php");
include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');

use Bitm\Banner;

$_id = $_GET['id'];
$_banner = new Banner;
$data = $_banner->show($_id);
?>
<div class="col-10">
    <div class="jumbotron">
    <h2 class="display-5 text-center font-italic"><a href="../contact/index.php" class="float-left ml-2"><img src="../../public/images/download.png" alt=""></a>Welcome to Banner Control Panel</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="float-left">Banner Data</h4>
            <a href="index.php" class="btn btn-primary float-right">Banner List</a>
        </div>
        <div class="card-body py-5" style="background: #E9ECEF;">
            <table class="table m-auto" style="max-width: 700px;">
                <tbody>
                    <tr>
                        <th scope="col">Title:</th>
                        <td scope="col"><?php echo $data['title']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Link:</th>
                        <td scope="col"><?php echo $data['link']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Promotional Massage:</th>
                        <td scope="col"><?php echo $data['promotional_message']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Image:</th>
                        <td scope="col"><img src="<?php echo $webroot?>uploads/banner/<?= $data['picture'] ?>" alt="" height="80px" width="200px"></td>
                    </tr>
                    <tr>
                        <th scope="col">Created Time:</th>
                        <td scope="col"><?php echo $data['created_at']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Modified Time:</th>
                        <td scope="col"><?php echo $data['modified_at']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Activate Banner:</th>
                        <td scope="col"><?php echo $data['is_active']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Draft Banner:</th>
                        <td scope="col"><?php echo $data['is_draft']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
<?php include_once('../inc/table_inc/footer.php'); ?>