<?php
include_once("../inc/table_inc/header.php");
include_once("lib/database.php");
$db = new Database();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$query = "SELECT * FROM `subscribers` WHERE id = '$id' ";
$select_data = $db->select($query);
$data = $select_data->fetch_assoc();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email            = mysqli_real_escape_string($db->link, $_POST['email']);
  $reason              = mysqli_real_escape_string($db->link, $_POST['reason']);
  $is_subscribed     = mysqli_real_escape_string($db->link, $_POST['is_subscribed']);
  $query = "UPDATE `subscribers` SET 
                            `email`='$email',
                            `reason`='$reason',
                            `is_subscribed`='$is_subscribed'
                            WHERE id = '$id' ";
  $create_data = $db->edit($query);
}
?>
<div class="col-10">
  <div class="jumbotron">
  <h2 class="display-5 text-center font-italic">Welcome to Subscriber Control Panel</h2>
  </div>
  <div class="card">
    <div class="card-header">
      <h4 class="float-left">update Subscriber</h4>
      <a href="index.php" class="btn btn-primary float-right">Subscriber List</a>
    </div>
    <div class="card-body">
      <form action="update.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" style="max-width: 860px; margin: 0 auto;">
      <div class="form-group">
          <label for="name">Email</label>
          <input type="email" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Email" name="email" value="<?php echo $data['email'];?>">
        </div>
        <div class="form-group">
          <label for="reason">Reason</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reason"><?php echo $data['reason'];?></textarea>
        </div>
        <div class="form-group">
          <label for="html">Is Subscribed</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="is_subscribed" id="is_subscribed" value="1">
            <label class="form-check-label" for="exampleRadios2">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="is_subscribed" id="is_subscribed" value="0">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php include_once("../inc/table_inc/footer.php"); ?>