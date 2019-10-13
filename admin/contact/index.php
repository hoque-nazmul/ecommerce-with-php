<?php 
 include_once("../inc/table_inc/header.php");
 // set the PDO error mode to exception
 include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');
 
 use Bitm\Contact;
 
 $_contact = new Contact;
 $contacts = $_contact->index();
?>
      <div class="col-10">
        <div class="jumbotron">
        <h2 class="display-5 text-center font-italic"><a href="index.php" class="float-left ml-2"><img src="../../public/images/download.png" alt=""></a>Welcome to Massage Control Panel</h2>
        </div>
        <div class="card">
          <div class="card-header">
            <h4 class="float-left">Massages List</h4>
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
                  <th scope="col">Email</th>
                  <th scope="col">Subjects</th>
                  <th scope="col">Comments</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php if(count($contacts)> 0){ ?>
                <?php foreach($contacts as $contact):?>
                <tr>
                  <td><?php echo $contact['name'];?></td>
                  <td><?php echo $contact['email'];?></td>
                  <td><?php echo $contact['subjects'];?></td>
                  <td><?php echo $contact['comment'];?></td>
                  <td><?php echo $contact['date'];?></td>
                  <td style="width:220px;">
                    <a href="edit.php?id=<?php echo $contact['id'];?>" class="btn btn-info" style="padding: 8px !important;">Replay</a>
                    <a href="show.php?id=<?php echo $contact['id'];?>" class="btn btn-success" style="padding: 8px !important;">Show</a>
                    <a href="delete.php?id=<?php echo $contact['id'];?>" onclick="return confirm('Are You Sure!')" class="btn btn-danger" style="padding: 8px !important;">Delete</a>
                  </td>
                </tr>
                <?php endforeach;?>
                <?php }else{?>
                  <td colspan="5">You have not any data. Please, <a href="create.php" class="btn btn-primary">click here</a> to add one.</td>
                <?php }?>
              </tbody>
            </table>
          </div>
 <?php 
session_unset();
include_once("../inc/table_inc/footer.php");?>