<?php 
  include_once("lib/database.php");
  include_once("../inc/table_inc/header.php");
  $db = new Database();
  $query = "SELECT * FROM `popular_tag` ";
  $select_data = $db->select($query);
?>
      <div class="col-10">
        <div class="jumbotron">
        <h2 class="display-5 text-center font-italic">Welcome to Popular Tag Control Panel</h2>
        </div>
        <div class="card">
          <div class="card-header">
            <h4 class="float-left">Popular Tag List</h4>
            <a href="create.php" class="btn btn-primary float-right">Create Popular Tag</a>
          </div>
          <?php if(isset($_SESSION['success'])){
            $msg = $_SESSION['success'];?>
            <div class="alert alert-secondary text-center" role="alert">
                <strong>Success! </strong><?php echo $msg;?>
            </div>
          <?php }?>
          
          <div class="card-body text-center">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Link</th>
                  <th scope="col">Activate Popular Tag</th>
                  <th scope="col">Delete Popular Tag</th>
                  <th scope="col">Created Time</th>
                  <th scope="col">Modified Time</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if($select_data){ ?>
                <?php while($data = $select_data->fetch_assoc()){?>
                <tr>
                  <td><?php echo $data['name'];?></td>
                  <td><?php echo $data['link'];?></td>
                  <td><?php echo $data['is_active'];?></td>
                  <td><?php echo $data['is_delete'];?></td>
                  <td><?php echo $data['created_at'];?></td>
                  <td><?php echo $data['modified_at'];?></td>
                  <td style="width:220px;">
                    <a href="update.php?id=<?php echo $data['id'];?>" class="btn btn-info">Edit</a>
                    <a href="show.php?id=<?php echo $data['id'];?>" class="btn btn-success">View</a>
                    <a href="delete.php?id=<?php echo $data['id'];?>" onclick="return confirm('Are You Sure!')" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php }?>
                <?php }else{?>
                  <td colspan="5">You have not any data. Please, <a href="create.php" class="btn btn-primary">click here</a> to add one.</td>
                <?php }?>
              </tbody>
            </table>
          </div>
 <?php 
session_unset();
include_once("../inc/table_inc/footer.php");?>