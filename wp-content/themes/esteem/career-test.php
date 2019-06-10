<?php 
/*
Template Name: Careers ZapCom  
 */?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ZapCom | Careers</title>
 <meta name="description" content="ZapCom provides the holistic environment wherein other than the right remuneration the worker develops the right skills and ethics to become a globally enterprising individual. "> 
</head>

<body>
<?php get_header(); ?>
        <section class="banner">
<?php 
 global $wpdb;
 $sql = "SELECT * FROM `wp_career_career_banner`";
 $sqll=$wpdb->get_results($sql);
 ?>
 
 <?php 
foreach($sqll as $post_name){

?>

 <div class="banner-img-pos carrer-b"> <img src="http://wpdemo.superbcart.com/magnum-honda/wp-admin/<?php echo $post_name ->career_banner ?>"/> </div>
<div class="container">
<!--<div class="banner-cnt career-b"> 
  <p> Work at Zapcom Group </p>
   </div>-->

</div>

</section> <!--- banner section ---->

<section class="section-3" id="whoweare">
<div class="container">
<h3 class="cnt-hd-sec"><?php echo $post_name ->group_detail ?> </h3>

<p class="cnt-sec" style="text-align:center"> <?php //echo $post_name ->group_paragraph ?> </p>
 <p class="MsoNormal" style="text-align:center"><span style="line-height: 18.2px; text-align: start;color: #777777;">Working with a start-up is always interesting and challenging. And what more, everyone is an equal among equals. ZapCom is the right place for people who refuse to obey the usual norms and want to test unchartered waters. ZapCom nurtures the innovative and experimental inquisitiveness in its workers and gives full support to bloom and flourish.</span></p>
<?php } ?>
<div class="hd-cerrs"> <h4>Choose your destiny rather than run behind destiny!</h4>
  <p class="MsoNormal" style="text-align:center"><span style="line-height: 18.2px; text-align: start;color: #777777;">The journey at ZapCom begins with a bang. Not only will you be introduced to the massive scale at which we work, but also embrace the fun-loving, self-driven, energetic and transparent work culture that ZapCom prides itself in.</span></p>
 <p class="MsoNormal" style="text-align:center"><span style="line-height: 18.2px; text-align: start;color: #777777;">Join a Passionate, Tech-Savvy, and more importantly 'People-Oriented' Team!  Most of the times the need goes beyond monetary benefits and at ZapCom these needs are taken care of.
At ZapCom, we are seeking talented people to help us take personalization to a new level of sophistication and simplicity. We think creativity is important, we value honesty and teamwork, and moreover we're having a lot of fun creating a valuable product. 
</span></p>
  
</div>
<h2 class="head-sec carer-hd"> What is it like to work at Zapcom? </h2>
<p class="MsoNormal" style="text-align:center"><span style="line-height: 18.2px; text-align: start;color: #777777;">We're building a company that people love. ZapCom is a company that will stand the test of time. So we take pride in providing an environment to invest in our people with best benefits and optimize for their long term happiness. <br>
We don't believe in just thinking, we believe in implementing our ideas and seeing the impact it has on the world around us.
</span><br><br></p>

<div class="snaps-contr">
 <div class="col-md-6 rt-img-cr"> 
 <div class="snap-div-cr"> <img src="<?php bloginfo('template_directory'); ?>/images/career-1.jpg"> </div>
<div class="snap-div-cr"> <img src="<?php bloginfo('template_directory'); ?>/images/career-4.jpg"> </div>
<div class="snap-div-cr"> <img src="<?php bloginfo('template_directory'); ?>/images/career-2.jpg"> </div>
<div class="snap-div-cr"> <img src="<?php bloginfo('template_directory'); ?>/images/career-3.jpg"> </div>
</div>
 <div class="col-md-6 rt-img-cr" style="width: 46.5%;"  > 
<div class="snap-div-cr1"> <img src="<?php bloginfo('template_directory'); ?>/images/career-5.jpg"> </div>
</div>

</div>

</div>

</section> <!---  section 3 ---->

<section class="section-3 perk-pos" >

<div class="ban-perk"> <img src="<?php bloginfo('template_directory'); ?>/images/careers-6_02.jpg"> </div>

<div class="perk-cnt-career">
<div class="container">

<h2 class="head-sec cr-bnft"> The Perks and Benefits </h2>

<p class="cnt-sec"> Our team competes at the highest level. How do we keep the best talent happy? At ZapCom, we nurture a uniquely engaging workplace that delivers. we work hard to play harder. That's where the perks of work come into play. Our benefits make life sweeter. For starters, you'll enjoy:  </p>

<div class="static-tab-whowr">
<div class="carr-benft"> 
<div class="img-stat"> <span class="crpage benfit-1"> </span> </div>
 <p> Weekly Mixers  </p>  
  </div>
<div class="carr-benft"> 
<div class="img-stat"> <span class="crpage benfit-2"> </span> </div>
 <p> Hi-end Laptops  </p>  
  </div>

<div class="carr-benft"> 
<div class="img-stat"> <span class="crpage benfit-3"> </span> </div>
 <p> Competitive salaries </p> 
  </div>
<div class="carr-benft"> 
<div class="img-stat"> <span class="crpage benfit-4"> </span> </div>
 <p> Cutting-Edge Technologies </p> 
  </div>
  <div class="carr-benft"> 
<div class="img-stat"> <span class="crpage benfit-5"> </span> </div>
 <p> Health Insurance </p> 
  </div>
  <div class="carr-benft"> 
<div class="img-stat"> <span class="crpage benfit-6"> </span> </div>
 <p> Catered Lunch Daily </p> 
  </div>
  <div class="carr-benft"> 
<div class="img-stat"> <span class="crpage benfit-7"> </span> </div>
 <p> Flexible Timings </p> 
  </div>
  <div class="carr-benft"> 
<div class="img-stat"> <span class="crpage benfit-8"> </span> </div>
 <p>Hackathon </p> 
  </div>
  
  
</div>

</div>

</div>

</section> <!---  section 3 ---->


<section class="section-2 career-tab"> 
<div class="container">
<h2 class="head-sec cr-bnft" style="margin-top: 0;"> Open Positions </h2>

<div id="TabbedPanels1" class="TabbedPanels carrer-tabpanl">
  <ul class="TabbedPanelsTabGroup">
    <!--<li class="TabbedPanelsTab" tabindex="0">Marketing</li>-->
    <li class="TabbedPanelsTab" tabindex="0">Design</li>
    <li class="TabbedPanelsTab" tabindex="0">Analyst</li>
    <li class="TabbedPanelsTab" tabindex="0">Administrator</li>
    <li class="TabbedPanelsTab" tabindex="0">Development</li>
    <!--<li class="TabbedPanelsTab" tabindex="0">Projects</li>-->
  </ul>
  <div class="TabbedPanelsContentGroup cnt-sec tab-cnt-cr">
  
    <div class="TabbedPanelsContent"> <h3 class="tabcnt-hd-cr"> Design </h3>
     <p>      <?php
	  global $wpdb;
	  $sql="select * from wp_career_job_description where position_name='Design' and desination_name='Website Designer'";
	  //echo $sql;
	  $sql1=$wpdb->get_results($sql);
	  ?><?php
foreach($sql1 as $post_name){
?> <p> <?php echo $post_name->job_description ?> <?php 
} ?></p></p>
<form method="post" action="http://wpdemo.superbcart.com/magnum-honda/apply/"> <input type="hidden" name="position" value="Designer" />
<div> <input type="submit" name="submit" value="Apply Now" class="btn btn-apply"/> </div> </form>
</div>
      
    <div class="TabbedPanelsContent"> <h3 class="tabcnt-hd-cr"> Senior Business Analyst  </h3>
    <p>       <?php
	  global $wpdb;
	  $sql="select * from wp_career_job_description where position_name='Analyst' and desination_name='Analyst'";
	  //echo $sql;
	  $sql1=$wpdb->get_results($sql);
	  ?><?php
foreach($sql1 as $post_name){
?> <p> <?php echo $post_name->job_description ?> <?php 
} ?></p></p>
<form method="post" action="http://wpdemo.superbcart.com/magnum-honda/apply/"> <input type="hidden" name="position" value="Senior Business Analyst" />
<div> <input type="submit" name="submit" value="Apply Now" class="btn btn-apply"/> </div> </form>
      </div>
      
    <div class="TabbedPanelsContent"> <h3 class="tabcnt-hd-cr">Administrator </h3>
   <p>       <?php
	  global $wpdb;
	  $sql="select * from wp_career_job_description where position_name='Administrator' and desination_name='Administrator'";
	  //echo $sql;
	  $sql1=$wpdb->get_results($sql);
	  ?><?php
foreach($sql1 as $post_name){
?> <p> <?php echo $post_name->job_description ?> <?php 
} ?></p></p>
<form method="post" action="http://wpdemo.superbcart.com/magnum-honda/apply/"> <input type="hidden" name="position" value="Administrator" />
<div> <input type="submit" name="submit" value="Apply Now" class="btn btn-apply"/> </div> </form>
      </div>
      
    <div class="TabbedPanelsContent"> 
    
    <div id="Accordion2" class="Accordion" tabindex="0">
      <div class="AccordionPanel">
     
      
        <div class="AccordionPanelTab tabcnt-hd-cr"> Sr. System Engineer </div>
        <div class="AccordionPanelContent">
            <?php
	  global $wpdb;
	  $sql="select * from wp_career_job_description where position_name='Development' and desination_name='Sr. System Engineer'";
	  //echo $sql;
	  $sql1=$wpdb->get_results($sql);
	  ?><?php
foreach($sql1 as $post_name){
?> <p> <?php echo $post_name->job_description ?> <?php 
} ?></p>
     <form method="post" action="http://wpdemo.superbcart.com/magnum-honda/apply/"> <input type="hidden" name="position" value="Sr. System Engineer" />
<div> <input type="submit" name="submit" value="Apply Now" class="btn btn-apply"/> </div> </form>
       </div>
       
      </div>
      
      <div class="AccordionPanel">
        <div class="AccordionPanelTab tabcnt-hd-cr">Sr. Java Developer</div>
        <div class="AccordionPanelContent">
          <p>      <?php
	  global $wpdb;
	  $sql="select * from wp_career_job_description where position_name='Development' and desination_name='Sr. Java Developer'";
	  //echo $sql;
	  $sql1=$wpdb->get_results($sql);
	  ?><?php
foreach($sql1 as $post_name){
?> <p> <?php echo $post_name->job_description ?> <?php 
} ?></p></p>
      
      <form method="post" action="http://wpdemo.superbcart.com/magnum-honda/apply/"> <input type="hidden" name="position" value="Sr. Java Developer" />
<div> <input type="submit" name="submit" value="Apply Now" class="btn btn-apply"/> </div> </form>
        
        </div>
      </div>
    </div>
    
      </div>
      
  </div>
</div>


</div>
</section> <!---  section-2 career-tab---->

<section class="section-3">
<div class="container">
<h3 class="cnt-hd-sec"> When you join a startup you'll have the opportunity to have unparallel impact. <br> <span style="color:#0E0202;">You'll have a say in product, culture and company direction from day one. </span> </h3>

<div class="static-tab-whowr carr-div">
<div class="whowr-tab1"> 
<div class="img-stat"> <span class="career-img img-dwn-1"> </span> </div>

 <p> Work with the smartest, most innovative people in the world to solve the hardest problem.  </p>  
  </div>
<div class="whowr-tab1"> 
<div class="img-stat"> <span class="career-img img-dwn-2"> </span> </div>
 <p> You will matter - Your contribution will be felt. </p>  
  </div>
<div class="whowr-tab1"> 
<div class="img-stat"> <span class="career-img img-dwn-3"> </span> </div>
 <p> You will have fun (lots of it), and you'll love what you do.</p>  
  </div>
</div>


</div>
</section>

<section class="section-whowr-cnt"> 
<div class="container">

<h2 class="head-sec"> Continue Exploring </h2>
<h2 class="sec-two">Who we are</h2>

<div class="ind-cont-expl">  <div class="cnt-ind-div1"> <img src="<?php bloginfo('template_url'); ?>/images/prd-img-ct.png"> </div>

<?php 
  global $wpdb;
  $sql = mysql_query("SELECT * FROM wp_what_we_do");
  $loc_info=mysql_fetch_array($sql);
  //echo $loc_info;
  //$sqll=$wpdb->get_results($sql);
  //echo $sqll;
  //foreach($sqll as $loc_info){
  ?>
<div class="ind-cont cnt-exp"> <!--<h4 style="font-weight: normal;color: #fff;"> We are Zapcom </h4>-->
 <p style="font-family: ralewaylight;"><?php echo $loc_info['group_detail']; ?>   </p>  <a href="http://wpdemo.superbcart.com/magnum-honda/who-we-are/" style="color: #fff;font-size: 12px; text-decoration: underline;"> View More </a>
  </div>
  
  </div>
 <?php
//}
?>
</div>
</section>
 

 <!---  section 2 ---->

 <!---  section 3 ---->


<?php get_footer(); ?> <!-- wrapper -->


<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var Accordion1 = new Spry.Widget.Accordion("Accordion1", { useFixedPanelHeights: false });
var Accordion2 = new Spry.Widget.Accordion("Accordion2", { useFixedPanelHeights: false });
</script>






<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


<script>
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
  </script>




</body>
</html>