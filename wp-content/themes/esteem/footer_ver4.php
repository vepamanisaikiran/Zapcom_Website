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
		#footer_splash_parent{
			padding:0px;
			/*position: absolute;*/
			margin-top: -40px;
		}
		#footer_splash{
			background-image: url('/zapcg/wp-content/themes/esteem/images/footer.image.png');
		    height: 40px;
		    background-size: 45% 100%;
		    padding: 0px;
		}


		.iconbox-left {
			margin-bottom: 1px;
		}
		.iconbox-left .icon {
			float: left;
			font-size: 18px;
			line-height: 21px;
		}
		.iconbox-left .content {
			margin-left: 28px;
			font-size: 12px;
			line-height: 21px;
		}

		.featured-deals {
			margin-bottom: 24px;
		}
		@media screen and (min-width: 767px){
			.featured-deals:last-child {
				margin-bottom: 1px;
			}
		}
		.featured-deals a:hover {
			opacity: 1;
		}
		.featured-deals h5 {
			float: left;
			/*font-size: 3vmin !important;*/
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
			font-size: 15px;
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




		
		#footer-section-1 p{
			text-align: left !important;
			font-size: 12px;
		}
		#footer-section-1 h5{
			/*font-size: 4vmin;*/
			color: #fff !important;
			text-align: left;
			/*margin-bottom: 20px;*/
			margin-top: 10px;
		}
		i.fa{
			color: #fff !important;
		}

		.footer_icon{
			font-size: 15px;
			color: #fff;
		}
		.footer_icon_social{
			font-size: 20px;
			color: #fff;
		}


	</style>
</head>
<body>



	<!-- <section class="section-3" id="footer_splash_sec">
		
	</section> -->

	<!-- <img src="<?php bloginfo('template_directory'); ?>/images/footer.image.png"/> -->
	<section class="section-3" style="padding-top: 10px; background-color: transparent; color:#fff !important; width: 100%; position: relative; z-index: -3; padding-bottom: 0px;" id="footer-section-1">

		<div id="footer_splash_parent">
			<div id="footer_splash"></div>
		</div>

		<div class="container row" style="background-color: #194273;">
			<div class="col-sm-4">
				<h5 style="margin-bottom: 20px;">About Us</h5>
				<p>
					We are a software product and services company with a team of passionate technologists. Our innovative and disruptive approach delivers best-in-class Travel and Hospitality solutions to take-on toughest challenges.
				</p>
							
			</div> 
			<div class="col-sm-8"  >
				<h5>Find Us</h5>
				<div class="row">
					<div class="col-sm-6">
						<div class="featured-deals">
							<h5 style="font-size: 16px; width:100%;">India</h5>
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-map-marker"></i></div> 
								<div class="content"><p>9th Floor, Gamma Tower, Sigma Soft Tech Park, Whitefield, Bangalore - 560066</p></div> 
							</div>
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-phone"></i></div> 
								<div class="content">
									<p>
										+91-80-67232300 (INDIA) 
										<a href="https://www.google.co.in/maps/place/ZapCom+Solutions+Pvt.+Ltd./@12.9582437,77.7440884,19z/data=!3m1!4b1!4m2!3m1!1s0x3bae1209e51adb23:0xea6d95546faad59?hl=en" target="_blank" >
											<!-- <i class="fa fa-map" style="float:right;"></i> -->
											<img src="<?php bloginfo('template_directory'); ?>/images/mapicon.png" style="width: 20px; height: 20px; float:right; margin-right: 20%;"/>
										</a>
									</p>
								</div> 
							</div> 
						</div> 
					</div>
					<div class="col-sm-6"  >
						<div class="featured-deals">
							<h5 style="font-size: 16px; width:100%">USA</h5>
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-map-marker"></i></div> 
								<div class="content"><p>7033 Village Parkway, Ste.211, Dublin, California - CA 94568</p></div> 
							</div> 
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-phone"></i></div> 
								<div class="content">
									<p>
										+1-925-350-7003 (US) 
										<a href="https://www.google.co.in/maps/place/5976+W+Las+Positas+Blvd+%23216a,+Pleasanton,+CA+94588,+USA/@37.6814667,-121.9015896,17z/data=!3m1!4b1!4m2!3m1!1s0x808fe95ff8cc3e8b:0xc5ac5012be63bea3" target="_blank">
											<img src="<?php bloginfo('template_directory'); ?>/images/mapicon.png" style="width: 20px; height: 20px; float:right; margin-right: 20%;"/>
											<!-- <i class="fa fa-map" style="float:right;"></i> -->
										</a>
									</p>
								</div> 
							</div> 
						</div>
					</div>
				</div>
			</div> 
		</div>

		<!-- <hr style="width: 95%;
		    color: rgb(21, 57, 101);
		    height: 3px;
		    border-color: #153965;
		    margin: 10px auto;
		    background-color: #153965;"/> -->

		
	</section>



<section class="copy-rt" style="padding: 10px 0; background-color: #07264C;">
	<div class="container row">

		<div class="col-md-3 col-sm-3 col-xs-12 footer-col">
			
			<div class=" footer_mail">
					<!--<span class="fa fa-envelope-o footer_icon_color fa-2x"> </span>-->
					
					<span class=footer_mail_text>
						<a href="mailto:info@zapcg.com" class="footer_text_color" style="font-size: 12px !important;">
							<span>&nbsp;&nbsp;&nbsp;<!-- <span style="font-weight: 500 !important; font-size:2.5vmin; font-family:'ralewaybold';">Contact us:</span> --> &nbsp; <i class="fa fa-envelope footer_icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;info@zapcg.com</span>
						</a>
					</span>
				</div>
		</div>
		

		<div class="col-md-6 col-sm-6 col-xs-12 footer_copyright footer-col">
			<div class="copy-cnt" style="padding-top:0.5vmin;">  © 2015 Zapcom Group. All Right Reserved  |<a href="http://localhost/zapcg1/index.php/policy/">  Privacy Policy </a></div>
		</div>
		
		<div class="col-md-3 col-sm-3 col-xs-12 footer_social footer-col">
			
				<a href="https://www.facebook.com/ZapComGroup" target="_blank"> <span class="fa fa-facebook footer_icon_social"> </span></a>
			
				<a href="https://twitter.com/ZapcomGroup" target="_blank"><span class="fa fa-twitter footer_icon_social"> </span></a>
			
				<a href="https://plus.google.com/u/0/118211239488417595604/about" target="_blank"><span class="fa fa-google-plus  footer_icon_social"> </span></a>
			
				<a href="https://www.linkedin.com/company/zapcom-solutions-pvt-ltd-" target="_blank"><span class="fa fa-linkedin  footer_icon_social"> </span></a>
			
					
					
		</div>
	

	</div>
</section>


<!--<section class="copy-rt" style="padding: 10px 0; background-color: #07264C;">
	<div class="container row">
		<div class="col-md-12 col-sm-12 col-xs-12 footer_copyright footer-col">
			<div class="copy-cnt" style="padding-top:0.5vmin;">  © 2015 Zapcom Group. All Right Reserved  |<a href="http://localhost/zapcg1/index.php/policy/">  Privacy Policy </a></div>
		</div>
	</div>
</section>-->


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