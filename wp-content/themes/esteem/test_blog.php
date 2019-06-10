<?php 
/*
Template Name: TEST   
 */?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body >
	<?php get_header(); ?>
<section class="banner">


 <div class="banner-img-pos"> <img src="<?php bloginfo('template_directory'); ?>/images/what-we-do-banner.jpg"> </div>
<div class="container">
<div class="banner-cnt wht-wd"> 
  <p> "To me, ideas are worth nothing unless executed. <br> They are just a multiplier. Execution is worth millions."  </p>
   <h1 class="h2-bnnr-whowr">- Steve Jobs </h1>
</div>

</div>

</section> <!--- banner section ---->

<section class="section-3 tab-wt-wd" id="whoweare">
<div class="">


  <div id="TabbedPanels1" class="TabbedPanels wht-wd-tab">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">Product and IP Building</li>
      <li class="TabbedPanelsTab" tabindex="0">Standing up Start-up Ideas</li>
      <li class="TabbedPanelsTab" tabindex="0">Product Engineering Services</li>
    </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent"> <p class="cnt-wt-tb" id="infoDiv"> We build products for the Travel, Hospitality & Retail industry. <br> We also work with businesses to build products/IP from ground up. </p>
      <div class="tab-img-div">
        <div class="tab-1 img">  <p> <a href="#infoDiv" onmouseover="changeContent('infoDiv', 'DEVISE <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit.  ')" onmouseout="changeContent('infoDiv',orig)"> DEVISE </a> </p> </div>  
       <div class="tab-1 img"> <p> <a href="#infoDiv" onmouseover="changeContent('infoDiv', 'Evolve <br> Consectetur adipiscing elit. lorem ipsum dolor sit amet, ')" onmouseout="changeContent('infoDiv',orig)"> Evolve </a>  </p> </div>
       <div class="tab-1 img"> <p> <a href="#infoDiv" onmouseover="changeContent('infoDiv', 'Win <br> Dictum pretium nisl consequat eget. curabitur convallis nec . ')" onmouseout="changeContent('infoDiv',orig)"> Win </a> </p> </div>
      </div>
      
      
<section class="section-2 wht-wd">
<div class="container">
<?php 
 global $wpdb;
 $sql = "SELECT * FROM `wp_whatwedo_section1` WHERE group_name='Product and IP Building' And group_detail='Business Challenges'";
 $sqll=$wpdb->get_results($sql);
 ?>
 <?php 
foreach($sqll as $loc_info){

?>
<h2 class="head-sec"><?php echo $loc_info->group_detail ?></h2>
<p class="cnt-sec"> <?php echo $loc_info->group_paragraph ?>  </p>

<ul class="wht-busines"> 
<li> <span class="lsty-wht-busc"></span> <?php echo $loc_info->option1 ?> </li>
<li> <span class="lsty-wht-busc"></span> <?php echo $loc_info->option2 ?></li>
<li> <span class="lsty-wht-busc"></span> <?php echo $loc_info->option3 ?></li>
<li> <span class="lsty-wht-busc"></span> <?php echo $loc_info->option4 ?></li>
<?php } ?></ul>

</div>
</section> <!---  section 3 ---->

<section class="section-2 wht-hw-hlp">
<div class="container">
<?php 
 global $wpdb;
 $sql = "SELECT * FROM `wp_whatwedo_section1` WHERE group_name='Product and IP Building' And group_detail='HOW WE HELP'";
 $sqll2=$wpdb->get_results($sql);
 ?>
 <?php 
foreach($sqll2 as $loc_info1){

?>
<h2 class="head-sec"><?php echo $loc_info1->group_detail ?></h2>
<p class="cnt-sec"> <?php echo $loc_info1->group_paragraph ?> </p>

<ul class="wht-busines"> 
<li> <span class="lst-stl-blg"> </span> <?php echo $loc_info1->option1 ?> </li>
<li> <span class="lst-stl-blg"> </span> <?php echo $loc_info1->option2 ?> </li>
<li> <span class="lst-stl-blg"> </span> <?php echo $loc_info1->option3 ?> </li>
<li> <span class="lst-stl-blg"> </span> <?php echo $loc_info1->option4 ?> </li>
<?php } ?></ul>

</div>
</section>


<section class="section-3"> 
<div class="container">

<h2 class="head-sec"> leadership speak </h2>

<div class="leader-shp-wrp">
 <div class="ledr-cntr"> <p> <img src="<?php bloginfo('template_directory'); ?>/images/leader.jpg"> </p> <p class="l-name"> Mr. James </p>
   <p class="l-ceo"> CEO </p>
   <div class="center-wht-ld">
   <p class="in-para"> <span class="in-icn"> </span> </p>
   <p class="video-par cnt-sec"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam molestie fringilla leo, dictum pretium nisl consequat eget. Curabitur convallis nec purus non mollis. Nunc scelerisque molestie lectus quis viverra.  </p>
   </div>
   <p class="video-par"> <img src="<?php bloginfo('template_directory'); ?>/images/wht-video.jpg"> </p>
  </div>
</div>

</div>

</section> <!---  section 3 ---->

      
</div>

      <div class="TabbedPanelsContent">
       <p class="cnt-wt-tb"> We build products for the Travel, Hospitality & Retail industry. <br> We also work with businesses to build products/IP from ground up. </p>
        <p> <img src="<?php bloginfo('template_directory'); ?>/images/start-up.png"> </p>
        
        
<section class="section-2 wht-wd">
<div class="container">
<?php 
 global $wpdb;
 $sql = "SELECT * FROM `wp_whatwedo_section1` WHERE group_name='Standing up Start-up Ideas' And group_detail='Startup entrepreneur challenges '";
 $sqll2=$wpdb->get_results($sql);
 ?>
 <?php 
foreach($sqll2 as $loc_info2){

?>
<h2 class="head-sec"><?php echo $loc_info2->group_detail ?></h2>
<p class="cnt-sec"> <?php echo $loc_info2->group_paragraph ?>  </p>

<ul class="wht-busines"> 
<li> <span class="lsty-wht-busc"></span> <?php echo $loc_info2->option1 ?></li>
<li> <span class="lsty-wht-busc"></span> <?php echo $loc_info2->option2 ?></li>
<li> <span class="lsty-wht-busc"></span> <?php echo $loc_info2->option3 ?></li>
<li> <span class="lsty-wht-busc"></span> <?php echo $loc_info2->option4 ?></li>
<?php } ?></ul>

</div>
</section> <!---  section 3 ---->

<section class="section-2 wht-hw-hlp">
<div class="container">
<?php 
 global $wpdb;
 $sql = "SELECT * FROM `wp_whatwedo_section1` WHERE group_name='Standing up Start-up Ideas' And group_detail='How We Help'";
 $sqll3=$wpdb->get_results($sql);
 ?>
 <?php 
foreach($sqll3 as $loc_info3){

?>
<h2 class="head-sec"><?php echo $loc_info3->group_detail ?></h2>
<p class="cnt-sec"> <?php echo $loc_info3->group_paragraph ?>  </p>

<ul class="wht-busines">  
<li> <span class="lst-stl-blg"> </span>  <?php echo $loc_info3->option1 ?> </li>
<li> <span class="lst-stl-blg"> </span>  <?php echo $loc_info3->option2 ?> </li>
<li> <span class="lst-stl-blg"> </span>  <?php echo $loc_info3->option3 ?> </li>
<li> <span class="lst-stl-blg"> </span>  <?php echo $loc_info3->option4 ?> </li>
<?php } ?></ul>

</div>
</section>


<section class="section-3"> 
<div class="container">
<h2 class="head-sec"> leadership speak </h2>

<div class="leader-shp-wrp">
 <div class="ledr-cntr"> <p> <img src="<?php bloginfo('template_directory'); ?>/images/leader.jpg"> </p> <p class="l-name"> Mr. James </p>
   <p class="l-ceo"> CEO </p>
   <div class="center-wht-ld">
   <p class="in-para"> <span class="in-icn"> </span> </p>
   <p class="video-par cnt-sec"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam molestie fringilla leo, dictum pretium nisl consequat eget. Curabitur convallis nec purus non mollis. Nunc scelerisque molestie lectus quis viverra.  </p>
   </div>
   <p class="video-par"> <img src="<?php bloginfo('template_directory'); ?>/images/wht-video.jpg"> </p>
  </div>
</div>

</div>

</section> <!---  section 3 ---->
     
      </div>
      
      <div class="TabbedPanelsContent" style="padding:0;">
      
      <img src="<?php bloginfo('template_directory'); ?>/images/banner-prd-engg.jpg">
      
       <div class="col-md-12 prod-section-cnt"> <div class="container">
  <div class="prod-cnt-divs"> <p> <img src="<?php bloginfo('template_directory'); ?>/images/prod-img-1.jpg"> </p>
    <p> <b> Industry Focused </b> <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  </p></div>
  
   <div class="prod-cnt-divs"> <p>  <img src="<?php bloginfo('template_directory'); ?>/images/prod-img-2.jpg"> </p>
    <p> <b> Continuous Engineering Approach </b> <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  </p></div>
  
   <div class="prod-cnt-divs"> <p> <img src="<?php bloginfo('template_directory'); ?>/images/prod-img-3.jpg"> </p>
    <p> <b>Design & Development </b> <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  </p></div>
  
   <div class="prod-cnt-divs"> <p> <img src="<?php bloginfo('template_directory'); ?>/images/prod-img-4.jpg"> </p>
    <p> <b> Maintain & Support  </b> <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  </p></div>
  
</div>
</div>
       
       
       <section class="tab-2 whtwedo">
  <div class="container">
  
    <div id="TabbedPanels2" class="TabbedPanels wht-we-tab2">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0"> <span class="tab2-img timg-1 "> </span> <br> <span class="cnt-tb-dwn"> Conceptualization </span> </li>
        <li class="TabbedPanelsTab" tabindex="0"> <span class="tab2-img timg-2 "> </span> <br> <span class="cnt-tb-dwn"> Design </span> </li>
        <li class="TabbedPanelsTab" tabindex="0"> <span class="tab2-img timg-3 "> </span> <br> <span class="cnt-tb-dwn"> Delivery </span> </li>
      </ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent"> 
        <div class="cnt-tab2-whwedo">
  <h1>Business Need </h1>
        <ul> <li> Lorem ipsum dolor sit amet</li>
<li>Curabitur laoreet leo porta scelerisque</li>
<li>Maecenas nunc nulla</li>
<li>Nullam molestie augue id ante</li>
<li>Maecenas semper, arcu</li>
<li>Curabitur laoreet leo porta scelerisque</li>
<li>Lorem ipsum dolor sit amet </li> </ul></div>

<div class="cnt-tab2-whwedo">
  <h1> How We Help </h1>
        <ul> <li> Lorem ipsum dolor sit amet</li>
<li>Curabitur laoreet leo porta scelerisque</li>
<li>Maecenas nunc nulla</li>
<li>Nullam molestie augue id ante</li>
<li>Maecenas semper, arcu</li>
<li>Curabitur laoreet leo porta scelerisque</li>
<li>Lorem ipsum dolor sit amet </li> </ul></div>

        </div>
        
        <div class="TabbedPanelsContent">Content 2</div>
        <div class="TabbedPanelsContent">Content 2</div>
      </div>
    </div>
    
    <div class="col-xs-12 cnter-btn">
<a href="#" class="btn btn-primary" style="  text-transform: uppercase;  padding: 7px 17px 5px 17px;"> <span style="float:left;">Get in touch today</span>  </a>
</div>

  </div>
</section>


<section class="section-2 solu-pad tab-sec-whtwd" style="background: #fff;"> 


<?php query_posts('category_name=BLOG&showposts=2&post_status=publish,future');
while (have_posts()) : the_post();

  // do whatever you want
?>
<div class="post-wrap">
<h3 class="post-title head-sec1"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3><br>
<div class="post-timecmtwrap">
<span class="main-sp"><span class="glyphicon glyphicon-time" aria-hidden="true"></span><?php the_time('M.d, Y') ?></span>
<span class="main-sp"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
</div>
<p class="post-para"><?php the_content(); ?></p><br>
<?php
endwhile;
?>
<br>
</div>



 
 
</section>

        
      </div>
    </div>
  </div>
  
</div>
</section> <!---  section 2 ---->


<section class="section-whowr-cnt"> 
<div class="container">

<h2 class="head-sec"> Continue Exploring </h2>
<h2 class="sec-two">Solutions </h2>

<div class="whowr-tab1 cnt-exp"> <h4> Hospitality </h4>
 <p> Donec dignissim orci rhoncus nibh cursus, id eleifend est luctus.   </p>  <a href="#"> View More </a>
  </div>
  
  <div class="whowr-tab1 cnt-exp"> <h4> Travel </h4>
 <p> Donec dignissim orci rhoncus nibh cursus, id eleifend est luctus.  </p>  <a href="#"> View More </a>
  </div>
  <div class="whowr-tab1 cnt-exp"> <h4> Insurance </h4>
 <p> Donec dignissim orci rhoncus nibh cursus, id eleifend est luctus.   </p>  <a href="#"> View More </a>
  </div>

</div>
</section> <!---  section 3 ---->


<?php get_footer(); ?>

 <!-- wrapper -->


<script type="text/javascript">
function changeContent(infoDiv, msg) {
  var el = document.getElementById(infoDiv);
  if (infoDiv) {
    el.innerHTML = msg;
  }
}

</script>

<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
</script>
</body>



<script src="<?php bloginfo('template_url'); ?>/jss/js/bootstrap.min.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/jss/js/jquery.min.js"> </script>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"> </script>-->

<!--<script>
$(document).ready(function(){
  $('.slider4').bxSlider({
    slideWidth: 249,
    minSlides: 2,
    maxSlides: 4,
    moveSlides: 1,
    slideMargin: 61,
	pager: false
  });
  });
</script>

<script>
	 $('.slider4').Slider4({
  auto: false,
  autoControls: true
  

});
  </script>-->


</html>