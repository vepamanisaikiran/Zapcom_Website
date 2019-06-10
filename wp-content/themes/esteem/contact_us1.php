<?php 
/*
Template Name: Contact Us1
 */?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ZapCom Group| Contact us</title>
<meta name="description" content="We are passionate about transforming innovative ideas into great products. ">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/technology_style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zapcg_style.css">

</head>
<body style="overflow-x: hidden;">
	
<div class="nav-down" id="header_div">	
        <?php get_header(); ?>
</div>


<div class="col-md-2">
</div>
    <div class="col-md-8">
<main id="maincontent">

<div id="primary" style="border:0px;padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px" >
	<h1 style=" text-align: center;margin-bottom:5px;">Contact Us</h1>
	<div class="container"   style="text-align:center;margin-auto;">
	

	
  <form id="myform" name="myform" class="uk-form bt-flabels js-flabels" data-parsley-validate data-parsley-errors-messages-disabled form action="<?php bloginfo('template_url'); ?>/mail/contact_mail.php" method="post" enctype="multipart/form-data">
    
 
        <div class="bt-flabels__wrapper" style="margin-bottom:10px;">
          <label class="lable">Name</label>
          <input type="text" id="name" name="name" placeholder="Name" autocomplete="off" data-parsley-required />
          <span class="bt-flabels__error-desc">Required</span>
        </div>
   <div class="bt-flabels__wrapper" style="margin-bottom:10px;">
      <label class="lable">Email</label>
      <input type="text" name="email" placeholder="Email" data-parsley-required data-parsley-type="email" autocomplete="off" />
      <span class="bt-flabels__error-desc">Invalid Email</span>
    </div>
	
	
      <div class="bt-flabels__wrapper" style="margin-bottom:10px;">
          <label class="lable">Company Name</label>
          <input type="text" name="company" autocomplete="off" placeholder="Company Name" data-parsley-required />
          <span class="bt-flabels__error-desc">Required</span>
        </div>
     
<div class="bt-flabels__wrapper" style="margin-bottom:10px;">
          <label class="lable">Location</label>
          <input type="text" name="location" autocomplete="off" placeholder="Location" data-parsley-required />
          <span class="bt-flabels__error-desc">Required</span>
        </div>
     

<div class="bt-flabels__wrapper" style="margin-bottom:10px;">
      <label class="lable">Contact</label>
      <input type="text" name="mobile" placeholder="Phone" maxlength="10" autocomplete="off" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" />
      <span class="bt-flabels__error-desc">Invalid Phone</span>
    </div>
    
<div class="bt-flabels__wrapper" style="margin-bottom:10px;">
      <label>Contact</label>
<textarea name="comment" rows="5" class="txt-form-zp" placeholder="Message to Zapcom" style="width:100%;"></textarea>
      </div>

             
                   <button type="submit" class="btn btn-primary js-submit" style=" margin-left: 20px;">Submit</button>
                 
               
				   </form>
        	</div><!-- /#content -->
			
			</div>
    </main>	           


</div>




	

	

	
	

		  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.1.2/parsley.min.js'></script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/index123.js" type="text/javascript"></script>
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
        density:  15000,
        maxSpeedX:  2.0,
        maxSpeedY:  2.0
});

</script>






</html>