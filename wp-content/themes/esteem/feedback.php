
<div id="circle_Container" style="z-index:5;" title="Get in Touch">

	<!-- <img id="circle_image" style="outline: none; width: 45px;opacity:1;height:41px;padding-left:15px;padding-top: 14px;margin-top: 2px;margin-left: 2px;" src="http://icons.iconarchive.com/icons/graphicloads/100-flat-2/256/chat-2-icon.png">  -->

<div id="circle" >
          
	<a href="#" id="modal" style="text-decoration:none;  opacity:1;   outline: none;">
      <!--   <img  style="width: 45px; opacity:1; height:40px; padding-left:9px; padding-top:11px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Speech_balloon.svg/2000px-Speech_balloon.svg.png"/> -->
<!-- <img  style="width: 45px; opacity:1; height:41px; padding-left:15px; padding-top:14px margin-left:2px" src="http://www.clipartbest.com/cliparts/9i4/zd6/9i4zd649T.png"/>  -->
       
	   
	   
<!--	 <img id="circle_image" style="outline: none; width: 45px;opacity:1;height:41px;padding-left:15px;padding-top: 14px;margin-top: 2px;margin-left: 2px;" src="http://www.clipartbest.com/cliparts/9i4/zd6/9i4zd649T.png"> -->
	 
	 <!--<img id="circle_image" style="outline: none; width: 45px;opacity:1;height:41px;padding-left:15px;padding-top: 14px;margin-top: 2px;margin-left: 2px;" src="http://www.crminternational.com/Media/icon_consult.png"> -->
	<!-- <img id="circle_image" style="outline: none; width: 50px;opacity:1;height:50px;padding-left:10px;padding-top: 10px;margin-top: 2px;margin-left: 2px;" src="http://flaticons.net/icons/Mobile%20Application/Chat.png"> -->
	 
	 
 	 <img id="circle_image" style="outline: none; width: 50px;opacity:1;height:50px;padding-left:10px;padding-top: 10px;margin-top: 2px;margin-left: 2px;" src="<?php bloginfo('template_directory'); ?>/images/icon-chat-orange.png""> 
	 
<!--	  <img id="circle_image" style="outline: none; width: 50px;opacity:1;height:50px;padding-left:10px;padding-top: 10px;margin-top: 2px;margin-left: 2px;" src=" http://static-images.talentegg.ca/Public%20Outreach/CHAT.png">  -->
	
	 
	 
	 
	 

	 
                </a> 


</div>


</div>



    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Request for Consultation</h4>
                </div>
                <div class="modal-body" style="height: auto;">
			  <div class="bt-form__wrapper" style="margin-top:-10px;">
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
<textarea name="comment" rows="5" class="txt-form-zp" placeholder="Message to Zapcom"></textarea>
      </div>
</div>
                <div class="modal-footer">  
                   <button type="submit" class="btn btn-primary js-submit" style="float: left; margin-left: 20px;">Submit</button>
                    <button type="button" id="close" onclick="myFunction()" class="btn btn-default" data-dismiss="modal" style="margin-right: 30px;">Close</button>
                </div>
				   </form>
            </div>
        </div>
    </div>
	
	
	  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.1.2/parsley.min.js'></script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/index123.js" type="text/javascript"></script>

	
	
	
	
	
	
<!--	
<script>


setInterval(function(){
	//	$('control').fadeTo(500, 0); 
	
	
	
if ( $('#feedback').css('display') == 'none' ){
	//	$('#control').fadeTo(500,  0.4); 
	//$('#control').fadeTo(500,  1); 
	
}
else{
	if ( $('#control').css('display') == 'none' ){
 // $("#control").fadeIn(1);

	 
   	 <!--	  document.getElementById("control").src="<?php bloginfo('template_directory'); ?>/images/close.png";  -->
	 <!--	
}
else{
	//$('#control').fadeTo(500,  0.4); 
	//$('#control').fadeTo(500,  1); 
	//   $("#control").fadeOut(1);
	   

}
}

		



      },800)

$('#one').click(function(e){    

          //  $("#feedback").fadeToggle(1000);
			
			
			if ( $('#feedback').css('display') == 'none' ){
  $("#feedback").fadeIn(1);
     	 <!-- document.getElementById("control").src="<?php bloginfo('template_directory'); ?>/images/close_new_color.png";-->
	 <!--	
	  document.getElementById("control").src="<?php bloginfo('template_directory'); ?>/images/close.png";  
	<!--	 
}
else{
	
	   $("#feedback").fadeOut(1);
	   
 <!--   document.getElementById("control").src="<?php bloginfo('template_directory'); ?>/images/close_new_color1.png";-->
<!--			  document.getElementById("control").src="<?php bloginfo('template_directory'); ?>/images/close1.png";  
}
    

    
});

(function blink() { 
  $('#blink_me').fadeOut(500).fadeIn(500, blink); 
})();


</script>

-->