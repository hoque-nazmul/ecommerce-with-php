<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $title            = mysqli_real_escape_string($db->link, $_POST['title']);
  $link             = mysqli_real_escape_string($db->link, $_POST['link']);
  $banner_activate  = mysqli_real_escape_string($db->link, $_POST['banner_activate']);
  $draft_banner     = mysqli_real_escape_string($db->link, $_POST['draft_banner']);
  $query = "INSERT INTO `brands`(`title`, `link`, `is_active`, `is_draft`) VALUES ('$title', '$link', '$banner_activate', '$draft_banner ') ";
  $create_data = $db->create($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
  <h2 class="display-5 text-center font-italic">Welcome to Brand Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Create Brand</h4>
      <a href="index.php" class="btn btn-primary float-right">Brands List</a>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
        <div class="form-group">
          <label for="name">Title</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Title" name="title">
        </div>
        <div class="form-group">
          <label for="url">Url</label>
          <input type="url" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Enter Your Url" name="link">
        </div>
        <div class="form-group">
          <label for="html">Activate Brand</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="banner_activate" id="banner_activate" value="1">
            <label class="form-check-label" for="exampleRadios2">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="banner_activate" id="banner_activate" value="2">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="html">Drat Brand</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="draft_banner" id="draft_banner" value="1">
            <label class="form-check-label" for="exampleRadios2">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="draft_banner" id="draft_banner" value="0">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php include_once('../inc/table_inc/footer.php'); ?>