<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$query = "SELECT * FROM `sponsores` WHERE id = '$id' ";
$select_data = $db->select($query);
$data = $select_data->fetch_assoc();
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
  $title            = mysqli_real_escape_string($db->link, $_POST['title']);
  $link             = mysqli_real_escape_string($db->link, $_POST['link']);
  $msg              = mysqli_real_escape_string($db->link, $_POST['msg']);
  $html_banner      = mysqli_real_escape_string($db->link, $_POST['html_banner']);
  $banner_activate  = mysqli_real_escape_string($db->link, $_POST['banner_activate']);
  $draft_banner     = mysqli_real_escape_string($db->link, $_POST['draft_banner']);
  $query = "UPDATE `sponsores` SET 
                            `title`='$title',
                            `picture`='$uploaded_name',
                            `link`='$link',
                            `promotional_message`='$msg',
                            `html_banner`='$html_banner',
                            `is_active`='$banner_activate',
                            `is_draft`='$draft_banner'
                            WHERE id = '$id' ";
  $create_data = $db->edit($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
  <h2 class="display-5 text-center font-italic">Welcome to Sponsor Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Create Sponsor</h4>
      <a href="index.php" class="btn btn-primary float-right">Sponsor List</a>
    </div>
    <div class="card-body">
      <form action="update.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
        <div class="form-group">
          <label for="name">Title</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Title" name="title" value="<?php echo $data['title'];?>">
        </div>
        <div class="form-group">
          <label for="url">Url</label>
          <input type="url" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Enter Your Url" name="link" value="<?php echo $data['link'];?>">
        </div>
        <img src="<?php echo $data['picture'];?>" alt="" height="100px" width="200px">
        <div class="form-group">
          <label for="exampleFormControlFile1">Image</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img" value="<?php echo $data['picture'];?>">
        </div>
        <div class="form-group">
          <label for="Promotional_msg">Promotional Massage</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"><?php echo $data['promotional_message'];?></textarea>
        </div>
        <div class="form-group">
          <label for="html">HTML Banner</label>
          <input type="text" class="form-control" id="html" placeholder="Enter Your HTML Banner" name="html_banner" value="<?php echo $data['html_banner'];?>">
        </div>
        <div class="form-group">
          <label for="html">Activate Banner</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="banner_activate" id="banner_activate" value="1">
            <label class="form-check-label" for="exampleRadios2">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="banner_activate" id="banner_activate" value="0">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="html">Drat Banner</label>
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
    <?php include_once("../inc/table_inc/footer.php"); ?>