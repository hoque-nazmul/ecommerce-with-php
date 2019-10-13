<!-- All CSS & JS file -->
<?php include_once("../views/elements/hrep.php"); ?>
<!-- Preloder Support -->
<?php include_once("../views/elements/preloder.php"); ?>
<!-- Header Support -->
<?php include_once("../views/elements/header.php"); ?>
<div class="container-fluid img-overlay top-img">
    <p class="text-center text-black"><a href="logout.php">Log Out</a></p>
</div>
<div class="container-fluid pt-5 mb-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">You Are Welcome</h4>
                </div>
                <div class="card-body py-5" style="background: #E9ECEF;">
                    <h2 class="display-3">Now, You are in CheckOut Page</h2>
                </div>
                <div class="card-footer">
                    <h4 class="text-center">Thanks For Your Journey</h4>
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