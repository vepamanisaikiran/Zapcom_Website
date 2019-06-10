<?php
/*
Template Name:contact_amit123
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>ZapCom Group | Contact</title>



<script>

$(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});


</script>

<style>

.red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
	padding: 10px 40px 60px;
	margin: 10px 0px 60px;
	border: 1px solid GREY;
	}

</style>

<meta name="description" content="Your trusted partner for Incubating Innovative Ideas, Sourcing, building solutions and Go-To market strategy">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/contact_us.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zapcg_style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/feedback.css">



</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#modal').click(function(){
		$('#myModal').modal({
		
		});
	}); 
});
</script>

</head>
	
	
<body class="whowearepage" >

<div class="nav-down" id="header_div">	
        <?php get_header(); ?>
</div>


    
<main id=maincontent>
    
    </section>
	
	



    
    

<section id="mission_vision" class="mission" >
	<span>
		<span class="zap_h1" style="color:#003d5f;">Contact Us</span>
		<img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>
		

		<div class="container row" style="width:80%;">
           <div class="container">

    <div class="form-area" style="border-radius:20px;">  
        <form class="form-cnt" form action="<?php bloginfo('template_url'); ?>/mail/contact_mail.php" method="post" enctype="multipart/form-data">
        <br style="clear:both">
                   
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="company" placeholder="Organization" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" name="comment" type="textarea" id="message" placeholder="Comment" maxlength="140" rows="7"></textarea>
                        <!--<span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>    -->                
                    </div>
            
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>
    </div>

</div>
		</div>

    


<script type="text/javascript">
	$( document ).ready(function() {
	    //console.log( "ready!" );
	    $( ".toggle-content" ).css( "display", "none" );
	});
	/*function init_fn()
	{
		
		var divtoggle=document.getElementsByClassName("toggle-content");
		alert(divtoggle.length);
		var x;
		for(x=0;x<divtoggle.length;x++)
		{
			divtoggle[x].style.display="none";
		}
		
	}
	window.onload = init_fn();*/
	function visible_generic(tag)
	{
		var papa=tag.parentElement;
		var children=papa.childNodes;
		var i;
		
		for (i = 0; i < children.length; i++) 
		{
			if(children[i].tagName=="DIV" && children[i].className=="toggle-content")
			{
				if(children[i].style.display=="none")
				{
					children[i].style.display="block";
					var triggerelem=tag.childNodes;
					var j;
					
					for(j=0;j<triggerelem.length;j++)
					{
						if(triggerelem[j].tagName=="SPAN")
						{
							triggerelem[j].textContent="less...";
							//alert(triggerelem[j].tagName);
						}
					}
					

				}
				else
				{
					children[i].style.display="none";
					var triggerelem=tag.childNodes;
					var j;
					
					for(j=0;j<triggerelem.length;j++)
					{
						if(triggerelem[j].tagName=="SPAN")
						{
							triggerelem[j].textContent="more...";
							//alert(triggerelem[j].tagName);
						}
					}
				}
			}
		}
		
	}
    
     

</script>

    
   
   
    


</main>

<?php get_footer(); ?>


 







</body>

<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.5.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/feedback.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.bxslider.min.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.min.js"> </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.bxslider.min.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/bootstrap.min.js"> </script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.particleground.min.js"> </script>
<script>

$(function() {

    });

    
$('#canvas_sec').particleground({
    dotColor: '#fff',/* '#153965' '#47a1d3'*/
        lineColor:  'transparent',
    density:  20000,
        maxSpeedX:  1.5,
        maxSpeedY:  1.5
});

</script>

