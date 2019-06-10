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
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/who_we_are_style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zapcg_style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/what_we_do_style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/feedback.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/OwlCarousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/OwlCarousel/owl.theme.default.min.css">


</head>

<body class="homepage">
<div class="nav-down" id="header_div">	
<?php 
	get_header(); 
?>
</div>


<main id=maincontent>
<section class="zap_section1" style="color:white !important;">
        <div class="zap_banner zap_img" id="home_banner_img"> 
            <div class="zap_bg_layer" style="background-color: #103461; !important;"> </div>           
                <div class="zap_banner_text" style="color:white !important;">
                    <span class="zap_banner_heading"  style="color:white !important;"> Creating Software Solutions that </span>
						<span id="zapcom-catchphrase"  >
							<span style="color:white !important;" >Engage.</span>
							<span style="color:white !important;">Inspire.</span>
							<span style="color:white !important;">Transform.</span>
						</span> 
                     <span class="zap_banner_heading" style="font-size:40px;font-weight:500;color:white !important;">Retail | E-Commerce | Travel | Hospitality | High-Tech | IoT</span>  
						<span class="zap_banner_body" style="text-transform:initial">
							<p  style="color:white !important;">
								Relentlessly pushing the boundaries to excel in what we do and deliver.
							</p>
							<p  style="color:white !important;">
								Passionate, Innovative, Flexible &amp; Agile.
							</p>
						</span>
                </div>
				
            
		</div>
    </section>
    
	<section class="home_info">
        <span class="zap_h1" style="color:#003d5f;">
				The ZapCom Differentiation
		</span>
        
        <div id="home_whoweare">
		<div class="home_whoweare_content">            
			
			<div class="home_whoweare_content_text">
				<p class="zap_body" style="color:white !important;">
				ZapCom is a Global Boutique product engineering and services company. We have expertise and experience in building highly scalable solutions and platforms in modern architecture and cloud environment. 

				</p>
				<br>
				<p class="zap_body" style="color:white !important;">
				We are a specialized global technology firm providing niche solutions for Travel, E-commerce, Retail etc. We are a high performing team with competancy in innovative ideas and emerging technologies, headquartered in California with offices in India, USA and Costa Rica				</p>
			
			</div>
			<br>
			<span class="buttonlink" >
				<a href="http://localhost/zapcg1/index.php/who-we-are/">  <span style="color:white !important;">Read more</span></a>
			</span>
			
		</div>
        </div>
		
	</section>

<!--  Industries section   -->

<section class="what_we_do_section-3 tab-wt-wd services-section-ind container " style="pointer-events:none;" data-section-name="section7" id="section_7">
		<div>
			<span class="zap_h1" style="color:#003d5f;">Industries</span>
			<p class="zap_body">
			We work across all industry sectors,with specialization in:
			</p>
		</div>
    
		<div class="col-sm-4 leaderOuterBox ">
			<div class="leaderimage">
			<img class="leaderpic" style="height:150px;margin-top:20px;"  src="<?php bloginfo('template_directory'); ?>/images/Retail.svg">
	                <h5 class="job_title zapcom-body">Retail</h5>
				</div>
				<div class="leaderdesc">
					<div class="job_info bg">
                        <h5 class="job_title zapcom-body" style="color:white;">Radical Performance</h5>
						<p>
							ZapCom will help you achieve IT objectives &amp; performance targets through our Architecture Realization, Solution, Database &amp; Performance Engineering services spearheaded by seasoned technologists.	
							</p>
						
					</div>
				</div>
		</div>
		<div class="col-sm-4 leaderOuterBox">
		<div class="leaderimage">
			<img class="leaderpic" style="padding:20px;" src="<?php bloginfo('template_directory'); ?>/images/Hospitality.svg">
	                <h5 class="job_title zapcom-body">Hospitality</h5>
				</div>
				<div class="leaderdesc">
					
					<div class="job_info bg">
                        <h5 class="job_title zapcom-body" style="color:white;">Reducing Complexity</h5>
						<p>
								Addition of new features to your product could make it more complex because of combinatorial of different legacies of technologies. We analyze such complexities to identify root causes and effect resolutions.
							</p>
						
					</div>
				</div>
			</div>
			<div class="col-sm-4 leaderOuterBox">
				<div class="leaderimage">
					<img class="leaderpic"  style="padding:10px;margin-top:10px;"  src="<?php bloginfo('template_directory'); ?>/images/IoT.svg">
	                <h5 class="job_title zapcom-body">IoT</h5>
				</div>
				<div class="leaderdesc">
					
					<div class="job_info bg">
                        <h5 class="job_title zapcom-body" style="color:white;">CoE driven Innovations</h5>
						<p>
                                
								Centre of Excellences (CoEs) are our way of mastering tomorrow’s technologies. CoEs actively learn technologies &amp; trends, innovate through trial &amp; error, define best practices, create reusable libraries &amp; develop in-house skills.
							</p>
						
					</div>
				</div>
			</div>
			<div class="col-sm-4 leaderOuterBox">
				<div class="leaderimage">
					<img class="leaderpic" style="padding:20px;"  src="<?php bloginfo('template_directory'); ?>/images/High-Tech.svg">
	                <h5 class="job_title zapcom-body">High-Tech</h5>
				</div>
				<div class="leaderdesc">
					
					<div class="job_info bg">
                        <h5 class="job_title zapcom-body" style="color:white;">Advocating Open Source</h5>
						<p>		Analysts are equivocal that open source software is increasingly ubiquitous as enterprises and startups look to trim software costs. Other benefits are innovativeness, integration flexibility, community support &amp; exit easiness. We help you adopt right tools &amp; technologies.
							</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 leaderOuterBox">
				<div class="leaderimage">
					<img class="leaderpic"  style="padding:10px;"  src="<?php bloginfo('template_directory'); ?>/images/Travel.svg">
	                <h5 class="job_title zapcom-body">Travel </h5>
				</div>
				<div class="leaderdesc">
					
					<div class="job_info bg">
                        <h5 class="job_title zapcom-body"   style="color:white;">Travel &amp; Hospitality Pundits</h5>
						<p>
								That's our sweet spot; a team with deep domain experience in online B2B and B2C travel business, GDS, CRS &amp; destination activities. We have demonstrated capabilities in leveraging latest technology trends to help travel &amp; hospitality companies.
							</p>
						</div>
						
					</div>
				</div>
			<div class="col-sm-4 leaderOuterBox">
				<div class="leaderimage">
					<img class="leaderpic"  style="height:150px; margin-top:20px;" src="<?php bloginfo('template_directory'); ?>/images/E-commerce.svg">
	                <h5 class="job_title zapcom-body">E-commerce</h5>
				</div>
				<div class="leaderdesc">
					<div class="job_info bg">
                        <h5 class="job_title zapcom-body" style="color:white;">Process Efficiency to Effectiveness</h5>
						<p> 
							ZapCom has successfully delivered many projects in Agile/Scrum methodology. We further improve delivery efficiency through DevOps and Testing Automation.
						</p>
					</div>
				</div>
			</div>
	</section> 
	
<!-- Featured Clients -->

<section id="clients" class="clientSec" >
	<span class="zap_h1" style="color:#003d5f;">Featured Clients</span>
	<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>
     <div id="featuredClients">
        <div class="container">
			<div class="col-xs-12">
				<div class="owl-carousel owl-theme">

					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/mercator.png">
					</div>

					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/zappos.jpg">
					</div>

					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/blueBird.jpg">
					</div>

					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/optiv.jpg">
					</div>

					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/snapstrat.jpg">
					</div>


					
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/saltie.jpg">
					</div>


				
					
				
					
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/vivaVoyage.jpg">
					</div>
					
					

					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/iw2.png">
					</div>

					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/thrst.png">
					</div>

					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/elevate.png">
					</div>


<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/jio.jpg">
					</div>
<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/accelya.png">
					</div>

<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/wayblazer.png">
					</div>

						<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/kepsla.jpg">
					</div>



<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/clients/ms1.png">
					</div>






				</div>
			</div>
        </div>
    </div>
</section>


<!-- Featured Clients  end-->


<!-- The ZapCom Edge -->
<!-- <section class="wrapper clientSec">
    <div class="container-fostrap">
		<span class="zap_h1" style="color:#003d5f;">The ZapCom Edge</span>
	<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card zapcom_edge">
                           
                            <div class="card-content">
                                <h4 class="card-title">
                                   Engage
                                </h4>
                                <p class="">
																Technology advancement has put customers in control of their interactions with businesses. 
Enterprises wanting to know and delight their customers, have to realign and invest with focus on providing exceptional customer experience.
</p>
                            </div>
                            <div class="card-read-more">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card zapcom_edge">
                           
                            <div class="card-content">
                                <h4 class="card-title">
                                   Inspire
                                </h4>
                                <p class="">
																Technology advancement has put customers in control of their interactions with businesses. 
Enterprises wanting to know and delight their customers, have to realign and invest with focus on providing exceptional customer experience.
</p>
                            </div>
                            <div class="card-read-more">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card zapcom_edge">
                            
                            <div class="card-content">
                                <h4 class="card-title">
                                  Transform
                                </h4>
                                <p class="">
																Technology advancement has put customers in control of their interactions with businesses. 
Enterprises wanting to know and delight their customers, have to realign and invest with focus on providing exceptional customer experience.
</p>
                            </div>
                            <div class="card-read-more">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 -->

 <section class="wrapper clientSec">
    <div class="container-fostrap">
		<span class="zap_h1" style="color:#003d5f;">The ZapCom Edge</span>
	<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 zap_edge_card">
					<div class="blog-card spring-fever ">
  <div class="title-content">
  <span class="zap_h1" style="color:white !important;">Engage</span>
    <hr />
    <div class="intro" style="color:white !important;">Begin the Journey - Understanding Vision & Objectives</div>
  </div><!-- /.title-content -->
  <div class="card-info" style="color:white !important;">
  Most critical phase where we understand your vision, objectives and plan discussions tailored to you and your needs. We’ll help you with our insights based on our domain expertise and creativity.
</div><!-- /.card-info -->
  
  <!-- overlays -->
  <div class="gradient-overlay"></div>
  <div class="color-overlay"></div>
</div><!-- /.blog-card -->
                    </div>
					<div class="col-xs-12 col-sm-4 zap_edge_card">
					<div class="blog-card spring-fever ">
  <div class="title-content">
  <span class="zap_h1" style="color:white !important;">Inspire</span>
    <hr />
    <div class="intro" style="color:white !important;">Workshops for Analysis, Research & Architecture</div>
  </div><!-- /.title-content -->
  <div class="card-info" style="color:white !important;">
  We conduct workshops and understand various aspects including cross-functional model, business model, architecture and customer driven journeys. Within weeks, you’ll have a roadmap that meet the needs of your vision.
</div><!-- /.card-info -->
  
  <!-- overlays -->
  <div class="gradient-overlay"></div>
  <div class="color-overlay"></div>
</div><!-- /.blog-card -->
                    </div>
					<div class="col-xs-12 col-sm-4 zap_edge_card">
					<div class="blog-card spring-fever ">
  <div class="title-content">
  <span class="zap_h1" style="color:white !important;">Transform</span>
    <hr />
    <div class="intro" style="color:white !important;">Continuous Integration & Delivery</div>
  </div><!-- /.title-content -->
  <div class="card-info" style="color:white !important;">
  We integrate frequently with our continuous delivery automation to quickly ship the features and test out the ideas. Our quality control process has traceability matrix to track the efficiency of the release.
</div><!-- /.card-info -->
  
  <!-- overlays -->
  <div class="gradient-overlay"></div>
  <div class="color-overlay"></div>
</div><!-- /.blog-card -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>




<!-- The ZapCom Edge end -->



<!-- Our Recognition -->
<section class="our_recognition">
	<div class="container ">
	<div class="row">
  <div class="col-sm-6">
    <div class="card card_margin">
      <div class="card-body">
        <span class="zap_h1" style="color:#003d5f;">Our Recognition</span>
        <p class="zap_body">The applications we hand make and craft are a labor of collaboration and industry specialization.</p>
      </div>
    </div>
	</div>
	<div class="col-sm-6" data-appear-top-offset="-700">
    <div class="card ">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="employees">
                    <p class="counter-count  counter1">6</p>
                    <p class="counter-p">Global Locations</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="customer">
                    <p class="counter-count counter2">120</p>
                    <p class="counter-p">+Developers</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="design">
                    <p class="counter-count counter3">30</p>
                    <p class="counter-p">+Happy&nbsp;Customers</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="order">
                    <p class="counter-count counter4">25</p>
                    <p class="counter-p">+Industries</p>
                </div>
            </div>
		
    </div>
	</div>
</div>
</div>

</section>




<!-- Our Recognition end -->








<!-- Vision section -->

<section class="what_we_do_section-3 tab-wt-wd services-section-ind " data-section-name="section7" id="section_7">
		<div>
			<span class="zap_h1" style="color:#003d5f;">Our Vision</span>
		<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png">

			<p class="zap_body" style="color:#003d5f; ">
			Our mission is to bring together the most capable, self driven, innovative and passionate people to:
			</p>
		</div><br>
		<div class="container">	
			<div class="col-sm-4" style="margin-top: 10px;">
			<div class="leaderimage" style="margin-bottom: 20px;">
			<img class="leaderpic" src="<?php bloginfo('template_directory'); ?>/images/mission_business.png">
			<br>
				</div>
				
				<p class="zap_body" style="color:#003d5f; font-size:16px;margin:20px">Be a RICHTSHORE Tech company with strong product engineering teams serving global customers</p>
			</div>
			<div class="col-sm-4" style="margin-top: 10px;margin-down: 10px;">
			<div class="leaderimage" style="margin-bottom: 20px;">
			<img class="leaderpic" src="<?php bloginfo('template_directory'); ?>/images/mission_software.png">
				</div>
				
				<p class="zap_body" style="color:#003d5f;font-size:16px;margin:20px">Provide robust solutions for Cloud, Micro Services architecture and scalable A1 based platforms across domains</p>
			</div>
			<div class="col-sm-4" style="margin-top: 10px;">
			<div class="leaderimage" style="margin-bottom: 20px;">
			<img class="leaderpic" src="<?php bloginfo('template_directory'); ?>/images/mission_solutions.png">
				</div>
				
				<p class="zap_body" style="color:#003d5f;font-size:16px; margin:20px">Continue the rapid growth through global footprint, achieve 3X revenues by 2021</p>
	
			</div>
			</div>


</section>


<!-- Vission section end -->

	<!-- <section class="home_info">
		<span class="zap_h1" style="color:#3a6983;">
			Crafting new-gen software products &amp; platforms
		</span>
		
		<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>

		<p  class="zap_body">
			We excel in building highly scalable platforms with exceptional system performance
		</p>
		<div class="container" >
		  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
		    <!-- Indicators
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
		      <!-- <li data-target="#myCarousel" data-slide-to="5"></li> 
		    </ol>

		    <!-- Wrapper for slides 
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
		      </div> -
		  
		    </div>

		    <span class="buttonlink" id="home_slider_button_desktop">
				<a href="http://localhost/zapcg1/index.php/what-we-do/">  <span >Read more</span></a>
			</span>

		  </div>
		</div>
		
		<span class="buttonlink" id="home_slider_button_mobile">
			<a href="http://localhost/zapcg1/index.php/what-we-do/">  <span >Read more</span></a>
		</span>
	</section> -->


	<section class="whywebest" id="whybest">
		 <!-- <img src="<?php bloginfo('template_directory'); ?>/images/cruise_ship.jpg"/>  -->
		<div class="container">
		<!--	<span class="zap_h1" style="color:#3a6983;">
				Why we’re the best for Travel &amp; Hospitality verticals
			</span> -->
<span class="zap_h1" style="color:#003d5f;">Our Core Values	</span>
<br>
<br>   		
			
			<!-- <img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/> -->
			
			<ul>
				
				<li>
			
				<img src="<?php bloginfo('template_directory'); ?>/images/checkmark.svg">
					<span > Customer Centric –</span> We act as a partner with same Mission &amp; Vision as our customers than merely fulfilling technical resource needs
				</li> 
				<li>
				<img src="<?php bloginfo('template_directory'); ?>/images/checkmark.svg">
					<span>Start-up Culture –</span> Passion, High Optimism, Agility, Ingenuity, Out-of-the-Box Thinking, Intense, Purpose-driven, Hyper-productive
				</li>
				<li>
				<img src="<?php bloginfo('template_directory'); ?>/images/checkmark.svg">
					<span>Product Mindset –</span> Customer-First, Agile, Reusable Components
				</li>
			</ul>

			
		</div>
	</section>


	<!--</section>-->
</main>

<?php get_footer(); ?>
<?php include 'feedback.php';?>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>


<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.min.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/bootstrap.min.js"> </script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!--<script src="<?php bloginfo('template_url'); ?>/js/jquery.scrollify.min.js"> </script>-->

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!--<script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollify.min.js"> </script>-->
<script src="<?php bloginfo('template_directory'); ?>/js/jss/bootstrap.min.js"> </script>

<script src="<?php bloginfo('template_directory'); ?>/OwlCarousel/owl.carousel.min.js"> </script>







<script>
$(document).ready(function(){
	var owl = $('.owl-carousel');
	owl.owlCarousel({
			items:5,
			loop:true,
			margin:10,
			autoplay:true,
			autoplayTimeout:2000,
			autoplayHoverPause:true,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:3,
					nav:false
				},
				1000:{
					items:4,
					nav:true				
				},
				1150:{
					items:5,
					nav:true
				}
			}
		})

		$('.counter-count').each(function () {
	//	alert('hi');
	
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
							console.log(this);
                $(this).text(Math.ceil(now));
            }
        });
    });
	});

	$(window).on("scroll", function() {
	var scrollHeight = $(document).height();
	//console.log(scrollHeight);
	var scrollPosition = $(window).height() + $(window).scrollTop();
	console.log(scrollPosition);
	if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
	    // when scroll to bottom of the page
	}
	var count=1;
	if(scrollPosition==2689){
		console.log('hi');
		if(count>1){
		console.log("help me out")
		$('.counter-count').stop();
	}
	count++;

		return;
	}
});



</script>



