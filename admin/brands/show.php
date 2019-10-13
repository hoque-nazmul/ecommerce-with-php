<?php
include_once("lib/database.php");
include_once("../inc/table_inc/header.php");
$db = new Database();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$query = "SELECT * FROM `brands` WHERE id = '$id' ";
$select_data = $db->select($query);
$data = $select_data->fetch_assoc();
?>
<div class="col-10">
    <div class="jumbotron">
    <h2 class="display-5 text-center font-italic">Welcome to Brand Control Panel</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="float-left">Brand Data</h4>
            <a href="index.php" class="btn btn-primary float-right">Brand List</a>
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