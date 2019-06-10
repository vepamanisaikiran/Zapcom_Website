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
</div><!--#main -->
<!--<?php //do_action( 'esteem_before_footer' ); ?>
<footer id="colophon" class="clearfix">
	<?php //get_sidebar( 'footer' ); ?>
	<div id="site-generator" class="inner-wrap">
		<?php //do_action( 'esteem_footer_copyright' ); ?>
	</div><!-- #site-generator -->
<!--</footer>
<a href="#masthead" id="scroll-up"><i class="icon-angle-up"></i></a>
</div>
<?php //wp_footer(); ?>
</body>
</html>-->
<!--<section class="footer">
	<div class="container">

		<div class="fot-1">
			<p> <span class="call-spt"> </span> </p>
			<p> CALL US <br> INDIA: +91-80-67232300  <br>  USA: +1-925-350-7003 </p>
		</div>

		<div class="fot-1">
			<div class="center-fot">
				<p><a href="mailto:info@zapcg.com"> <span class="mail-spt"> </span> </p>
				<p style="margin: 11px 0 0 0;"> MAIL US <br> info@zapcg.com</a> </p>
			</div>
		</div>

		<div class="fot-1 shr">
			<div class="center-fot">
				<p><a href="https://www.facebook.com/ZapComGroup" target="_blank"> <span class="face-spt"> </span></a>
				<a href="https://twitter.com/ZapcomGroup" target="_blank"><span class="tweet-spt"> </span></a>
				<a href="https://plus.google.com/u/0/118211239488417595604/about" target="_blank"><span class="gogl-spt"> </span></a>
				<a href="https://www.linkedin.com/company/zapcom-solutions-pvt-ltd-" target="_blank"><span class="linkin-spt"> </span></a>
				 </p>
			</div>
		</div>

	</div>
</section>   -  section footer ---->

<!--<section class="copy-rt">
	
	
	<div class="container">

		<div class="fot-1">
			<div class="center-fot">
				<p> <span class="call-spt"> </span> </p>
				<p> CALL US <br> INDIA: +91-80-67232300  <br>  USA: +1-925-350-7003 </p>
			</div>
			
			<div class="center-fot">
				<p><a href="mailto:info@zapcg.com"> <span class="mail-spt"> </span> </p>
				<p style="margin: 11px 0 0 0;"> MAIL US <br> info@zapcg.com</a> </p>
			</div>
		</div>
		

		<div class="fot-1">
			<div class="copy-cnt">  © 2015 Zapcom Group. All Right Reserved  |<a href="http://localhost/zapcg1/index.php/policy/">  Privacy Policy </a>|<a href="http://localhost/zapcg1/index.php/sitemap/"> Sitemap</a></div>
		</div>
		
		<div class="fot-1 shr">
			<div class="center-fot">
				<p>
					<a href="https://www.facebook.com/ZapComGroup" target="_blank"> <span class="fa fa-facebook-official fa-3x"> </span></a>
					&nbsp;
					<a href="https://twitter.com/ZapcomGroup" target="_blank"><span class="fa fa-twitter-square fa-3x"> </span></a>
					&nbsp;
					<a href="https://plus.google.com/u/0/118211239488417595604/about" target="_blank"><span class="fa fa-google-plus-square fa-3x"> </span></a>
					&nbsp;
					<a href="https://www.linkedin.com/company/zapcom-solutions-pvt-ltd-" target="_blank"><span class="fa fa-linkedin-square fa-3x"> </span></a>
				 </p>
			</div>
		</div>
	

	</div>
	
</section>-->

<!--<section class="copy-rt" style="box-shadow: 0px -2px 9px 9px #153965;">-->
	
<section class="copy-rt">
	<div class="container row">

		<div class="col-md-3 col-sm-12 footer-col">
			<!--<div class="row">
				<div class="col-md-7 col-sm-7 col-xs-7">
					<span class="fa fa-phone footer_icon_color fa-2x"> </span>
					<span class="footer_text_color"><br> INDIA: +91-80-67232300  <br>  USA: +1-925-350-7003</span>
				</div>
				
			</div>-->
			<div class=" footer_mail">
					<!--<span class="fa fa-envelope-o footer_icon_color fa-2x"> </span>-->
					
					<span class=footer_mail_text>
						<a href="mailto:info@zapcg.com" class="footer_text_color">
							<span>&nbsp;&nbsp;&nbsp;<span style="font-weight: 500 !important; font-size:2.5vmin; font-family:'ralewaybold';">Email us:</span> &nbsp;info@zapcg.com</span>
						</a>
					</span>
				</div>
		</div>
		

		<div class="col-md-6 col-sm-12 footer_copyright footer-col">
			<div class="copy-cnt" style="padding-top:0.5vmin;">  © 2015 Zapcom Group. All Right Reserved  |<a href="http://localhost/zapcg1/index.php/policy/">  Privacy Policy </a></div>
		</div>
		
		<div class="col-md-3 col-sm-12 footer_social footer-col">
			
				<a href="https://www.facebook.com/ZapComGroup" target="_blank"> <span class="fa fa-facebook footer_icon_color"> </span></a>
			
				<a href="https://twitter.com/ZapcomGroup" target="_blank"><span class="fa fa-twitter footer_icon_color"> </span></a>
			
				<a href="https://plus.google.com/u/0/118211239488417595604/about" target="_blank"><span class="fa fa-google-plus  footer_icon_color"> </span></a>
			
				<a href="https://www.linkedin.com/company/zapcom-solutions-pvt-ltd-" target="_blank"><span class="fa fa-linkedin  footer_icon_color"> </span></a>
			
					
					
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


<!--<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow6.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>-->



<?php wp_footer(); ?>

</body>