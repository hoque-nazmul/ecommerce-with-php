<?php
include_once("../inc/table_inc/header.php");
include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');

use Bitm\Contact;

$_id = $_GET['id'];
$_contact = new Contact;
$data = $_contact->show($_id);
?>
<div class="col-10">
    <div class="jumbotron">
    <h2 class="display-5 text-center font-italic"><a href="index.php" class="float-left ml-2"><img src="../../public/images/download.png" alt=""></a>Welcome to Massage Control Panel</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="float-left">Massage Data</h4>
            <a href="index.php" class="btn btn-primary float-right">Massages List</a>
        </div>
        <div class="card-body py-5" style="background: #E9ECEF;">
            <table class="table m-auto" style="max-width: 700px;">
                <tbody>
                    <tr>
                        <th scope="col">Name:</th>
                        <td scope="col"><?php echo $data['name']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Email:</th>
                        <td scope="col"><?php echo $data['email']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Subject:</th>
                        <td scope="col"><?php echo $data['subjects']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Comment:</th>
                        <td scope="col"><?php echo $data['comment']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Status:</th>
                        <td scope="col"><?php echo $data['status']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Soft Delete:</th>
                        <td scope="col"><?php echo $data['soft_delete']; ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Date:</th>
                        <td scope="col"><?php echo $data['date']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
<?php include_once("../inc/table_inc/footer.php"); ?>