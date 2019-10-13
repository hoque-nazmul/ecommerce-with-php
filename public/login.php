<!-- All CSS & JS file -->
<?php include_once("../views/elements/hrep.php"); ?>
<!-- Preloder Support -->
<?php include_once("../views/elements/preloder.php"); ?>
<!-- Header Support -->
<?php include_once("../views/elements/header.php"); ?>

<div class="container-fluid pt-5 mb-5">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-md-8">
				<?php if (isset($_SESSION['success'])) {
					$msg = $_SESSION['success']; ?>
					<div class="alert alert-secondary text-center" role="alert">
						<strong>Success! </strong><?php echo $msg; ?>
					</div>
				<?php } ?>
				<?php if (isset($_SESSION['error'])) {
					$msg = $_SESSION['error']; ?>
					<div class="alert alert-danger text-center" role="alert">
						<strong>Error! </strong><?php echo $msg; ?>
					</div>
				<?php } ?>
				<div class="card">
					<div class="card-header">
						<h4 class="text-center">Contact Us</h4>
					</div>
					<div class="card-body text-left">
						<form action="conLog.php" method="post" style="max-width: 860px; margin: 0 auto;">
							<div class="form-group">
								<label class="ml-2" for="email">Email</label>
								<input type="email" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Enter Your Email" name="email">
							</div>
							<div class="form-group">
								<label class="ml-2" for="subjects">Password</label>
								<input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="***********" name="password">
							</div>
							<button type="submit" class="btn btn-primary py-2 px-4">Submit</button>
							<span style="margin-left: 5px; "><strong>Create an Account</strong><a href="signup.php" class="btn btn-info" style="margin-left: 4px">Sign Up</a></span>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<img src="images/contact.png" alt="" />
				<div class="company_address">
					<h2>Company Information :</h2>
					<p>500 Lorem Ipsum Dolor Sit,</p>
					<p>22-56-2-9 Sit Amet, Lorem,</p>
					<p>USA</p>
					<p>Phone:(00) 222 666 444</p>
					<p>Fax: (000) 000 00 00 0</p>
					<p>Email: <span>info@mycompany.com</span></p>
					<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Home Products Index Support -->
<?php 
session_unset();
include_once("../views/elements/footer.php"); ?>