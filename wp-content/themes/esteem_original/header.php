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
    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-89935926-1', 'auto');
  ga('send', 'pageview');
 
</script>

<!--<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-1.css"> 
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/media-query.css">

<!--<link href="css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />-->
<!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css"> -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- <script src="<?php bloginfo('template_url'); ?>/js/jss/responsive-tabs.min.js" type="text/javascript"></script> -->
<!-- <script src="<?php bloginfo('template_url'); ?>/SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script> -->


<script>
    $(function() {
      $('a[href*="#"]:not([href*="#wtwedo_collapse"], [href*="#leader"])').click(function() {
      // $('a[href*="#"]:[href*="#gotoTop"]').click(function() {
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
<link href="<?php bloginfo('template_directory'); ?>/css/footer.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/header_style.css">


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


<!--<link href="css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />-->




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
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.12.3.js"></script>
    
    <script type="text/javascript">
        //$.noConflict();
        // 
        /*var dom = {};
        dom.query = jQuery.noConflict(true);*/
        
        $(document).ready(function() {
            pathname = window.location.pathname;
            console.log('path = '+ pathname);
            $('.myNavbarOnScroll a[href="'+pathname+'"]').addClass('activeOnScroll');
            $('.myNavbarNoScroll a[href="'+pathname+'"]').addClass('activeNoScroll');
            window.scrollTo(0,0);
            
            st = $(window).scrollTop();            
        })
        
        jQuery.noConflict();
        didScroll = false;
        lastScrollTop = 0;
        delta = 5;
        navbarHeight = $('#navigation_bar').height();

        $(window).scroll(function(event){
             navbarHeight =  $('#myNavbar').height();
            st = $(window).scrollTop();
           // console.log( "onscroll"+ st);
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
            {
                return;
            }    
            
               
//            $( ".navbar" ).animate({height: 50} ,{duration:100});
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > 0 && st > navbarHeight){
                 $('#myNavbar').removeClass('myNavbarNoScroll');
                 $('#nav_header_left').removeClass('nav_header_leftNoScroll');
                 $('#Zgap').removeClass('ZgapNoScroll');
                 $('#websitelogo').removeClass('websitelogoNoScroll');
                 $('#myNavbar').addClass('myNavbarOnScroll');
                 $('#nav_header_left').addClass('nav_header_leftOnScroll');
                 $('#Zgap').addClass('ZgapOnScroll');
                 $('#websitelogo').addClass('websitelogoOnScroll');
                 $('#nav_container').addClass('OnScroll');
                 $('.myNavbarOnScroll a[href="'+pathname+'"]').removeClass('activeNoScroll');
                 $('.myNavbarOnScroll a[href="'+pathname+'"]').addClass('activeOnScroll');
                 
            } else if(st < navbarHeight ) {
                 $('#myNavbar').removeClass('myNavbarOnScroll');
                 $('#nav_header_left').removeClass('nav_header_leftOnScroll');
                 $('#Zgap').removeClass('ZgapOnScroll');
                 $('#websitelogo').removeClass('websitelogoOnScroll');
                 $('#myNavbar').addClass('myNavbarNoScroll');
                 $('#nav_header_left').addClass('nav_header_leftNoScroll');
                 $('#Zgap').addClass('ZgapNoScroll');
                 $('#websitelogo').addClass('websitelogoNoScroll');
                 $('#nav_container').removeClass('OnScroll');
                $('.myNavbarNoScroll a[href="'+pathname+'"]').addClass('activeNoScroll');
                $('.myNavbarNoScroll a[href="'+pathname+'"]').removeClass('activeOnScroll');
            }

            lastScrollTop = st;
        });

    </script>

   
</head>

<!-- <?php
//$pagesList = array("who_we_are", "what_we_do", "technology", "careers", "contact");
//$_SESSION["current_page"] = "home";

?> -->

<body <?php body_class(); ?> > 
    
    <nav class="navbar navbar-default navbar-fixed-top" id="navigation_bar">
      <div class="container-fluid" id="nav_container">
        <div>
            <div  class="navbar-header nav_header_leftNoScroll " id="nav_header_left">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button> 
          <a class="navbar-brand " href="/zapcg/"><img class='websitelogoNoScroll' id="websitelogo" src="<?php bloginfo('template_directory'); ?>/images/logo.png"/></a>
          </div>
            <div class="navbar-header ZgapNoScroll" id="Zgap">
            </div>
        </div>
        <div class="collapse navbar-collapse myNavbarNoScroll " id="myNavbar">
          <ul class="nav navbar-nav navbar-right">

            
            <li class="" style="c"><a href="http://localhost/zapcg1/index.php/who-we-are/">Who We Are</a></li>
            <li class=""><a href="http://localhost/zapcg1/index.php/what-we-do/">What We Do</a></li>
            <li class=""><a href="http://localhost/zapcg1/index.php/technology/">How We Do</a></li>
            <li class=""><a href="http://localhost/zapcg1/index.php/careers/">Careers</a></li>
              
<!--
            <li class=""><a href="/zapcg/index.php/who-we-are/">Who We Are</a></li>
            <li class=""><a href="/zapcg/index.php/what-we-do/">What We Do</a></li>
            <li class=""><a href="/zapcg/index.php/technology/">How We Do</a></li>
            <li class=""><a href="/zapcg/index.php/careers/">Careers</a></li>
-->
              
          </ul>
        </div>
      </div>
    </nav>
</body>
</html>

