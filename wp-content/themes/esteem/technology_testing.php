<?php
/*
Template Name:Technology
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ZapCom Group| Technology</title>
<meta name="description" content="We are passionate about transforming innovative ideas into great products. ">
<style>
.morelink, .btn-more {
    background: rgba(205, 205, 205, 0.46);
    height: 25px;
    width: 25px !important;
    border-radius: 50%;
    text-align: center;
    font-family: 'robotoregular';
    color: #010101 !important;
    text-decoration: none !important;
    font-size: 21px;
    float: right;
    line-height: 25px;
    padding: 0 0 0 0px;
    /* border: 1px solid; */
	outline:0 !important;
}
span.morecontent span {
    display: none;
}
</style>
<style>
		
	.banner-img-pos img {
		margin-top: -1vmin;
	}
	
	@media screen and (max-width: 767px){
			.banner p{
				font-size: 30px;
				bottom: 80px;
			}
		}

		@media screen and (min-width: 768px){
			.banner p{
				font-size: 50px;
				bottom: 130px;
			}
		}
	.zapcom-heading{
		font-family: 'ralewayregular';
		font-size: 40px;
	}
	.zapcom-subheading{
		font-family: 'ralewaybold';
		font-size: 25px;
	}
	.zapcom-body{
		font-family: 'ralewayregular';
		font-size: 18px;
	}

	#page_tagline{
		background-color: rgba(238,238,238,1);
	}
	#page_tagline div.row{
		margin: 2vmin 60px;
	}
	#page_tagline div.row div:nth-child(even){
		font-size: 4vmin;
		padding-top: 4.5vmin;
	}
	#page_tagline div.row div:nth-child(odd){
		font-size: 15vmin;
		color: #198AC9;
		vertical-align: text-top;
		padding: 0vmin;
	}
	@media screen and (max-width: 767px){
		#page_tagline div.row{
			margin: 2vmin 25px;
		}
	}
</style>
	
<style>
	.tech-sec:nth-child(even){
		background-color: rgba(238,238,238,1);
	}
	.tech-sec{
		text-align: left;
		padding: 3.5% 5%;
		float: left;
		width: 100%;
		background: #fff;
		/*height:80vh;*/
		/*border-top: 5px solid #c7c7c7;*/
	}
	.tech-heading{
		font-size:5vmin;
		margin-bottom: 3%;
		font-family: 'raleway' !important;
		color: #198AC9;
		line-height: 1;
	}
	.para1{
		font-size:2.9vmin;
		margin-bottom: 3%;
		font-family: 'ralewaybold' !important;
		color: #003D5F;
	}
	.para2{
		font-size:3.5vmin;
		color: #003D5F;
		font-family: 'ralewaylight' !important;
		/*font-style: italic;*/
	}
</style>



	
<style type="text/css">
/*@import url(https://fonts.googleapis.com/css?family=Raleway:400,100,700,600);
html {
    font-family: 'Raleway', sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%
}

body {
    font-family: 'Raleway', sans-serif !important;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
body {
    margin: 0
}*/


.projects .row {
    margin-right: 15px !important;
    margin-left: -15px;
}
.projects h3{
	margin-bottom: 25px;
	font-family: 'ralewayregular' !important;
	text-align: center;
	line-height: 1.1;
}

.projects .containers {
    border-left:6px solid #EEE;
}
@media screen and (max-width: 600px) {
    .projects .containers {
        border-left:none;
    }
}
.projects-more {
    display:none
}
.projects-more.is-showing {
    display:block
}
.project {
    position: relative;
    margin-bottom: 45px;
    padding: 0 0 20px 50px;
    /*padding: 0 0 20px 0;*/
    /*border: 1px solid #333;*/
}
.project::after {
    clear:both;
    content:"";
    display:table
}
@media screen and (max-width: 600px) {
    .project {
        padding-left:0;
    }
}
.project:last-child {
    margin-bottom:0
}
.project::before {
    content:"";
    display:block;
    position:absolute;
    top:-2px;
    left:0px;
    height:24px;
    width:24px;
    /*background:url("<?php bloginfo('template_directory'); ?>/images/howwedoProcess/project-dot.svg") center center/100% no-repeat*/
}
@media screen and (max-width: 600px) {
    .project::before {
        display:none !important;
    }
}
.project-icon {
    -webkit-transition:-webkit-transform 0.5s ease;
    -moz-transition:-moz-transform 0.5s ease;
    transition:transform 0.5s ease;
    -webkit-transform-origin:left top;
    -moz-transform-origin:left top;
    -ms-transform-origin:left top;
    -o-transform-origin:left top;
    transform-origin:left top;
    -webkit-transform:rotate(-0deg);
    -moz-transform:rotate(-0deg);
    -ms-transform:rotate(-0deg);
    -o-transform:rotate(-0deg);
    transform:rotate(-0deg);
    /*position:absolute;*/
    top:0;
    left:40px;
    height: 150px;
}
@media screen and (max-width: 600px) {
    .project-icon {
        -webkit-transform:rotate(0deg);
        -moz-transform:rotate(0deg);
        -ms-transform:rotate(0deg);
        -o-transform:rotate(0deg);
        transform:rotate(0deg);
        position:static;
        margin-bottom:0px;
    }
}
.project-icon.is-animated {
    -webkit-transform:rotate(0deg);
    -moz-transform:rotate(0deg);
    -ms-transform:rotate(0deg);
    -o-transform:rotate(0deg);
    transform:rotate(0deg);
}

.project-name {
    /*margin: -10px 0 20px 0;*/
    /*margin: -9px 0 20px -155px;*/
    font-weight:bold;
    font-size:2rem;
    color:#092930;
    /*padding-left: 60px;*/
    text-transform: uppercase;
    position: absolute;
    background-color: #fff;
    padding-left: 5px;
    padding-right: 5px;
    font-family: 'ralewaybold';

    /*transform: rotate(-90deg) translate(-100px, -114px);*/
    /*transition: 1s;*/
}
@media screen and (max-width: 600px) {
    .project-name {
        transform: none !important;
        position: relative;
        /*text-align: center;*/
        margin: 15px auto;
    }
    .projects .col-md-4 {
        padding: 0 !important;
        text-align: left;
    }
}
.project-client {
	color: #32848e;
    margin:0 0 20px 0;
    font-weight:bold;
    font-size:2.2rem;
}

.projects .col-md-8 {
	padding-top: 0 !important;
	padding-right: 4% !important;
	padding-bottom: 0 !important;
	padding-left: 0 !important;
}
.projects .col-md-3 {
    padding: 0 !important;
    text-align: center;
}

@media screen and (max-width: 991px) {
    .projects .col-md-3 {
        text-align: left;
    }
    .projects .row {
        display: flex !important;
        margin-left: -78px !important;
        padding-left: 0px !important;
    }
}

/*.projects .col-md-10 {
padding: 0 !important;}*/

.project-services {
	font-weight: 600;
    padding: 0;
    list-style: none;
}
@media screen and (max-width: 1100px) {
   
}
.project-services-heading {
    margin-bottom:10px;
    font-weight:bold;
    font-size:1.2rem;
    letter-spacing:2px;
    text-transform:uppercase;
    color:#5BBCC9
}
.project-services-item {
    margin-bottom:10px
}
.project-services-item:last-child {
    margin-bottom:0
}
.project-description,
.project-more {
	font-weight: 600;
    margin:0 0 25px 0;
    line-height:1.85;
    font-size: 17.5px;
}
@media screen and (max-width: 1100px) {
    .project-description,
    .project-more {
        width:auto;
    }
}
.project-more {
    display:none;
    opacity:0
}
.project-actions {
    position:absolute;
    bottom:0;
    left:225px
}
@media screen and (max-width: 600px) {
    .project-actions {
        left:auto;
    }
}


.projects-cta {
    display:block;
    height:50px;
    width:165px;
    margin:80px auto 0 auto;
    padding-top:13px;
    border:2px solid #5BBCC9;
    border-radius:3px;
    font-weight:bold;
    font-size:1.5rem;
    text-align:center;
    color:#5BBCC9
}
.projects-cta img {
    display:inline-block;
    margin-left:5px
}
.projects-cta.is-hidden {
    display:none
}	
.hideme{
    opacity: 0;
}
.projects .subheading{
    padding: 10px 130px 40px 130px;
    text-align: center;
}
@media screen and (max-width: 600px) {
    .projects .subheading{
        padding: 10px 25px 40px 25px;
    }
}

</style>

<style type="text/css">
    #global_delivery{
        /*background-color: rgba(238, 238, 238, 1);*/
        background-color: rgba(243, 243, 243, 1);
        position: relative;
        z-index: -3;
        padding-bottom: 90px;
        padding-left: 100px;
        padding-right: 100px;
    }
    #global_delivery h3{
        margin-bottom: 25px;
        font-family: 'ralewayregular' !important;
        text-align: center;
        line-height: 1.1;
    }
    @media screen and (max-width: 600px) {
        #global_delivery{
            padding-left: 25px;
            padding-right: 25px;
        }
    }
</style>

</head>
<body class="howwedopage">
	
<div class="nav-down" id="header_div">	
        <?php get_header(); ?>
</div>


    
<main id=maincontent>

<section class="banner">


 <div class="banner-img-pos" style="background: url('<?php bloginfo('template_directory'); ?>/images/how-we-do.jpg') no-repeat center; background-size: cover; height:450px;"> 
 	<div style="height:100%; width:100%; position:absolute; background-color: #000; opacity: 0.35; z-index: 0;">
 	</div>
 	<p style="color: white;
	    /*font-size: 7vmin;*/
	    /*padding-top: 23vmin;*/
	    text-align: center;
	    padding-left: 5vmin;
	    padding-right: 5vmin;
	    z-index: 1;
    	position: absolute;
    	width: 100%;
    	font-family: 'ralewayregular';">
 		Competency.&nbsp;&nbsp;
 		Knowledge.&nbsp;&nbsp;
 		Innovation.<br/>
 		Methodology.&nbsp;&nbsp;
 		Passion.&nbsp;&nbsp;
 		Trust.
 	</p>

</div>

</section>




<section  class="section-3" id="page_tagline" style="z-index: -3; position: relative;">
	<div class="row">
		<div class="col-md-1 col-sm-1 col-xs-1">&ldquo;</div>
		<div class="col-md-10 col-sm-10 col-xs-10">
			<p>
				We have the right mix to deliver exceptional results. A transformational magic that will convert your idea to a game-changer product through disruptive thinking and cutting-edge technology.
			</p>
		</div>
		<div class="col-md-1 col-sm-1 col-xs-1">&rdquo;</div>
	</div>
</section>


<section class="section-3 projects" style="z-index: -3; position: relative; text-align: left;     padding-bottom: 80px; padding-top: 60px;">
	<h3 class="zapcom-heading">Our Process</h3>
	<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png" style="display: block; margin:auto; padding-bottom: 30px;"/>
    <p class="subheading zapcom-body">
        Our process approach along with disruptive thinking, cutting-edge technology and laser focus on delivery helping our clients achieve objectives.
    </p>

    <div class="containers" style="margin-left: 16%;">
        <div class="project row">
            <!-- <div class="col-md-10"></div> -->
            

            <div class="col-md-1">
            <p class="project-name  hideme" style="transform: rotate(-90deg) translate(-68px, 0px);">Discovery</p>
            </div>
            <div class="col-md-3 hideme">
                <img class="project-icon" src="<?php bloginfo('template_directory'); ?>/images/howwedoProcess/idea.svg">
            </div>
            <div class="col-md-8 hideme">
                <p class="project-client">Begin the journey - Understanding Vision & Objectives</p>
               
                <p class="project-description" style="font-weight: 600;">
                    Most critical phase where we understand your vision, objectives and plan discussions tailored to you and your needs. We’ll help you with our insights based on our domain expertise and creativity.
                </p>
                <!-- <p class="project-description" style="font-weight: 600;">
                    
                </p> -->
            </div>

        </div>
        <div class="project row">
            <p class="project-name hideme" style="transform: rotate(-90deg) translate(-61px, -118px);">Due Diligence</p>

            <div class="col-md-3 hideme">
                <img class="project-icon" src="<?php bloginfo('template_directory'); ?>/images/howwedoProcess/due.svg">
            </div>
            <div class="col-md-8 hideme">
                <p class="project-client">Workshops for Analysis, Research & Architecture</p>
               
                <p class="project-description" style="font-weight: 600;">
                    We conduct workshops and understand various aspects including cross-functional model, business model, architecture and customer driven journeys. Within weeks, you’ll have a roadmap that meet the needs of your vision.
                </p>
                <!-- <p class="project-description" style="font-weight: 600;">
                    
                </p> -->
            </div>

        </div>
		<div class="project row">
            <p class="project-name hideme" style="transform: rotate(-90deg) translate(-63px, -135px);">Experimentation</p>

            <div class="col-md-3 hideme">
                <img class="project-icon" src="<?php bloginfo('template_directory'); ?>/images/howwedoProcess/test.svg">
            </div>
            <div class="col-md-8 hideme">
                <p class="project-client">Rapid Prototyping and quick validation</p>
               
                <p class="project-description" style="font-weight: 600;">
                    Once we have clear understanding of the big-picture, We’ll start our delivery through rapid prototype experiments and analyze appropriate open source tools to try out new ideas.
                </p>
            </div>

        </div>
		<div class="project row">
            <p class="project-name hideme" style="transform: rotate(-90deg) translate(-65px, -95px);">Initiation</p>

            <div class="col-md-3 hideme">
                <img class="project-icon" src="<?php bloginfo('template_directory'); ?>/images/howwedoProcess/initiation.svg">
            </div>
            <div class="col-md-8 hideme">
                <p class="project-client">Agile project management</p>
               
                <p class="project-description" style="font-weight: 600;">
                    We help you embrace change with incremental value realization through our agile project management and keep everything on track.
                </p>
            </div>

        </div>
		<div class="project row">
            <p class="project-name hideme" style="transform: rotate(-90deg) translate(-60px, -122px);">Construction</p>

            <div class="col-md-3 hideme">
                <img class="project-icon" src="<?php bloginfo('template_directory'); ?>/images/howwedoProcess/construction.svg">
            </div>
            <div class="col-md-8 hideme">
                <p class="project-client">Iterative development with small cycles</p>
               
                <p class="project-description" style="font-weight: 600;">
                    Our iterative development approach focused on agility combined with simple architecture styles and disciplined engineering practices. Our practices are adaptive and able to pivot direction as we discover our client needs.
                </p>
            </div>

        </div>
		<div class="project row">
            <p class="project-name hideme" style="transform: rotate(-90deg) translate(-63px, -85px);">Release</p>

            <div class="col-md-3 hideme">
                <img class="project-icon" src="<?php bloginfo('template_directory'); ?>/images/howwedoProcess/release.svg">
            </div>
            <div class="col-md-8 hideme">
                <p class="project-client">Continuous integration & delivery</p>
               
                <p class="project-description" style="font-weight: 600;">
                    We integrate frequently with our continuous delivery automation to quickly ship the features and test out the ideas. Our quality control process has traceability matrix to track the efficiency of the release. 
                </p>
            </div>

        </div>
		<div class="project row">
            <p class="project-name hideme" style="transform: rotate(-90deg) translate(-70px, -104px);">Transition</p>

            <div class="col-md-3 hideme">
                <img class="project-icon" src="<?php bloginfo('template_directory'); ?>/images/howwedoProcess/transition.svg">
            </div>
            <div class="col-md-8 hideme">
                <p class="project-client">Results, Retrospection & Knowledge transition</p>
               
                <p class="project-description" style="font-weight: 600;">
                    We focus to help clients with analysis to ensure that results from features/ideas are in-line to the expectation. Work with client team to have retrospection how we can bring efficiency and do through knowledge transition as desired.
                </p>
            </div>

        </div>
		
	</div>
       
</section>

<section id="global_delivery" class="section-3" >
    <h3 class="zapcom-heading">Global Delivery</h3>
    <img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png" style="display: block; margin:auto; padding-bottom: 30px;"/>
    <p class="zapcom-body">
        We have our process and delivery models as per client needs and we share our input for best practices to achieve goals. Our delivery process includes co-locate onsite with you or work with you from our offshore delivery center or combination of both. We’ll adapt to our client needs as we go along to have mutual trust and understanding.
    </p>
</section>

<script type="text/javascript">
    /*(function($, win) {
      $.fn.inViewport = function(cb) {
         return this.each(function(i,el){
           function visPx(){
             var H = $(this).height(),
                 r = el.getBoundingClientRect(), t=r.top, b=r.bottom;
             return cb.call(el, Math.max(0, t>0? H-t : (b<H?b:H)));  
           } visPx();
           $(win).on("resize scroll", visPx);
         });
      };
    }(jQuery, window));*/


        $(document).ready(function() {
            
            /* Every time the window is scrolled ... */
            $(window).scroll( function(){
            
                /* Check the location of each desired element */
                $('.hideme').each( function(i){
                    
                    var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                    var bottom_of_window = $(window).scrollTop() + $(window).height();
                    
                    /* If the object is completely visible in the window, fade it it */
                    if( bottom_of_window > bottom_of_object ){
                        console.log("visible event");
                        $(this).animate({'opacity':'1'},500);
                            
                    }
                    
                }); 

                /*$('.project-name').each( function(i){
                    
                    var bottom_of_object1 = $(this).offset().top + $(this).outerHeight();
                    var bottom_of_window1 = $(window).scrollTop() + $(window).height();
                    
                    
                    if( bottom_of_window1 > bottom_of_object1 ){
                        
                        console.log("rotate event");
                        $(this).animate({'transform' : 'rotate(-90deg) translate(-20px,0px)'},500);
                            
                    }
                    
                }); */
            
            });
            
        });
</script>


</main>	
	
 <!-- wrapper -->
<?php get_footer(); ?>

<!--<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1",{contentIsOpen:false, duration:200});
</script>-->




<!-- COMMMENTED -->
<!-- <script src="<?php bloginfo('template_url'); ?>/js/readmore.js"> </script> -->





<!--
<script>
$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 650; // How many characters are shown by default
    var ellipsestext = "";
   var moretext = "+";
    var lesstext = "-";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
  </script>-->
  
</body>




<script src="<?php bloginfo('template_url'); ?>/js/jss/bootstrap.min.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.min.js"> </script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.bxslider.min.js"> </script>

</html>

