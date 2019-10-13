<?php
include_once("inc/header.php");
include_once("lib/database.php");
$db = new Database();
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $password = $_POST['password'];
  $phone    = $_POST['phone'];
  $query = "INSERT INTO `admins`(`name`, `email`, `password`, `phone`) 
                  VALUES ('$name', '$email', '$password', '$phone') ";
  $create_data = $db->create($query);
}
?>
      <div class="col-10">
        <div class="jumbotron">
        <h2 class="display-5 text-center font-italic"><a href="contact/index.php" class="float-left ml-2"><img src="../public/images/download.png" alt=""></a>Welcome to Admin Control Panel</h2>
        </div>
        <div class="card">
          <div class="card-header">
            <h4 class="float-left">Admins List</h4>
            <a href="index.php" class="btn btn-primary float-right">Admins List</a>
          </div>
          <div class="card-body">
            <form action="" method="post"  style="max-width: 860px; margin: 0 auto;">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name" name="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="emaail" class="form-control" id="email" placeholder="Enter Your Email" name="email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="emaail" class="form-control" id="password" placeholder="Enter Your Password" name="password">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" placeholder="Enter Your Phone Number" name="phone">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
<?php include_once('inc/footer.php');?>