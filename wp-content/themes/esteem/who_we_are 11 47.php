<?php
/*
Template Name:Who We Are1
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ZapCom Group | Who We Are</title>
<meta name="description" content="Your trusted partner for Incubating Innovative Ideas, Sourcing, building solutions and Go-To market strategy">
     <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/who_we_are_style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zapcg_style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/demo.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script>
$(document).ready(function(){
    $('#we_are_hiring').click(function(){
         $('#pro').click(); 
    return false;
    });
});
</script>










</head>
	
	
<body class="whowearepage" >

<div class="nav-down" id="header_div">	
        <?php get_header(); ?>
		
</div>


    
<main id=maincontent>
    <section class="zap_section1">
        <div class="zap_banner zap_img" id="who_we_are_banner_img"> 
            <div id="canvas_sec" style="width:100%;position:absolute; background:rgba(4, 27, 88, 0.5); opacity:0.5; z-index: 0;">
 	</div>
                <div class="zap_banner_text" style="color:white">
                    <span class="zap_banner_heading" >
 		We are a team of <span class="zap_banner_focus">passionate technologists,</span> <span style="display:block;">creating </span>  <span  class="zap_banner_focus" style="display:inline;" >winning </span> <span style="display:inline;"> Travel & Hospitality </span> <span class="zap_banner_focus" style="display:inline;"> Products</span>
 	</span>
	
                </div>
				  <div id="menu_career">        
            <div id="career_menu_button" class="" >
                <a href="#myModal1" >
                <img id="we_are_hiring" style="width: 110px;margin-bottom: 23px;" src="<?php bloginfo('template_directory'); ?>/images/free_consult.png"/>
                </a> 
				
				
				
				    <!-- Button trigger modal -->
<button type="button" id="pro" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style=" display:none ;">
  Launch demo modal123
</button>

<!-- Modal -->
				 
            </div>
            
		</div>
    </section>
    
    <div class="zap_subMenu">
    <ul>
     <li><a href="#mission_vision"> Mission & Vision </a></li>
     <li><a href="#leaders"> Leadership </a></li>
     <li><a href="#strategic_advisor">Advisors </a></li>
    </ul>


    </div>



<section class="zap_tagline_sec">
    
        <div class="row zap_tagline" id="tagline_row" >
			<div class="col-md-1 col-sm-1 col-xs-1 hidden-xs zap_h1" style="color:#198AC9;font-size:54px;text-align:center;">&ldquo;</div>
			<div class="col-md-10 col-sm-10 col-xs-12">
				<p class="zap_body">
					A boutique software product and solutions company whose forte is building and maintaining high-performance, scalable, complex software for Travel & Hospitality domains.
				</p>
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1 hidden-xs zap_h1" style="color:#198AC9;font-size:54px;text-align:center;">&rdquo;</div>
		</div>
        
        <div class="row" id="whweare_moreinfo">
		<div class="col-sm-12" id="who_we_are_desc" >
			<p class="zap_body">
				 By hiring the right engineers, motivating them to give their best and fostering an environment of continuous learning, innovation, mutual trust and fun, we are able achieve exceptional productivity and results.
			</p>
			<p class="zap_body">
				They are ably guided and nurtured by leadership team with 150+ years of cumulative experience developing products and platforms.
			</p>
		</div>
    </div>
</section>
    
    

<section id="mission_vision" class="mission">
	<span>
		<span class="zap_h1" style="color:#003d5f;">Mission</span>
		<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>
		<p class="zap_body">
			Our mission is to bring together the most capable, self driven, innovative and passionate people to:
		</p>

		<div class="container row" style="width:85%;">
            <div id="cover"></div>
			<div class="col-sm-4" style="margin-top: 10px;">
				<center>
					<img src="<?php bloginfo('template_directory'); ?>/images/mission_business.png" class="mission_images img-responsive"/>
				</center>
				<span class="mission_points zap_body">Run a sustainable business</span>
			</div>
			<div  class="col-sm-4" style="margin-top: 10px;">
				<center>
					<img src="<?php bloginfo('template_directory'); ?>/images/mission_software.png" class="mission_images img-responsive"/>
				</center>
				<span class="mission_points zap_body">Champion software innovation &amp; revolutionize the IT industry</span>
			</div>
			<div  class="col-sm-4" style="margin-top: 10px;">
				<center>
					<img src="<?php bloginfo('template_directory'); ?>/images/mission_solutions.png" class="mission_images img-responsive"/>
				</center>
				<span class="mission_points zap_body">Customer excellence with top-notch solutions</span>
			</div>
		</div>

    </span>	
    <span style="background-color:rgba(204, 206, 207, 0.33);padding:20px 0 40px;">
            <span class="zap_h1" style="color:#003d5f;">Vision</span>

        <img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>
        <p class="zap_body">
            To be best-in-class team in travel and hospitality technologies with innovative products and solutions.
        </p>

    </span>
	
</section>

<section id="clients" class="clientSec" >
	<span class="zap_h1" style="color:#003d5f;">Featured Clients</span>
	<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>
     <div id="featuredClients">
            <div class="container row">
	            <div class="col-sm-4 client_icon">
	                <div class="clients" id="client_saltie"></div>
	                <div id="background_saltie"> </div>
	                <div id="saltie_heading">
	                <h4 class="zapcom-subheading"> Reinventing Cruise Shopping </h4></div>
	                
	                <div class="desc saltie"><p class="zapcom-body"> Mobile only, lifestyle based Cruise shopping App to shop, book & share experiences in Social Media.</p>
                    <ul class="zapcom-body">
                    <li> Visually & content rich with lifestyle themes</li>
                    <li> Cloud based, hybrid app for iOS and Android devices</li>
                    <li>N-tier IoC architecture & ReST based connections</li>
                    <li>Open standards & Open Source stack</li>
                    </ul>
                    </div>
	            </div>
		    
				<div class="col-sm-4 client_icon">
		            <div class="clients" id="client_aircargo"></div>
		            <div id="background_aircargo"></div>
					<div id="aircargo_heading">
		                <h4 class="zapcom-subheading">Cargo Solutions </h4>
		            </div>
		            <div class="desc aircargo" ><p class=" zapcom-body">Modernized, enhanced performance and improved stability of Cargo Platform & e-Com System for an Airline Software Product Company. </p>
                        <ul class="zapcom-body">
                        <li>Performance & Scalability </li>
                         <li>Delivery velocity improvements - DevOps Automation, Agile Methodology</li>
                        <li>Product Enhancements  </li>
                         </ul>
                       
                    </div>
		        </div>
		        
		
				<div class="col-sm-4 client_icon "> 
		            <div class="clients" id="client_kepsla"></div>
		            <div id="background_kepsla"></div>
					
		            <div id="kepsla_heading">
		                <h4 class="zapcom-subheading">Connect. Analyze. Gain.</h4>
		            </div>
		            <div class="desc kepsla"><p class="zapcom-body">Developing suit of SaaS analytics products for Travel & Hospitality providers to track & analyze customer intelligence by using Semantic and Artificial Intelligence techniques with emphasis on Machine / Deep Learning.</p>
                        <ul class="zapcom-body">
                        <li>Feedback Management </li>
                        <li>Review Aggregation </li>
                        <li> Recommendation Engine </li>
                        </ul></div>
		                
				</div>
                </div>
            </div>
</section>


<script type="text/javascript">
	$( document ).ready(function() {
	    //console.log( "ready!" );
	    $( ".toggle-content" ).css( "display", "none" );
	});
	/*function init_fn()
	{
		
		var divtoggle=document.getElementsByClassName("toggle-content");
		alert(divtoggle.length);
		var x;
		for(x=0;x<divtoggle.length;x++)
		{
			divtoggle[x].style.display="none";
		}
		
	}
	window.onload = init_fn();*/
	function visible_generic(tag)
	{
		var papa=tag.parentElement;
		var children=papa.childNodes;
		var i;
		
		for (i = 0; i < children.length; i++) 
		{
			if(children[i].tagName=="DIV" && children[i].className=="toggle-content")
			{
				if(children[i].style.display=="none")
				{
					children[i].style.display="block";
					var triggerelem=tag.childNodes;
					var j;
					
					for(j=0;j<triggerelem.length;j++)
					{
						if(triggerelem[j].tagName=="SPAN")
						{
							triggerelem[j].textContent="less...";
							//alert(triggerelem[j].tagName);
						}
					}
					

				}
				else
				{
					children[i].style.display="none";
					var triggerelem=tag.childNodes;
					var j;
					
					for(j=0;j<triggerelem.length;j++)
					{
						if(triggerelem[j].tagName=="SPAN")
						{
							triggerelem[j].textContent="more...";
							//alert(triggerelem[j].tagName);
						}
					}
				}
			}
		}
		
	}
    
     

</script>

    
   
   
	<span class="zap_h1" style="color:#003d5f;">Leadership</span>
	<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>
        <div class="container row">
            <div class="col-sm-1"></div>
			<div class="col-sm-3">
				<img class="leaderpic" src="<?php bloginfo('template_directory'); ?>/images/employee/kishore_pallamreddy.png" />
                <span class="job_title zap_body">Kishore Pallamreddy,<br/><span> Founder & Executive Chairman </span></span>
			</div>
			<div class="col-sm-7">				
				<div class="job_info">
					<p class="zap_body">
						A Product and Technology Leader, Strategic Advisor and Entrepreneur, Kishore brings in 22+ years of global experience in Travel and Hospitality industry, holding various global roles, building Airline Solutions, Distribution Systems, Online Travel and Retail. 
					</p>
					<div class="toggle-content" id="leaderkishore">
						<p class="zap_body">
							His 19-year career at Sabre Holdings spanned stints in both the US and Asia in various capacities across their businesses. At Travelocity, Kishore led Hotels and Packaging product and technology platforms used by all their global brands. Most recently, Kishore was Chief Product and Technology Officer for one of Warburg Pincus owned technology companies (Mercator Solutions) heading Products and Platform Strategy, IT Operations, Technology Solutions, Product Engineering, Development and Delivery. 
						</p>
						<p class="zap_body">
							As an accomplished Product and Technology leader, Kishore brings a consistent track record of building high performance teams and growing technology businesses at a global scale.  As an Entrepreneur, Kishore founded two start-ups in Travel and Hospitality domain and currently contributes as an Advisor and Chairman of those businesses. 
						</p>
                        <p class="zap_body">
							Kishore holds a Master’s Degree in Computer Science from University of Texas and an alumni of University of Darden, Virginia. 
						</p>
					</div>
					<p class="trigger-click" onClick="visible_generic(this)">
						<span>more...</span>
					</p>
				</div>
			</div>
             <div class="col-sm-1"></div>
		</div>
		<div class="container row">
            <div class="col-sm-1"></div>
			<div class="col-sm-3">
				<img class="leaderpic" src="<?php bloginfo('template_directory'); ?>/images/employee/deepak.png"/>
                <span class="job_title zap_body">Deepak Puranam,<br/><span> Head – Engineering & Delivery </span></span>
			</div>
			<div class="col-sm-7">
				
				<div class="job_info">
					<p class="zap_body">
						Senior technology leader spanning over 19 years building e-commerce platforms and products for travel & hospitality industry. Prior to this role, Deepak held multiple technology roles based out of Dallas Ft-Worth, USA at Travelocity, Sabre & Orbitz, a leading OTA and technology solutions provider for the travel industry.
					</p>
					<div class="toggle-content" id="leaderdeepak">
						<p class="zap_body">
							In his role he built best in class systems namely global hotel systems, hotels connectivity platforms for PMS, GDS and travel aggregators, destination activities & ancillary systems.
						</p>
						<p class="zap_body">
							He is part of leadership team growing offshore development center at Bangalore for Travelocity & Orbitz.
						</p>
					</div>
					<p class="trigger-click" onClick="visible_generic(this)">
						<span>more...</span>
					</p>
				</div>
			</div>
             <div class="col-sm-1"></div>
		</div>
		<div class="container row">
             <div class="col-sm-1"></div>
			<div class="col-sm-3">
				<img class="leaderpic" src="<?php bloginfo('template_directory'); ?>/images/employee/saikonda.png"/>
                <span class="job_title zap_body">Sai Konda, <br/><span> CTO </span></span>
			</div>
			<div class="col-sm-7">
				
				<div class="job_info">
					<p class="zap_body">
						Sai has about 20 years of extensive experience in defining, implementing and transitioning Global Enterprise Architecture Strategy, Global Infrastructure Strategy, Design and development of enterprise business-driven applications.
					</p>
					<div class="toggle-content" id="leadersaikonda">
						<p class="zap_body">
							His recent focus includes Digital Transformation, leveraging Internet Of things for large enterprises and disruptive thinking with practical lens.
						</p>
						<p class="zap_body">
							Prior to becoming Zapcomite, Sai has served in key roles as a management and technical consultant for top clients in Hospitality, Retail and Automotive verticals.
						</p>
					</div>
					<p class="trigger-click" onClick="visible_generic(this)">
						<span>more...</span>
					</p>
				</div>
			</div>
             <div class="col-sm-1"></div>
		</div>
		<div class="container row">
             <div class="col-sm-1"></div>
			<div class="col-sm-3">
				<img class="leaderpic" src="<?php bloginfo('template_directory'); ?>/images/employee/sajith.png"/>
                <span class="job_title zap_body">Sajith Kumar, <br/> <span> Head – Business Development </span> </span>
			</div>
			<div class="col-sm-7">
				
				<div class="job_info" >
					<p class="zap_body">
						Senior business development professional with 25+ years of customer management experience. Brings onboard the rich experience of having worked in key positions with large as well as start-up technology companies.
					</p>
					<div class="toggle-content" id="leadersajith" style="overflow: hidden; position: relative; ">
						<p class="zap_body">
							Prior to becoming ZapComite, Sajith was the COO of an IoT start-up and was the Global Head – Enterprise Mobility Practice of Tech Mahindra, a $4 Bn software firm.
						</p>
						<p class="zap_body">
							Postgraduate in Business Management from IIM, Lucknow and Electronics & Communication Engineer from Kerala University.
						</p>
					</div>
					<p class="trigger-click" onClick="visible_generic(this)">
						<span>more...</span>
					</p>
				</div>
			</div>
             <div class="col-sm-1"></div>
		</div>

</section>  
  
        <span class="zap_h1" style="color:#003d5f;">Strategic Advisors</span>
	<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>
		<div class="container row" style="border-bottom: none;">
            <div class="col-sm-1">
            </div>
			<div class="col-sm-3 center-block">
				<img class="leaderpic" src="<?php bloginfo('template_directory'); ?>/images/employee/barry.png"/>
                <h5 class="job_title zapcom-body">Barry Gleason</h5>
			</div>
			<div class="col-sm-7 " style="top: 10px;">
				
				<div style="text-align: justify;font-size: 16px;padding:0 10px;" >
					<p class="zap_body">
						Barry Gleason is a Travel & Hospitality Industry veteran and independent consultant specialized in Distribution, Hospitality, and Activities sectors with 25+ years of global experience. Mr. Gleason advises ZapCom on Travel & Hospitality Technology & Distribution and Go-to-Market strategies.
					</p>
					
						<p class="zap_body">
							Mr. Gleason held various senior level, global roles at Expedia, Travelocity, and lastminute.com, and provided strategic directions on hotels business for these major online travel commerce companies. He also worked with Travel companies such as American Express, Caesars Entertainment, MGM Resorts and Canadian Airlines.
						</p>
						<p class="zap_body">
							He had been an entrepreneur, involved with a very successful startup - ‘Newtrade Technologies’ - that was acquired by Expedia, Inc., in 2001. Most recently he was an advisor to Busbud.com, the largest international bus booking service startup. 
						</p>
						<p class="zap_body">
							Mr. Gleason has an MBA from McGill University and a BA from University of Ottawa.
						</p>
					
				</div>
			</div>
            <div class="col-sm-1"></div>
		</div>
		


</section> 
    


</main>

<?php get_footer(); ?>



	
	
	

	<!-- Button trigger modal -->


<!-- Modal -->
<div id="myModal1" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                    <h4 class="modal-title">My Title in a Modal Window</h4>
            </div>
            <div class="modal-body">This is the body of a modal...</div>
            <div class="modal-footer">This is the footer of a modal...</div>
            </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	
	
	
	
	
	
	
	
	

</body>


<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.5.js"> </script>
<!-- <script type="text/javascript">
	jQuery.noConflict();
	$(".trigger").click(function(){
	    var divelem = $(this).find("a").attr('href');
	    divelem = divelem.replace("#", "");
	    var spanText = ($('#'+divelem).is(':visible')) ? "more" : "less" ;
	    $($(this).find("span").text(spanText));
	     
	    $($(this).find("a").attr('href') ).slideToggle("slow");
	});
</script> -->


<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.min.js"> </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.bxslider.min.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/bootstrap.min.js"> </script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!--<script src="<?php bloginfo('template_url'); ?>/js/jquery.scrollify.min.js"> </script>-->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.particleground.min.js"> </script>
<script>
$(function() {

    });

    
$('#canvas_sec').particleground({
    dotColor: '#fff',/* '#153965' '#47a1d3'*/
        lineColor:  'transparent',
    density:  20000,
        maxSpeedX:  1.5,
        maxSpeedY:  1.5
});

</script>

