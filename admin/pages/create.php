<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $title            = mysqli_real_escape_string($db->link, $_POST['title']);
  $link             = mysqli_real_escape_string($db->link, $_POST['link']);
  $msg              = mysqli_real_escape_string($db->link, $_POST['msg']);
  $query = "INSERT INTO `page`(`title`, `link`, `description`) VALUES ('$title', '$link ', '$msg') ";
  $create_data = $db->create($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
  <h2 class="display-5 text-center font-italic">Welcome to Page Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Create page</h4>
      <a href="index.php" class="btn btn-primary float-right">page List</a>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
        <div class="form-group">
          <label for="name">Title</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Page Title" name="title">
        </div>
        <div class="form-group">
          <label for="url">Url</label>
          <input type="url" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Enter Page Url" name="link">
        </div>
        <div class="form-group">
          <label for="Promotional_msg">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php include_once("../inc/table_inc/footer.php"); ?>