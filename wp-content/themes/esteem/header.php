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


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style123.css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-89935926-1', 'auto');
  ga('send', 'pageview');
 
</script>
<style>








#col {



}

#col {
  box-shadow: 0 2px 2px rgba(0,0,0,0.15), 0 2px 2px rgba(0,0,0,0.12);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

#col:hover {
  box-shadow: 0 14px 20px rgba(0,0,0,0.22), 0 4px 5px rgba(0,0,0,0.22);
}
#hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

#hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

#hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

#hovereffect h2 {

color:#fff;
text-align:center;
position:relative;
font-size:12px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}


#overlayid {

color:#fff;
text-align:center;
position:relative;
font-size:12px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}


#overlayid1 {

color:#fff;
text-align:center;
position:relative;

background:rgba(0,0,0,0.6);


-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding-bottom:10px;
}


#hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

#hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

#hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

#hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

#hovereffect:hover h2,p,#hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

#hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}

</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/feedback.css">
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#feedback').click(function(){
		$('#myModal').modal({
		
		});
	}); 
});



$(document).ready(function(){
	$('#circle_Container').click(function(){
		$('#myModal').modal({
		
		});
	}); 
});


$(document).ready(function(){
$('#myModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
	  $("input").removeClass("parsley-error");
	  $("div").removeClass("bt-flabels__error");
	// var link = document.getElementById('lable');

//link.style.visibility = 'hidden';

var appBanners = document.getElementsByClassName('lable'), i;

for (var i = 0; i < appBanners.length; i ++) {
    appBanners[i].style.visibility = 'hidden';
}





})
});















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
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/feedback.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-1.css"> 
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/media-query.css">
<link href="<?php bloginfo('template_directory'); ?>/css/footer.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/header_style.css">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


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

<body <?php body_class(); ?> style="z-index:-6;"> 
    
    <nav class="navbar navbar-default navbar-fixed-top" id="navigation_bar">
      <div class="container-fluid" id="nav_container">
        <div>
            <div  class="navbar-header nav_header_leftNoScroll " id="nav_header_left">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button> 
          <a class="navbar-brand " href="http://localhost/zapcg1/"><img class='websitelogoNoScroll' id="websitelogo" src="<?php bloginfo('template_directory'); ?>/images/logo.png"/></a>
          </div>
            <div class="navbar-header ZgapNoScroll" id="Zgap">
            </div>
        </div>
        <div class="collapse navbar-collapse myNavbarNoScroll " id="myNavbar">
          <ul class="nav navbar-nav navbar-right">

         <!--
            <li class=""><a href="http://localhost/zapcg1/index.php/who-we-are/">Who We Are</a></li>
            <li class=""><a href="http://localhost/zapcg1/index.php/what-we-do/">What We Do</a></li>
            <li class=""><a href="http://localhost/zapcg1/index.php/technology/">How We Do</a></li>
            <li class=""><a href="http://localhost/zapcg1/index.php/careers/">Careers</a></li> -->
  
  
     <li class=""><a href="http://localhost/zapcg1/index.php/who-we-are/">Who We Are</a></li>
            <li class=""><a href="http://localhost/zapcg1/index.php/what-we-do/">What We Do</a></li>
            <li class=""><a href="http://localhost/zapcg1/index.php/technology/">How We Do</a></li>
		     <!--	 <li class=""><a href="http://localhost/zapcg1/index.php/blogs/">Blogs</a></li>  -->

            <li class=""><a href="http://localhost/zapcg1/index.php/careers/">Careers</a></li>
  
  
  
<!--
            <li class=""><a href="/zapcg/index.php/who-we-are/">Who We Are</a></li>
            <li class=""><a href="/zapcg/index.php/what-we-do/">What We Do</a></li>
            <li class=""><a href="/zapcg/index.php/technology/">How We Do</a></li>
		<!--	 <li class=""><a href="/zapcg/index.php/all-blogs/">Blog</a></li>  -->
          <!--  <li class=""><a href="/zapcg/index.php/careers/">Careers</a></li>
	<!--		  <li class=""><a href="/zapcg/index.php/contact_us/">Contact Us</a></li>  -->

              
          </ul>
        </div>
      </div>
	  	

    </nav>
	
	
</body>
</html>

