<?php
/*
Template Name:blank
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ZapCom Group| Insights</title>
<meta name="description" content="We are passionate about transforming innovative ideas into great products. ">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
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
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zapcg_style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/feedback.css">
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
	
<div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Request for Free Consultation</h4>
                </div>
                <div class="modal-body" style="height: 340px;">
				<form class="form-cnt" form action="<?php bloginfo('template_url'); ?>/mail/call_to_action_mail.php" method="post" enctype="multipart/form-data">
                            
								<div class="txt-div" style="width: 100%; padding-left: 20px; padding-right: 20px; ">
									<input type="text" class="txt-form-zp" placeholder="Your Name*" required="required" pattern="[a-zA-Z ]+" name="name" minlength="2" style="height: 35px;" oninvalid="setCustomValidity('Your name should contain alphabets only')" onchange="try{setCustomValidity('')}catch(e){}" required>
								</div>
								<div class="txt-div" style="width: 100%;  padding-left: 20px; padding-right: 20px;">
									<input type="email" class="txt-form-zp" placeholder="Your Email*" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" style="height: 35px;" oninvalid="setCustomValidity('Please enter a valid Email ID. E.g: john@yahoo.com')" onchange="try{setCustomValidity('')}catch(e){}" required>
								</div>
								<div class="txt-div" style="width: 100%; padding-left: 20px; padding-right: 20px; ">
									<input type="text" class="txt-form-zp" placeholder="Company Name*" required="required" pattern="[a-zA-Z ]+" name="company" minlength="2" style="height: 35px;" oninvalid="setCustomValidity('Company Name should be mentioned')" onchange="try{setCustomValidity('')}catch(e){}" required>
								</div>
								<div class="txt-div" style="width: 100%;  padding-left: 20px; padding-right: 20px;">
									<!--<input type="text" class="txt-form-zp" placeholder="Your Mobile" required="required" pattern="[7-9]{1}[0-9]{9}" name="mobile" style="height: 35px;">-->
                                    <input type="text" class="txt-form-zp" placeholder="Contact*" required="required" pattern="(\+\d{1,3}[- ]?)?\d{6,12}" name="mobile" style="height: 35px;" oninvalid="setCustomValidity('Please enter a valid Mobile Number')" onchange="try{setCustomValidity('')}catch(e){}" required>
								</div>
							
								<div class="txt-div" style="width: 100%; height: 50%; padding-left: 20px; padding-right: 20px; ">
									<textarea rows="5" class="txt-form-zp" placeholder="Comments" required="required" pattern="[a-zA-Z ]+" name="comment" minlength="2" style="width: 98%; height: 50%; border-radius: 3px; color: #666; border: 1px solid #ccc; border-radius: 3px; resize: none;" oninvalid="setCustomValidity('Comments Section Cannot be Empty')" onchange="try{setCustomValidity('')}catch(e){}"></textarea>
								</div>
                </div>
                <div class="modal-footer">  
                    <button type="submit" class="btn btn-primary" style="float: left; margin-left: 20px;">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-right: 30px;">Close</button>
                </div>
            </div>
        </div>
    </div>
	
	

	
	

	
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

