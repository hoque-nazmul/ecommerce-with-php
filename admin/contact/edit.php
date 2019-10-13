<?php
include_once("../inc/table_inc/header.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\Contact;

$id = $_GET['id'];
$_contact = new Contact;
$data = $_contact->edit($id);

?>
<div class="col-10">
    <div class="jumbotron">
        <h2 class="display-5 text-center font-italic"><a href="index.php" class="float-left ml-2"><img src="../../public/images/download.png" alt=""></a>Welcome to Massage Control Panel</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="float-left">Relay Massage</h4>
            <a href="index.php" class="btn btn-primary float-right">Massages List</a>
        </div>
        <div class="card-body">
            <form action="update.php" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo $data['name']; ?>" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $data['email']; ?>" name="email">
                </div>
                <div class="form-group">
                    <label for="Promotional_msg">Replay</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment">hey <?php echo $data['name']; ?>,</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Replay</button>
            </form>
        </div>
        <?php include_once("../inc/table_inc/footer.php"); ?>