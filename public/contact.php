<!-- All CSS & JS file -->
<?php include_once("../views/elements/hrep.php"); ?>
<!-- Preloder Support -->
<?php include_once("../views/elements/preloder.php"); ?>
<!-- Header Support -->
<?php include_once("../views/elements/header.php"); ?>
<div class="jumbotron mt-0">
	<h3>Live Support</h3>
	<p><span>24 hours | 7 days a week | 365 days a year &nbsp;&nbsp; Live Technical Support</span></p>
	<p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
</div>
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
						<form action="contactStore.php" method="post" style="max-width: 860px; margin: 0 auto;">
							<div class="form-group">
								<label class="ml-2" for="name">Name</label>
								<input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name" name="name">
							</div>
							<div class="form-group">
								<label class="ml-2" for="email">Email</label>
								<input type="email" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Enter Your Email" name="email">
							</div>
							<div class="form-group">
								<label class="ml-2" for="subjects">Subject</label>
								<input type="text" class="form-control" id="subjects" aria-describedby="emailHelp" placeholder="Enter Your Subject" name="subjects">
							</div>
							<div class="form-group">
								<label class="ml-2" for="Promotional_msg">Massage</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
							</div>
							<button type="submit" class="btn btn-primary py-2 px-4">Submit</button>
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