<?php 
include_once("../inc/table_inc/header.php");
// set the PDO error mode to exception
include_once ($_SERVER['DOCUMENT_ROOT']. '/shop/config.php');

use Bitm\Banner;

$_banner = new Banner;
$banners = $_banner->index();
?>
      <div class="col-10">
        <div class="jumbotron">
        <h2 class="display-5 text-center font-italic"><a href="../contact/index.php" class="float-left ml-2"><img src="../../public/images/download.png" alt=""></a> Welcome to Banner Control Panel</h2>
        </div>
        <div class="card">
          <div class="card-header">
            <h4 class="float-left">Banners List</h4>
            <a href="create.php" class="btn btn-primary float-right">Create Banner</a>
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
                  <th scope="col">Title</th>
                  <th scope="col">Picture</th>
                  <th scope="col">Promo Msg</th>
                  <th scope="col">HTML Banner</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if(count($banners)> 0){ ?>
                <?php foreach($banners as $banner):?>
                <tr>
                  <td><?php echo $banner['title'];?></td>
                  <td><img src="<?php echo $webroot?>uploads/banner/<?= $banner['picture'] ?>" alt="" height="60px" width="150px"></td>
                  <td><?php echo $banner['promotional_message'];?></td>
                  <td><?php echo $banner['html_banner'];?></td>
                  <td style="width:220px;">
                    <a href="edit.php?id=<?php echo $banner['id'];?>" class="btn btn-info">Edit</a>
                    <a href="show.php?id=<?php echo $banner['id'];?>" class="btn btn-success">View</a>
                    <a href="delete.php?id=<?php echo $banner['id'];?>" onclick="return confirm('Are You Sure!')" class="btn btn-danger">Delete</a>
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
 include_once('../inc/table_inc/footer.php');?>