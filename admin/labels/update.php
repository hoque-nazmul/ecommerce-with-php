<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$query = "SELECT * FROM `labels` WHERE id = '$id' ";
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
  $query = "UPDATE `labels` SET 
                            `title`='$title',
                            `picture`='$uploaded_name'
                            WHERE id = '$id' ";
  $create_data = $db->edit($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
    <h2 class="display-5 text-center font-italic">Welcome to Label Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">Update Label</h4>
      <a href="index.php" class="btn btn-primary float-right">Label List</a>
    </div>
    <div class="card-body">
      <form action="update.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
        <div class="form-group">
          <label for="name">Title</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Title" name="title" value="<?php echo $data['title'];?>">
        </div>
        <img src="<?php echo $data['picture'];?>" alt="" height="100px" width="200px">
        <div class="form-group">
          <label for="exampleFormControlFile1">Image</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img" value="<?php echo $data['picture'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php include_once("../inc/table_inc/footer.php"); ?>