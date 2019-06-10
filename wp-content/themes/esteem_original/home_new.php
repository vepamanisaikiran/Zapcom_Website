<?php
/*
Template Name:HOME
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home_new_style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zapcg_style.css">

</head>

<body class="homepage">
<div class="nav-down" id="header_div">	
<?php 
	get_header(); 
?>
</div>


<main id=maincontent>
	<section class="zap_section1">
        <div class="zap_banner zap_img" id="home_banner_img"> 
            <div class="zap_bg_layer" style="background-color: #103461;"> </div>           
                <div class="zap_banner_text" style="color:white">
                    <span class="zap_banner_heading" > Creating Software Solutions that </span>
						<span id="zapcom-catchphrase">
							<span>Engage.</span>
							<span>Inspire.</span>
							<span>Transform.</span>
						</span> 
                        <span class="zap_banner_heading"> for Travel &amp; Hospitality</span>
						<span class="zap_banner_body" style="text-transform:initial">
							<p>
								Relentlessly pushing the boundaries to excel in what we do and deliver.
							</p>
							<p>
								Passionate, innovative, flexible &amp; agile.
							</p>
						</span>
                </div>
            
		</div>
    </section>
    
	<section class="home_info">
        <span class="zap_h1" style="color:#3a6983;">
			Staid is passé. Disruption is in.
		</span>
        
        <div id="home_whoweare">
		<div class="home_whoweare_content">            
			
			<div class="home_whoweare_content_text">
				<p  class="zap_body">
					Planning path-breaking product? Need innovsative technology partner?
				</p>
				<p class="zap_body">
					ZapCom foster an environment where innovative minds are encouraged to experiment, learn &amp; excel.
				</p>
				<p class="zap_body">
					We give wings to your ideas with our innovative &amp; disruptive approach to technologies.
				</p>
			</div>
			<br/>
			<span class="buttonlink" >
				<a href="http://localhost/zapcg1/index.php/who-we-are/">  <span >Read more</span></a>
			</span>
			
		</div>
        </div>
		
	</section>

	<section class="home_info">
		<span class="zap_h1" style="color:#3a6983;">
			Crafting new-gen software products &amp; platforms
		</span>
		
		<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>

		<p  class="zap_body">
			We excel in building highly scalable platforms with exceptional system performance
		</p>
		<div class="container" >
		  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
		      <!-- <li data-target="#myCarousel" data-slide-to="5"></li> -->
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">

		      <div class="item active">
		        <img src="<?php bloginfo('template_directory'); ?>/images/home_wtwedo_architectural.png" alt="Architecture Realization">
		        <div class="carousel-caption">
		          
		        </div>
		      </div>

		      <div class="item">
		        <img src="<?php bloginfo('template_directory'); ?>/images/home_wtwedo_software.png" alt="Solution Engineering" >
		        <div class="carousel-caption">
		          
		        </div>
		      </div>

		      <div class="item">
		        <img src="<?php bloginfo('template_directory'); ?>/images/home_wtwedo_performance.png" alt="Performance Engineering">
		        <div class="carousel-caption">
		          
		        </div>
		      </div>

		      <div class="item">
		        <img src="<?php bloginfo('template_directory'); ?>/images/home_wtwedo_test.png" alt="Test Automation" >
		        <div class="carousel-caption">
		          
		        </div>
		      </div>

		      <div class="item">
		        <img src="<?php bloginfo('template_directory'); ?>/images/home_wtwedo_devops.png" alt="DevOps Automation">
		        <div class="carousel-caption">
		          
		        </div>
		      </div>
		    
		      <!-- <div class="item">
		        <img src="<?php bloginfo('template_directory'); ?>/images/home_wtwedo_open.png" alt="Digital Tranformation">
		        <div class="carousel-caption">
		          
		        </div>
		      </div> -->
		  
		    </div>

		    <span class="buttonlink" id="home_slider_button_desktop">
				<a href="http://localhost/zapcg1/index.php/what-we-do/">  <span >Read more</span></a>
			</span>

		  </div>
		</div>
		
		<span class="buttonlink" id="home_slider_button_mobile">
			<a href="http://localhost/zapcg1/index.php/what-we-do/">  <span >Read more</span></a>
		</span>
	</section>

	<section class="whywebest" id="whybest">
		 <!-- <img src="<?php bloginfo('template_directory'); ?>/images/cruise_ship.jpg"/>  -->
		<div class="container">
			<span class="zap_h1" style="color:#3a6983;">
				Why we’re the best for Travel &amp; Hospitality verticals
			</span>
			
			<!-- <img src="<?php //bloginfo('template_directory'); ?>/images/horizontal_line.png"/> -->
			
			<ul>
				<li>
					<span >Boutique software</span>  product and solutions company
				</li>
				<!-- <li>
					Focussed on helping Travel & Hospitality industries with innovative and game-change solutions
				</li> -->
				<li>
					Strong leadership with 120+ years  of cumulative  <span>Travel &amp; Hospitality</span> domain expertise
				</li>
				<li>
					<span>‘Customer Centric’ –</span> We act as a partner with same Mission &amp; Vision as our customers than merely fulfilling technical resource needs
				</li>
				<li>
					<span >‘Start-up Culture’ –</span> Passion, High Optimism, Agility, Ingenuity, Out-of-the-Box Thinking, Intense, Purpose-driven, Hyper-productive
				</li>
				<li>
					<span >‘Product Mindset’ –</span> Customer-First, Agile, Reusable Components
				</li>
			</ul>

			
		</div>
	</section>


	<!--</section>-->
</main>

<?php get_footer(); ?>

<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>


<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.min.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/bootstrap.min.js"> </script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!--<script src="<?php bloginfo('template_url'); ?>/js/jquery.scrollify.min.js"> </script>-->




