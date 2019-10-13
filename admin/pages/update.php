<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$query = "SELECT * FROM `page` WHERE id = '$id' ";
$select_data = $db->select($query);
$data = $select_data->fetch_assoc();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $title            = mysqli_real_escape_string($db->link, $_POST['title']);
  $link             = mysqli_real_escape_string($db->link, $_POST['link']);
  $msg              = mysqli_real_escape_string($db->link, $_POST['msg']);
  $query = "UPDATE `page` SET 
                            `title`='$title',
                            `link`='$link',
                            `description`='$msg'
                            WHERE id = '$id' ";
  $create_data = $db->edit($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
  <h2 class="display-5 text-center font-italic">Welcome to Page Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Update Page</h4>
      <a href="index.php" class="btn btn-primary float-right">Page List</a>
    </div>
    <div class="card-body">
      <form action="update.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
        <div class="form-group">
          <label for="name">Title</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="title" value="<?php echo $data['title'];?>">
        </div>
        <div class="form-group">
          <label for="url">Url</label>
          <input type="url" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Enter Your Url" name="link" value="<?php echo $data['link'];?>">
        </div>
        <div class="form-group">
          <label for="Promotional_msg">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"><?php echo $data['description'];?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php include_once("../inc/table_inc/footer.php"); ?>