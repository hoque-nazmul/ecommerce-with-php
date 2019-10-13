<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $permitted = ['jpg', 'png', 'jpeg', 'gif'];
  $img_name = $_FILES['img']['name'];
  $img_size = $_FILES['img']['size'];
  $img_tmp = $_FILES['img']['tmp_name'];
  $div_filename = explode('.',$img_name);
  $extention = strtolower(end($div_filename));
  $uploaded_name = substr(md5(time()), 0, 10).'.'.$extention;
  $uploaded_name = "uploads/".$uploaded_name;
  move_uploaded_file($img_tmp, $uploaded_name);
  $name            = mysqli_real_escape_string($db->link, $_POST['name']);
  $designation             = mysqli_real_escape_string($db->link, $_POST['designation']);
  $body             = mysqli_real_escape_string($db->link, $_POST['body']);
  $testimonial_activate  = mysqli_real_escape_string($db->link, $_POST['testimonial_activate']);
  $draft_testimonial     = mysqli_real_escape_string($db->link, $_POST['draft_testimonial']);
  $query = "INSERT INTO `testimona`(`name`, `picture`, `designation`, `body`, `is_active`, `is_draft`) VALUES ('$name', '$uploaded_name ', '$designation', '$body', '$testimonial_activate', '$draft_testimonial ') ";
  $create_data = $db->create($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
  <h2 class="display-5 text-center font-italic">Welcome to Testimonials Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Create Testimonial</h4>
      <a href="index.php" class="btn btn-primary float-right">Testimonial List</a>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name" name="name">
        </div>
        <div class="form-group">
          <label for="designation">Designation</label>
          <input type="text" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Enter Your Designation" name="designation">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Image</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
        </div>
        <div class="form-group">
          <label for="body">Massage</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
        </div>
        <div class="form-group">
          <label for="html">Activate Testimonial</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="testimonial_activate" id="testimonial_activate" value="1">
            <label class="form-check-label" for="exampleRadios2">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="testimonial_activate" id="testimonial_activate" value="0">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="html">Drat Testimonial</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="draft_testimonial" id="draft_testimonial" value="1">
            <label class="form-check-label" for="exampleRadios2">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="draft_testimonial" id="draft_testimonial" value="0">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php include_once("../inc/table_inc/footer.php"); ?>