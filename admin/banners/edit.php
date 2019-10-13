<?php
include_once("../inc/table_inc/header.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/shop/config.php');

use Bitm\Banner;

$id = $_GET['id'];
$_banner = new Banner;
$data = $_banner->edit($id);
?>


<div class="col-10">
    <div class="jumbotron">
    <h2 class="display-5 text-center font-italic"><a href="../contact/index.php" class="float-left ml-2"><img src="../../public/images/download.png" alt=""></a>Welcome to Banner Control Panel</h2>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="float-left">Create Banner</h4>
            <a href="index.php" class="btn btn-primary float-right">Banner List</a>
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
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="url" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Enter Your Url" name="link" value="<?php echo $data['link']; ?>">
                </div>
                <img src="<?php echo $webroot ?>uploads/banner/<?= $data['picture'] ?>" alt="" height="100px" width="200px">
                <div class="form-group">
                    <label for="input-picture">Picture</label>
                    <input type="file" class="form-control-file" id="input-picture" name="picture" value="<?php echo $data['picture'] ?>">
                </div>
                <div class="form-group">
                    <label for="Promotional_msg">Promotional Massage</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"><?php echo $data['promotional_message']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="html">HTML Banner</label>
                    <input type="text" class="form-control" id="html" placeholder="Enter Your HTML Banner" name="html_banner" value="<?php echo $data['html_banner']; ?>">
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
                <div class="form-group">
                    <label for="html">Drat Banner</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_draft" id="is_draft" value="1">
                        <label class="form-check-label" for="exampleRadios2">
                            True
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_draft" id="is_draft" value="0">
                        <label class="form-check-label" for="exampleRadios2">
                            False
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <?php include_once('../inc/table_inc/footer.php'); ?>