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
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/footer_style.css">
</head>
<body>
	<!-- <img src="<?php bloginfo('template_directory'); ?>/images/footer.image.png"/> -->
    <section class="foot_sec" id="footer-section-1">
	<div >

		<div id="footer_splash_parent">
			<div id="footer_splash"></div>
		</div>

		<div class=" row" id="upper_sec">
			<div class="col-sm-12"  >
				<!-- <h5>Find Us</h5> -->
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-4">
						<div class="featured-deals">
							<h5>India</h5>
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-map-marker"></i></div> 
								<div class="content"><p style="color:white !important;">9th Floor, Gamma Tower, Sigma Soft Tech Park, Whitefield, Bangalore - 560066</p></div> 
							</div>
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-phone"></i></div> 
								<div class="content">
									<p style="color:white !important;">
										+91-80-67232300 (INDIA) 
										<a href="https://www.google.co.in/maps/place/ZapCom+Solutions+Pvt.+Ltd./@12.9582437,77.7440884,19z/data=!3m1!4b1!4m2!3m1!1s0x3bae1209e51adb23:0xea6d95546faad59?hl=en" target="_blank" >
											<!-- <i class="fa fa-map" style="float:right;"></i> -->
											<img src="<?php bloginfo('template_directory'); ?>/images/mapicon.png"/>
										</a>
									</p>
								</div> 
							</div> 
						</div> 
					</div>
					<div class="col-sm-2"  ></div>
					<div class="col-sm-4"  >
						<div class="featured-deals">
							<h5>USA</h5>
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-map-marker"></i></div> 
								<div class="content"><p style="color:white !important;">7033 Village Parkway, Ste.211, Dublin, California - CA 94568</p></div> 
							</div> 
							<div class="iconbox-left">
								<div class="icon"><i class="fa fa-phone"></i></div> 
								<div class="content">
									<p style="color:white !important;">
										+1-925-350-7003 (US) 
										<a href="https://www.google.co.in/maps/place/5976+W+Las+Positas+Blvd+%23216a,+Pleasanton,+CA+94588,+USA/@37.6814667,-121.9015896,17z/data=!3m1!4b1!4m2!3m1!1s0x808fe95ff8cc3e8b:0xc5ac5012be63bea3" target="_blank">
											<img src="<?php bloginfo('template_directory'); ?>/images/mapicon.png" >
											<!-- <i class="fa fa-map" style="float:right;"></i> -->
										</a>
									</p>
								</div> 
							</div> 
						</div>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div> 
		</div>
        </div>
	

<div class="copy-rt" >
	<div class="container row" id="lower_sec">

		<div class="col-md-3 col-sm-3 col-xs-12 footer-col">
			
			<div class=" footer_mail">
					<!--<span class="fa fa-envelope-o footer_icon_color fa-2x"> </span>-->
					
					<span class="footer_mail_text" style="color:white !important;" >
						<a href="mailto:info@zapcg.com" class="footer_text_color">
							<span>&nbsp;&nbsp;&nbsp;<!-- <span style="font-weight: 500 !important; font-size:2.5vmin; font-family:'montserratbold';">Contact us:</span> --> &nbsp; <i class="fa fa-envelope footer_icon"></i><span style="color:white !important;">&nbsp;&nbsp;&nbsp;&nbsp;info@zapcg.com</span>
						</a>
					</span>
				</div>
		</div>
		

		<div class="col-md-6 col-sm-6 col-xs-12 footer_copyright footer-col">
			<div class="copy-cnt" style="color:white !important;">  © 2018 Zapcom Group. All Right Reserved  |<a href="http://localhost/zapcg1/index.php/policy/" style="color:white !important;">  Privacy Policy </a></div>
		</div>
		
		<div class="col-md-3 col-sm-3 col-xs-12 footer_social footer-col" style="color:white !important;">
			
				<a href="https://www.facebook.com/ZapComGroup" target="_blank" style="color:white !important;"> <span class="fa fa-facebook footer_icon_social"> </span></a>
			
				<a href="https://twitter.com/ZapcomGroup" target="_blank" style="color:white !important;"><span class="fa fa-twitter footer_icon_social"> </span></a>
			
				<a href="https://plus.google.com/u/0/118211239488417595604/about" target="_blank" style="color:white !important;"><span class="fa fa-google-plus  footer_icon_social"> </span></a>
			
				<a href="https://www.linkedin.com/company/zapcom-solutions-pvt-ltd-" target="_blank" style="color:white !important;"><span class="fa fa-linkedin  footer_icon_social"> </span></a>
		</div>
	</div>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
	$.noConflict();
	jQuery(document).ready(function() {
	    var offset = 250;
	    var duration = 500;
	    jQuery(window).scroll(function() {
	        if (jQuery(this).scrollTop() > offset) {
	            jQuery('#scrollUp').fadeIn(duration);
                $('#scrollUp,#scrollDown').children('path').each(function () {
                    $(this).css({fill:'rgb(0, 84, 121)'});
                });
                $('#mouse_pointer').css({fill:'rgb(0, 84, 121)'});
                    $('#mouse_svg').css({fill:'#cccccc'});
	        } else {
	            jQuery('#scrollUp').fadeOut(duration);
                $('#scrollIcon,#scrollUp,#scrollDown').children('path').each(function () {
                    $(this).css({fill:'#fff'});
                });
	        }
            
            if (jQuery(this).scrollTop() < $(document).height() - $(window).height()) {
                jQuery('#scrollDown').fadeIn(duration);
                $('#scrollUp,#scrollDown').children('path').each(function () {
                    $(this).css({fill:'rgb(0, 84, 121)'});
                });
                
                $('#mouse_pointer').css({fill:'rgb(0, 84, 121)'});
                    $('#mouse_svg').css({fill:'#cccccc'});
            }else{
                jQuery('#scrollDown').fadeOut(duration);
                $('#scrollIcon,#scrollUp,#scrollDown').children('path').each(function () {
                    $(this).css({fill:'#fff'});
                });
                
            }
	    });

	});
</script>
<!--
    <div id="goTop" class="back-to-top fa fa-chevron-up fa-1x" style="display:none;
    font-size: 26px;
    line-height: 42px;"></div>
-->
    
<!--
     <img id="scrollUp" src="<?php bloginfo('template_directory'); ?>/images/arrow.svg" style="position:fixed;left:50%;bottom:40px;-ms-transform: rotate(180deg); /* IE 9 */
    -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
    transform: rotate(180deg);"/>
    
    <img id="mouse_svg" src="<?php bloginfo('template_directory'); ?>/images/mouse.svg" style="position:fixed;left:50%;bottom:20px;"/>
    
    <img id="scrollDown" src="<?php bloginfo('template_directory'); ?>/images/arrow.svg" style="position:fixed;left:50%;bottom:22px;"/>
    
-->
    
<!--
    <svg id="scrollIcon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="67px" height="215.473px" viewBox="137 56.411 67 215.473" enable-background="new 137 56.411 67 215.473"
	 xml:space="preserve">
<g id="scrollDown">
	<path fill=" rgb(0, 84, 121)" d="M182.783,251.783L170.5,264.066l-12.283-12.283c-1.489-1.488-3.723-1.488-5.211,0
		c-1.489,1.489-1.489,3.723,0,5.211l14.889,14.89c0.744,0.744,1.675,1.116,2.605,1.116s1.861-0.372,2.605-1.116l14.889-14.89
		c1.489-1.488,1.489-3.722,0-5.211C186.506,250.295,184.272,250.295,182.783,251.783z"/>
	<path fill="rgb(0, 84, 121)" d="M187.994,231.311c-1.488-1.488-3.722-1.488-5.211,0L170.5,243.594l-12.283-12.283
		c-1.489-1.488-3.723-1.488-5.211,0c-1.489,1.489-1.489,3.723,0,5.212l14.889,14.889c0.744,0.745,1.675,1.116,2.605,1.116
		s1.861-0.371,2.605-1.116l14.889-14.889C189.483,235.033,189.483,232.8,187.994,231.311z"/>
</g>
<g id="scrollUp">
	<path fill=" rgb(0, 84, 121)" d="M158.217,77.628L170.5,65.345l12.283,12.283c1.489,1.488,3.723,1.488,5.211,0
		c1.489-1.489,1.489-3.723,0-5.211l-14.889-14.89c-0.744-0.744-1.675-1.116-2.605-1.116s-1.861,0.372-2.605,1.116l-14.889,14.89
		c-1.489,1.488-1.489,3.722,0,5.211C154.494,79.116,156.728,79.116,158.217,77.628z"/>
	<path fill=" rgb(0, 84, 121)" d="M153.006,98.101c1.488,1.488,3.722,1.488,5.211,0L170.5,85.817l12.283,12.283
		c1.489,1.488,3.723,1.488,5.211,0c1.489-1.489,1.489-3.723,0-5.212L173.105,78c-0.744-0.745-1.675-1.116-2.605-1.116
		s-1.861,0.371-2.605,1.116l-14.889,14.889C151.517,94.378,151.517,96.611,153.006,98.101z"/>
</g>
<path id="mouse_svg" fill="#CCCCCC" d="M204,181.455v-33.5c0-18.425-15.075-33.5-33.5-33.5s-33.5,15.075-33.5,33.5v33.5
	c0,18.426,15.075,33.5,33.5,33.5S204,199.881,204,181.455z M170.5,207.511c-14.331,0-26.056-11.726-26.056-26.056v-33.5
	c0-14.33,11.725-26.055,26.056-26.055c14.33,0,26.056,11.725,26.056,26.055v33.5C196.556,195.785,184.83,207.511,170.5,207.511z"/>
<path id="mouse_pointer" fill="rgb(0, 84, 121)" d="M170.5,140.861c-2.047,0-3.723,1.675-3.723,3.722v11.167c0,2.047,1.676,3.723,3.723,3.723
	s3.723-1.676,3.723-3.723v-11.167C174.223,142.536,172.547,140.861,170.5,140.861z">
<animateTransform  type="translate" fill="remove" restart="always" calcMode="linear" additive="replace" accumulate="none" repeatCount="indefinite" values="0,5;0,-5;0,5" dur="0.5s" attributeType="XML" attributeName="transform">
		</animateTransform>
</path>
</svg>
-->
    

<?php wp_footer(); ?>
	

	
</body>
</html>