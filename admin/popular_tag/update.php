<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$query = "SELECT * FROM `popular_tag` WHERE id = '$id' ";
$select_data = $db->select($query);
$data = $select_data->fetch_assoc();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name            = mysqli_real_escape_string($db->link, $_POST['name']);
  $link             = mysqli_real_escape_string($db->link, $_POST['link']);
  $tag_activate      = mysqli_real_escape_string($db->link, $_POST['tag_activate']);
  $delete_tag  = mysqli_real_escape_string($db->link, $_POST['delete_tag']);
  $draft_tag     = mysqli_real_escape_string($db->link, $_POST['draft_tag']);
  $query = "UPDATE `popular_tag` SET 
                            `name`='$name',
                            `link`='$link',
                            `is_active`='$tag_activate',
                            `is_delete`='$delete_tag',
                            `is_draft`='$draft_tag'
                            WHERE id = '$id' ";
  $create_data = $db->edit($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
  <h2 class="display-5 text-center font-italic">Welcome to Popular Tag Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Update Popular Tag</h4>
      <a href="index.php" class="btn btn-primary float-right">Popular Tag List</a>
    </div>
    <div class="card-body">
      <form action="update.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name" name="name" value="<?php echo $data['name'];?>">
        </div>
        <div class="form-group">
          <label for="url">Url</label>
          <input type="url" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Enter Your Url" name="link"  value="<?php echo $data['link'];?>">
        </div>
        <div class="form-group">
          <label for="html">Activate Popular Tag</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tag_activate" id="tag_activate" value="1">
            <label class="form-check-label" for="exampleRadios2">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tag_activate" id="tag_activate" value="2">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="html">Delete Popular Tag</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="delete_tag" id="delete_tag" value="1">
            <label class="form-check-label" for="exampleRadios2">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="delete_tag" id="delete_tag" value="0">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="html">Drat Popular Tag</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="draft_tag" id="draft_tag" value="1">
            <label class="form-check-label" for="exampleRadios2">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="draft_tag" id="draft_tag" value="0">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php include_once("../inc/table_inc/footer.php"); ?>