<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name            = mysqli_real_escape_string($db->link, $_POST['name']);
  $soft_delete            = mysqli_real_escape_string($db->link, $_POST['soft_delete']);
  $draft_categories            = mysqli_real_escape_string($db->link, $_POST['draft_categories']);
  $query = "INSERT INTO `categories`(`name`, `soft_delete`, `is_draft`) VALUES ('$name', '$soft_delete ', '$draft_categories') ";
  $create_data = $db->create($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
  <h2 class="display-5 text-center font-italic">Welcome to Category Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Create Category</h4>
      <a href="index.php" class="btn btn-primary float-right">Category List</a>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Category Name" name="name">
        </div>
        <div class="form-group">
          <label for="html">Soft Delete</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="soft_delete" id="soft_delete" value="1">
            <label class="form-check-label" for="exampleRadios2">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="soft_delete" id="soft_delete" value="0">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="html">Draft Category</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="draft_categories" id="draft_categories" value="1">
            <label class="form-check-label" for="exampleRadios2">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="draft_categories" id="draft_categories" value="0">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php include_once("../inc/table_inc/footer.php"); ?>