<?php 
/**
 * Theme Footer Section for our theme.
 * 
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>
<!-- 
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head> -->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		.iconbox-left {
			margin-bottom: 24px;
		}
		.iconbox-left .icon {
			float: left;
			font-size: 18px;
			line-height: 21px;
		}
		.iconbox-left .content {
			margin-left: 28px;
			font-size: 14px;
			line-height: 21px;
		}

		.featured-deals {
			margin-bottom: 48px;
		}
		.featured-deals a:hover {
			opacity: 1;
		}
		.featured-deals h5 {
			float: left;
			font-size: 3vmin !important;
			line-height: 10px;
			margin-bottom: 18px;
			-webkit-transition: .25s;
			-moz-transition: .25s;
			-o-transition: .25s;
			-ms-transition: .25s;
			transition: .25s;
		}
		.featured-deals .price {
			float: right;
			color: #09a0f7;
			font-size: 18px;
			line-height: 21px;
			-webkit-transition: .25s;
			-moz-transition: .25s;
			-o-transition: .25s;
			-ms-transition: .25s;
			transition: .25s;
		}
		.featured-deals a:hover h5, .featured-deals a:hover .price {
			opacity: .75;
		}




		button, input {
		    line-height: 2;
		    border-color: transparent;
		}
		input[type="text"], input[type="email"], textarea{
			border: none;
		}

		#footer-section-1 p{
			text-align: left !important;
		}
		#footer-section-1 h5{
			font-size: 4vmin;
			color: #fff !important;
			text-align: left;
			margin-bottom: 32px;
		}
		#footer-section-1 > div > div{
			padding: 2vmin 8vmin;
		}

		.txt-div{
			margin-bottom: 5px;
		}
		.txt-div .txt-form-zp{
			background-color: #0A2342;
		}
		input[type="submit"]{
			width: 100%;
		}


	</style>
</head>
<body>





			<section class="section-3" style="padding: 10px 0; background-color: #194273; color:#fff !important; width: 100%; position: relative; z-index: -3;" id="footer-section-1">


				<div class="container row">
						<div class="col-sm-4">
							<h5>About Us</h5>
							<p>Lorem ipsum dolor sit amet, consectetur  some dymm adipiscing elit. Nam turpis quam, sodales in text she ante sagittis, varius efficitur mauris.</p>
							<hr />
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-envelope"></i></div> 
								<div class="content"><p>info@zapcg.com</p></div> 
							</div> 
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-phone"></i></div> 
								<div class="content"><p>+91-80-67232300 (INDIA)</p></div> 
							</div>
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-phone"></i></div> 
								<div class="content"><p>+1-925-350-7003 (US)</p></div> 
							</div> 
						</div> 
						<div class="col-sm-4">
							<h5>Find Us</h5>
							<div class="featured-deals">
								<h5>India</h5>
								<a href="https://www.google.co.in/maps/place/ZapCom+Solutions+Pvt.+Ltd./@12.9582437,77.7440884,19z/data=!3m1!4b1!4m2!3m1!1s0x3bae1209e51adb23:0xea6d95546faad59?hl=en" target="_blank" class="clearfix">
									<span class="price">VIEW MAP</span>
								</a>
								<div class="iconbox-left">
									<div class="icon"><i class="fa fa-map-marker"></i></div> 
									<div class="content"><p>9th Floor, Gamma Tower, Sigma Soft Tech Park, Whitefield, Bangalore, 560066</p></div> 
								</div> 
							</div> 
							<div class="featured-deals">
								<h5>USA</h5>
								<a href="https://www.google.co.in/maps/place/5976+W+Las+Positas+Blvd+%23216a,+Pleasanton,+CA+94588,+USA/@37.6814667,-121.9015896,17z/data=!3m1!4b1!4m2!3m1!1s0x808fe95ff8cc3e8b:0xc5ac5012be63bea3" target="_blank" class="clearfix">
									<span class="price">VIEW MAP</span>
								</a>
								<div class="iconbox-left">
									<div class="icon"><i class="fa fa-map-marker"></i></div> 
									<div class="content"><p>Pleasanton, San Francisco, California</p></div> 
								</div> 
							</div>
						</div> 
						<div class="col-sm-4">
							<h5>Contact Us</h5>
							<form class="form-cnt" form action="<?php bloginfo('template_url'); ?>/mail/contact_mail.php" method="post" enctype="multipart/form-data">
							    <div class="txt-div full"><input type="text" class="txt-form-zp" placeholder="NAME" required="required" pattern="[a-zA-Z ]+" name="name" oninvalid="setCustomValidity('Your name should contain alphabets only')" onchange="try{setCustomValidity('')}catch(e){}" style="width: 99%;"> </div>
							    <div class="txt-div full"><input type="email" class="txt-form-zp" placeholder="EMAIL" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" oninvalid="setCustomValidity('Please enter a valid Email ID. E.g: john@yahoo.com')" onchange="try{setCustomValidity('')}catch(e){}" style="width: 99%;"> </div>
							    <div class="txt-div full"> <textarea rows="5" type="text" class="txt-form-zp" placeholder="MESSAGE" required="required" name="needs"  maxlength="250" oninvalid="setCustomValidity('Please share more details about your needs')" onchange="try{setCustomValidity('')}catch(e){}" style="width:99%;"></textarea> </div>
							    	<div class="txt-div full"> <input type="submit" class="tech-sec4-cnct" value="Send Message" name="submit">  </div>
							    </form>
						</div>
				</div>
			</section>






<section class="copy-rt" style="padding: 10px 0;">
	<div class="container row">
		<div class="col-md-12 col-sm-12 col-xs-12 footer_copyright footer-col">
			<div class="copy-cnt" style="padding-top:0.5vmin;">  © 2015 Zapcom Group. All Right Reserved  |<a href="http://localhost/zapcg1/index.php/policy/">  Privacy Policy </a></div>
		</div>
	</div>
</section>


</div> <!-- wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
jQuery(document).ready(function() {
    var offset = 250;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
   
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
</script>
<div id="gotoTop" class="back-to-top fa fa-chevron-up fa-1x"></div>



<?php wp_footer(); ?>

</body>
</html>