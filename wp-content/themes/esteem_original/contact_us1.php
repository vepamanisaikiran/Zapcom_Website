<?php 
/*
Template Name: Contact Us1
 */?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ZapCom Group| Contact</title>
<meta name="description" content="To know more about us, and let us know how we can help you. ">
<meta name="viewport" content="width=device-width, intial-scale=1.0">

<!---meta name="author" content="Design by - N Balasubramanya (n.balasubramanyam@radical.co.in)"---->

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<style>
		
	.banner-img-pos img {
		margin-top: -1vmin;
	}
		
</style>

</head>

<body class="contactpage">
<header class="nav-down" id="headersec">
        <?php get_header(); ?>
    </header>


   
<main id=maincontent>
		
		<section class="banner">



<div class="banner-img-pos carrer-b"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/career-banner.jpg" style="width:100%;"/></div>
<div class="container">
<div class="banner-cnt career-b"> 
  <!-- <p>Connect with us, and let us know how we can help </p> -->
  <!-- <p>To know more about us, and let us know how we can help you</p> -->
  <p>To get in touch...</p>
   </div>

</div>

</section>
<section class="contact-section2">
  <div class="contct-div">
    <div class="contct-addr">
      <div class="contct-details">
        <p class="contct-nation">INDIA</p>
        <p class="contct-desc ind">9th Floor, Gamma Tower 
            Sigma Soft Tech Park 
            Whitefield, Bangalore, 560066 </p>
        <!--<p class="contact-mail"><span class="cnct-mailer">Email:</span><a href="mailto:info@zapcg.com">info@zapcg.com</a></p>-->
		<!-- <div class="contct-vwmapr" style="float:left; margin-left:6vmin;"><a href="https://www.google.co.in/maps/place/GyanSys/@12.9582172,77.7445186,17z/data=!3m1!4b1!4m2!3m1!1s0x1105719728b503a5:0xc27e5bab0016e400" target="_blank">VIEW MAP</a></div> -->
    <div class="contct-vwmapr" style="float:left; margin-left:6vmin;"><a href="https://www.google.co.in/maps/place/ZapCom+Solutions+Pvt.+Ltd./@12.9582437,77.7440884,19z/data=!3m1!4b1!4m2!3m1!1s0x3bae1209e51adb23:0xea6d95546faad59?hl=en" target="_blank">VIEW MAP</a></div>
      </div>
      <div class="contct-numbr">
<p class="contct-call">CALL</p>
  <p class="contct-teleno"> <i class="fa fa-phone"></i> +91-80-67232300</p>
  <p class="contact-mail"><i class="fa fa-envelope" style="
    margin: 0 10px 0 0;
    color: black;
"></i><a href="mailto:info@zapcg.com">info@zapcg.com</a></p>
</div>
  
  </div>
    <div class="contct-img">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/contct-img11.jpg" />
  
</div>
  
  </div>
  
  <div class="contct-div">
     <div class="contct-img">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/contct-img22.jpg" />
  
</div>
	
	<div class="contct-addr">
      <div class="contct-details">
        <p class="contct-nation">USA</p>
        <p class="contct-desc">San Francisco, California </p>
        <!--<p class="contact-mail"><span class="cnct-mailer">Email:</span><a href="mailto:info@zapcg.com">info@zapcg.com</a></p>-->
		<div class="contct-vwmapr"  style="float:left; margin-left:6vmin;"><a href="https://www.google.co.in/maps/place/5976+W+Las+Positas+Blvd+%23216a,+Pleasanton,+CA+94588,+USA/@37.6814667,-121.9015896,17z/data=!3m1!4b1!4m2!3m1!1s0x808fe95ff8cc3e8b:0xc5ac5012be63bea3" target="_blank">VIEW MAP</a></div>
      </div>
      <div class="contct-numbr">
<p class="contct-call">CALL</p>
  <p class="contct-teleno"> <i class="fa fa-phone"></i> +1-925-350-7003</p>
  <p class="contact-mail"><i class="fa fa-envelope" style="
    margin: 0 10px 0 0;
    color: black;
"></i><a href="mailto:info@zapcg.com">info@zapcg.com</a></p>
</div>
  </div>
   
  </div>

</section>


<section class="section-2 sec-cn-form">
  <div class="container cnt-form">
    <form class="form-cnt" form action="<?php bloginfo('template_url'); ?>/mail/contact_mail.php" method="post" enctype="multipart/form-data">
      <div class="txt-div"><input type="text" class="txt-form-zp" placeholder="Your Name" required="required" pattern="[a-zA-Z ]+" name="name" oninvalid="setCustomValidity('Your name should contain alphabets only')" onchange="try{setCustomValidity('')}catch(e){}"> </div>
      <div class="txt-div"><input type="email" class="txt-form-zp" placeholder="Your Email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" oninvalid="setCustomValidity('Please enter a valid Email ID. E.g: john@yahoo.com')" onchange="try{setCustomValidity('')}catch(e){}" > </div>
      <div class="txt-div"><input type="text" class="txt-form-zp" placeholder="Your Mobile" required="required" pattern="(\+\d{1,3}[- ]?)?\d{6,12}" name="mobile" oninvalid="setCustomValidity('Please enter a valid Mobile Number')" onchange="try{setCustomValidity('')}catch(e){}"> </div>
      <div class="txt-div"><input type="text" class="txt-form-zp" placeholder="Your Address" required="required" name="address"> </div>
     <div class="txt-div full">
     <select required class="txt-form-zp" name="help" oninvalid="setCustomValidity('Choose the nature of your need')" onchange="try{setCustomValidity('')}catch(e){}"> 
       <option selected='true' disabled='disabled' value=""> What can we help with? </option> 
       <option value="Startup Idea support"> Startup Idea support </option> 
	   <option value="Venture Capital"> Venture Capital </option>
	   <option value="Services"> Services </option>
       <option value="Investors"> Investors </option>
	   </select>
      </div>
      <div class="txt-div full"> <textarea rows="5" type="text" class="txt-form-zp" placeholder="What are your business's specific needs?" required="required" name="needs"  maxlength="250" oninvalid="setCustomValidity('Please share more details about your needs')" onchange="try{setCustomValidity('')}catch(e){}"></textarea> </div>
      <div class="txt-div full"> <input type="submit" class="tech-sec4-cnct" value="Send Message" name="submit"> <span>Or, Send us an email directly to info@zapcg.com</span> </div>
    </form>
    
  </div>
</section>

</main>

<?php get_footer(); ?>


 <!-- wrapper -->


<script type="text/javascript">
<!--var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");-->
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1",{contentIsOpen:false, duration:200});
</script>
</body>
</html>