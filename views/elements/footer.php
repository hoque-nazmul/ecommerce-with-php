<div class="container-fluid footer-top bg-dark py-5">
    <div class="container">
        <div class="footer-wrap">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-item">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#"><span>Advanced Search</span></a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-item">
                        <h4>Why buy from us</h4>
                        <ul>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="faq.php">Customer Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="contact.php"><span>Site Map</span></a></li>
                            <li><a href="preview.php"><span>Search Terms</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-item">
                        <h4>My account</h4>
                        <ul>
                            <li><a href="contact.php">Sign In</a></li>
                            <li><a href="index.php">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="faq.php">Help</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-item">
                        <h4>Contact</h4>
                        <ul>
                            <li><span>+88-01632476125</span></li>
                            <li><span>+88-01632476125</span></li>
                        </ul>
                        <div class="social-icons">
                            <h4>Follow Us</h4>
                            <ul>
                                <li class="facebook"><a href="#" target="_blank"> </a></li>
                                <li class="twitter"><a href="#" target="_blank"> </a></li>
                                <li class="googleplus"><a href="#" target="_blank"> </a></li>
                                <li class="contact"><a href="#" target="_blank"> </a></li>
                                <div class="clear"></div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom pt-2 pb-1">
    <p class="text-white text-center">LocalHost &amp; All rights Reseverd </p>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        /*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function() {
        SyntaxHighlighter.all();
    });
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
</body>

</html>