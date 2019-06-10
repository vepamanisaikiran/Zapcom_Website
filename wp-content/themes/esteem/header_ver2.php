<?php
/**
 * Theme Header Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-1.css"> 
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/media-query.css">

<!--<link href="css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css">-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/responsive-tabs.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && 

		location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	</script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-1.css"> 
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/media-query.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css">

<!--<link href="css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css">

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/jss/js/responsive-tabs.min.js" type="text/javascript"></script>-->
<script src="<?php bloginfo('template_url'); ?>/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<!--<script src="<?php bloginfo('template_url'); ?>/SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>-->
<link href="<?php bloginfo('template_url'); ?>/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
 <meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
/**
 * This hook is important for wordpress plugins and other many things
 */
wp_head();
?>

	<style>
		@media screen and (min-width: 769px and max-width: 991px)
		{
			div.footer-col{
				padding: 2vmin 0 !important;
			}
		}
	</style>
	<style>
		#mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-item > a
		{
			font-family: 'ralewaybold' !important;
			/*font-size: 3vmin;*/
		}
		#menubar{
			height:12vmin;
			width:100%;
			/*background-color: #F8F8F8;*/
			/*margin-top: 15vmin !important;*/
			/*position: fixed;*/
		}
		#websitelogo{
			/*width: 18vmin;
			height:10vmin;*/
			vertical-align: middle;/*text-top;*/
			/*margin-top: 2.5vmin;*/
		}
		#myNavbar ul{
			margin-right: 1vmin !important;
			width:100%;
			/*text-align: right;*/
		}
		 @media only screen and (max-width: 767px){
			#myNavbar ul{
				/*margin-right: 10vmin !important;*/
				width:100vw;
			}
		}
		#myNavbar ul li a {
			/*margin-top:3vmin;*/
			font-family: 'ralewaybold';
			font-size: 16px;
			/*padding-left: 2vmin;
			padding-right: 2vmin;*/
			color: #003D5F;
			line-height: 1;

		}




		header{
			margin:0px !important;
			padding:0px !important;
			position: fixed;
	        top: 0;
	        transition: top 0.2s ease-in-out;
	        height:12vmin;
	        /*border-bottom: 2px #000 solid !important;*/
		}
		main{
			/*width:50%;*/
			position: unset;
			/*padding-top: 96px;*/
			padding-top: 12vmin;
		}
		.nav-up{
			top:-15vmin;
		}


		/*body.homepage #myNavbar li.homepage,
		body.technologypage #myNavbar li.technologypage,
		body.contactpage #myNavbar li.contactpage a { background-color: #000;}*/
		body.homepage #myNavbar li.homepage a,
		body.whowearepage #myNavbar li.whowearepage a,
		body.whatwedopage #myNavbar li.whatwedopage a,
		body.insightspage #myNavbar li.insightspage a,
		body.howwedopage #myNavbar li.howwedopage a,
		body.careerspage #myNavbar li.careerspage a,
		body.contactpage #myNavbar li.contactpage a { color: #ffffff; background-color: #003D5F;}

	</style>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.12.3.js"></script>
	<script type="text/javascript">
        //$.noConflict();
        // 
        /*var dom = {};
		dom.query = jQuery.noConflict(true);*/
		

        var didScroll = false;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $("#headersec").outerHeight();

        $(window).scroll(function(event){
            console.log("scroll event happened");
            didScroll = true;
        });

        setInterval(function() {
            //console.log("...");
           if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);
       

        function hasScrolled() {
            var st = $(window).scrollTop();

            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
            {
                return;
            }    
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
               console.log("hide menu");
                $("#headersec").addClass('nav-up');
                $("#headersec").removeClass('nav-down');
            } else {
                // Scroll Up
                console.log("show menu");
                $("#headersec").addClass('nav-down');
                $("#headersec").removeClass('nav-up');
            }

            lastScrollTop = st;
        }
    </script>
</head>

<!-- <?php
//$pagesList = array("who_we_are", "what_we_do", "technology", "careers", "contact");
//$_SESSION["current_page"] = "home";

?> -->

<body <?php body_class(); ?>>
		<section id="menubar">
				<nav class="navbar navbar-default"  style="margin-bottom: 0px !important; height: 100% !important; width:100%; background-color: white; border: 0px;">
				  <div class="container-fluid" style="height: 100% !important;">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="    margin-top: 4.5vmin;">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
				      </button>
				      <a class="navbar-brand" href="/zapcg/"><img id="websitelogo" src="<?php bloginfo('template_directory'); ?>/images/logo.png"/></a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar" style="border-top: 0px !important; float:left; padding-left:0; margin-top: 5vmin;">
				      <ul class="nav navbar-nav navbar-right" style="background-color: #fff !important;">
				        <li class="whowearepage"><a href="/zapcg/index.php/who-we-are/">Who we are</a></li>
				        <li class="whatwedopage"><a href="/zapcg/index.php/what-we-do/">What we do</a></li>
				        <!-- <li class="insightspage"><a href="/zapcg/index.php/insights/">Insights</a></li> -->
				        <li class="howwedopage"><a href="/zapcg/index.php/technology/">How we do</a></li>
				         <li class="careerspage"><a href="/zapcg/index.php/careers/">Careers</a></li>
				        <li class="contactpage"><a href="/zapcg/index.php/contact/">Contact</a></li>
				      </ul>
				      
				    </div>
				  </div>
				</nav>
		</section>
	
</body>
</html>


	<!-- <section id="menubar">
		<div id="menulogo">
			<img src="<?php //bloginfo('template_directory'); ?>/images/logo.png"/>
		</div>
		<div id="menulinks">
			<a href="/zapcg/index.php/who-we-are/">Who we are</a>
			<a href="/zapcg/index.php/what-we-do/">What we do</a>
			<a href="/zapcg/index.php/technology/">Technology</a>
			<a href="/zapcg/index.php/careers/">Careers</a>
			<a href="/zapcg/index.php/contact/">Contact</a> 
				
		</div>
	</section> -->