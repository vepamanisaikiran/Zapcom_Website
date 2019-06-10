<?php 
/*
Template Name: Solution   
 */?>

<!DOCTYPE HTML>
<html>
<head>

<title>ZapCom Group| Solutions</title>
<meta name="description" content="With the world turning into a global village, hospitality industry has grown by leaps and bounds. ">
    
    
    <style>
	
	/*.img-dwn {
    bottom: 49px !important;
}*/
</style>
		<style>
		
		.banner-img-pos img {
			margin-top: -1vmin;
		}
		
	</style>
    
</head>

<body >
	
		<?php get_header(); ?>


<section class="banner">


 <div class="banner-img-pos"> <img src="<?php bloginfo('template_directory'); ?>/images/solution-nw.jpg"> </div>
<div class="container">
<div class="banner-cnt who-we-are" style="  display: none;"> 
  
   <h1 class="h2-bnnr-whowr">@WeareZapcom</h1>
  <p> Your trusted partner for Incubating Innovative Ideas, Sourcing, building solutions and Go-To market strategy</p>
   <h1 class="h2-bnnr-whowr">Our Philosophy </h1>
  <p> We have no clients, we have partners and we are in longer term journey together</p>
</div>
<div class="img-dwn"> <a href="#whoweare"> <span class="dwn-sprt"> </span> </a> </div>

</div>

</section> <!--- banner section ---->

<section class="section-3 solu-pad" id="whoweare">
<div class="container">
<h2 class="head-sec"> Offerings </h2>
<!--<h3 class="cnt-hd-sec">Your trusted partner for Incubating Innovative Ideas, Sourcing, building  solutions and Go-To market strategy </h3>-->

<p class="cnt-sec"> Lean, agile and robust technological advancement is the verve here. ZapCom has been playing an active role in the changing market scenario with its offerings in software product development in Hospitality, Travel, and Retail industry. ZapCom has taken a keen interest in analyzing the changing market scenario and augmenting the necessary verticals and deliverables related to these industries.
ZapCom provides a unique mix of industry specific business architecture expertise, technical depth of software life cycle management and work collaboratively with partners in defining and realizing IT strategy that aligns with business specific needs.
ZapCom brings in years of IT experience in solving niche business problems related to the specific industry. As a part of the engagement, ZapCom provides previously leveraged software tools, technology frameworks, application transformation skills, portfolio rationalization techniques and provides the point of view in improving return on investment that fits organizational needs.
 </p>

<div id="TabbedPanels1" class="VTabbedPanels vertical-tab">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">Travel</li>
      <li class="TabbedPanelsTab" tabindex="0">Hospitality</li>
      <li class="TabbedPanelsTab" tabindex="0">Retail</li>
      <!--<li class="TabbedPanelsTab" tabindex="0">Lorem</li>-->
    </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
      <?php 
  global $wpdb;
  $sql="Select * from wp_solution_group where group_name='Travel' ";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info){

?>
      <p class="cnt-sec"> <?php echo $loc_info->group_detail ?> </p>
    <?php } ?> 
    
      <div id="TabbedPanels2" class="VTabbedPanels vertical-tab subt cnt-sec">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">Air</li>
      <li class="TabbedPanelsTab" tabindex="0">Cruise</li>
      <!--<li class="TabbedPanelsTab" tabindex="0">Cars</li>-->
    </ul>
    
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent"><b class="hd-subver">Air </b><?php 
  global $wpdb;
  $sql="Select * from wp_solution_tab where tid='1' And tab='Air'";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info1){

?> <br><?php echo $loc_info1->group_paragraph ?> <?php } ?>
       </div>
       
      <div class="TabbedPanelsContent"> <b class="hd-subver">Cruise </b> : <br> <?php 
  global $wpdb;
  $sql="Select * from wp_solution_tab where tid='2' And tab='Cruise'";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info2){

?> <?php echo $loc_info2->group_paragraph ?> <?php } ?> </p>
        </div>
        
     <!-- <div class="TabbedPanelsContent"><b class="hd-subver">Cars </b>: <br>  <?php 
  global $wpdb;
  $sql="Select * from wp_solution_tab where tid='3' And tab='Cars'";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info3){

?> <?php echo $loc_info3->group_paragraph ?> <?php } ?> </p>
       </div>-->
    </div>
  </div>
      
       </div>
      
      
      <div class="TabbedPanelsContent"> <p class="cnt-sec"> <b class="hd-subver">Hospitality </b> <br><?php 
  global $wpdb;
  $sql="Select * from wp_solution_group where group_name='Hospitality' ";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info){

?>  <?php echo $loc_info->group_detail ?><?php } ?></p>
      </div>
      
      <div class="TabbedPanelsContent"> <p class="cnt-sec"> <b class="hd-subver">Retail</b> <br><?php 
  global $wpdb;
  $sql="Select * from wp_solution_group where group_name='Retail' ";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info){

?>  <?php echo $loc_info->group_detail ?><?php } ?> </p>
      </div>
      
    <div class="TabbedPanelsContent">  <p class="cnt-sec"> <b class="hd-subver">Lorem </b> <br> <?php 
  global $wpdb;
  $sql="Select * from wp_solution_group where group_name='Lorem' ";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info){

?>  <?php echo $loc_info->group_detail ?><?php } ?> </p>
      </div>
      
    </div>
  </div>
  
  <div id="Accordion1" class="Accordion solutn" tabindex="0" style="display:none;">
   <div class="AccordionPanel">
     <div class="AccordionPanelTab">Travel</div>
     <div class="AccordionPanelContent">
      <p class="cnt-sec"><?php 
  global $wpdb;
  $sql="Select * from wp_solution_group where group_name='Travel' ";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info){

?>
   <?php echo $loc_info->group_detail ?> 
    <?php } ?>  </p>
      
      
      <div id="Accordion2" class="Accordion sub-accrd cnt-sec" tabindex="0">
        <div class="AccordionPanel">
          <div class="AccordionPanelTab">Air</div>
          <div class="AccordionPanelContent">
          <p class="cnt-sec"> <?php 
  global $wpdb;
  $sql="Select * from wp_solution_tab where tid='1' And tab='Air'";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info1){

?> <br><?php echo $loc_info1->group_paragraph ?> <?php } ?></p>
       
           </div>
        </div>
        <div class="AccordionPanel">
          <div class="AccordionPanelTab">Cruise</div>
          <div class="AccordionPanelContent"><p class="cnt-sec">
		  <?php 
  global $wpdb;
  $sql="Select * from wp_solution_tab where tid='2' And tab='Cruise'";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info2){

?> <?php echo $loc_info2->group_paragraph ?> <?php } ?> </p>
		  
		  
		  </p></div>
        </div>
      </div> <!-- Accordion2 for -- Air -- -->
      
     </div> <!-- AccordionPanelContent for -- Travel -- -->
   </div>
   
   <div class="AccordionPanel">
     <div class="AccordionPanelTab">Hospitality</div>
     <div class="AccordionPanelContent">
     <p class="cnt-sec"> <?php 
  global $wpdb;
  $sql="Select * from wp_solution_group where group_name='Hospitality' ";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info){

?>  <?php echo $loc_info->group_detail ?><?php } ?></p>
     </div>
   </div>
   
   <div class="AccordionPanel">
     <div class="AccordionPanelTab">Retail</div>
     <div class="AccordionPanelContent">
     <p class="cnt-sec"> <?php 
  global $wpdb;
  $sql="Select * from wp_solution_group where group_name='Retail' ";
  $sqll=$wpdb->get_results($sql);
  //echo $sqll;
  ?>
  <?php 
foreach($sqll as $loc_info){

?>  <?php echo $loc_info->group_detail ?><?php } ?> </p>
     </div>
   </div>
   
   
   
 </div>

  <!--- Accordion1 ---->
 
 
</div>



</section> <!---  section 2 ---->


<section class="section-2 solu-pad"> 

<?php query_posts('category_name=SOLUTION&showposts=1&post_status=publish,future');
while (have_posts()) : the_post();

  // do whatever you want
?>
<div class="post-wrap">
<h3 class="post-title head-sec1"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3><br>
<div class="post-timecmtwrap">
<span class="main-sp"><span class="glyphicon glyphicon-time" aria-hidden="true"></span><?php the_time('M.d, Y') ?></span>
<span class="main-sp"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
</div>
<p class="post-para"><img src="<?php bloginfo('template_directory'); ?>/images/blog-1.jpg"><?php the_content(); ?></p><br>
<?php
endwhile;
?>
<br>
</div>


</section> <!---  section 3 ---->

<section class="section-whowr-cnt"> 
<div class="container">

<h2 class="head-sec"> Continue Exploring </h2>
<h2 class="sec-two">Technology </h2>

<div class="whowr-tab1 cnt-exp"> <h4> Cloud </h4>
 <p> ZapCom believes in creating technology that is sophisticated and simple which in turn makes it important and invisible. The amazing quality of ZapCom products enables its clients to achieve greater heights of success by comprehensive, connected and flexible approach.
  </p>  <a href="http://localhost/zapcg1/index.php/technology/"> View More </a>
  </div>
  
  <div class="whowr-tab1 cnt-exp"> <h4> Big-data </h4>
 <p> With huge data, storing and managing and streamlining data becomes a laborious task. We can help deliver a competitive strategy on a unified architecture with data liquidity, tailored scalability, security and privacy. </p>  <a href="http://localhost/zapcg1/index.php/technology/"> View More </a>
  </div>
  <div class="whowr-tab1 cnt-exp"> <h4> m-Commerce </h4>
 <p> With the world getting fitted into a mobile, m-Commerce is the in thing. People all over the world are increasingly switching to mobiles for all their business purpose. ZapCom gives its clients the benefit of using m-Commerce with the easy interface which is robust and highly scalable.
 </p>  <a href="http://localhost/zapcg1/index.php/technology/"> View More </a>
  </div>
  </div>
  
</section> <!---  section 3 ---->



<?php get_footer(); ?>

 <!-- wrapper -->

<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1", { enableAnimation: true, useFixedPanelHeights: false });
var Accordion2 = new Spry.Widget.Accordion("Accordion2", { enableAnimation: true, useFixedPanelHeights: false, defaultPanel: -1 });

</script>

<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");


</script>
</body>





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


<script src="<?php bloginfo('template_url'); ?>/SpryAssets/SpryURLUtils.js"> </script>

<script type="text/javascript">
var params = Spry.Utils.getLocationParamsAsObject();
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1", {defaultTab: params.tab ? params.tab : 0});
</script>


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
