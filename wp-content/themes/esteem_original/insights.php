<?php
/*
Template Name:Insights
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ZapCom Group| Insights</title>
<meta name="description" content="We are passionate about transforming innovative ideas into great products. ">
<style>
.morelink, .btn-more {
    background: rgba(205, 205, 205, 0.46);
    height: 25px;
    width: 25px !important;
    border-radius: 50%;
    text-align: center;
    font-family: robotoregular;
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
		
</style>
	
<style>
	.tech-sec:nth-child(even){
		background-color: rgba(238,238,238,1);
	}
	.tech-sec{
		text-align: left;
		padding: 5% 5%;
		float: left;
		width: 100%;
		background: #fff;
		/*height:80vh;*/
		/*border-top: 5px solid #c7c7c7;*/
	}
	.tech-heading{
		font-size:7vmin;
		margin-bottom: 3%;
		font-family: 'ralewaybold' !important;
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
	
</head>
<body class="insightspage">
	<header class="nav-down" id="headersec">
        <?php get_header(); ?>
    </header>


    
<main id=maincontent>

<section class="banner">


 <div class="banner-img-pos"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-technology2.jpg" style="margin-top: -4vmin !important; width:100%;"> </div> 

 <div class="container">

<!--<div class="img-dwn"> <a href="#whoweare"> <span class="dwn-sprt"> </span> </a> </div>-->

</div>

</section>


	<hr/>
	
<section id="tech-cloud" class="tech-sec">
	<h2 class="tech-heading">
		Architecting Cloud-Aware Applications
	</h2>
	<p class="para1">
		With cloud computing, applications are built differently, run differently, and consumed differently. These differences require new modes of thinking and an understanding of the design patterns that achieve the best results. P2V approach of deploying a multi-tier application on a cloud infrastructure prevents applications from taking advantage of the unique capabilities of the cloud.
	</p>
	<p class="para2">
		ZapCom Architects can assist you in creating applications that are resilient to failure &amp; latency, secure, location independent and elastically scalable, with service composability.
	</p>
</section>
	
	
	

	
	

	
</main>	
	
 <!-- wrapper -->
<?php get_footer(); ?>

<script type="text/javascript">
<!--var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");-->
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1",{contentIsOpen:false, duration:200});
</script>


<script src="<?php bloginfo('template_url'); ?>/js/readmore.js"> </script>

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
  </script>
  
</body>
</html>

