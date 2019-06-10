<?php 
/*
Template Name: Careers   
 */?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ZapCom Group| Careers</title>
    <meta name="description" content="ZapCom provides the holistic environment wherein other than the right remuneration the worker develops the right skills and ethics to become a globally enterprising individual. "> 
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css"> -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/career_style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zapcg_style.css">
    
    <script src="<?php bloginfo('template_directory'); ?>/js/jss/jquery.min.js"></script>


    <script type="text/javascript">
        if($('#file').val() != '') {
            $.each($('#file').prop("files"), function(k,v){
			  var filename = v['name'];    
			  var ext = filename.split('.').pop().toLowerCase();
			  if($.inArray(ext, ['pdf','doc','docx']) == -1) {
				  alert('Please upload only pdf,doc,docx format files.');
				  return false;
			  }
		  });        
	}
	</script>
    
    
    
    
	<script type="text/javascript">
         function tagcloud(dom,tag) {
            var highVal = 0;
            var lowVal = Number.MAX_VALUE;
            var elements = dom.getElementsByTagName(tag);
            var minFont = parseInt(dom.getAttribute('data-minfont'),10);
            var maxFont = parseInt(dom.getAttribute('data-maxfont'),10);
            var fontDif = 0;
            var sizeDif = 0;
            var size = 0;
            var i = 0;
            var data = 0;
          
            for(i = 0; i < elements.length; ++i) {
               data = parseInt(elements[i].getAttribute('data-count'),10);
               if(data > highVal) {
                  highVal = data;
               }
               if(data < lowVal) {
                  lowVal = data;
               }
            }
          
            fontDif = maxFont - minFont;
            sizeDif = highVal - lowVal;
          
            for(i = 0; i < elements.length; ++i) {
               data = parseInt(elements[i].getAttribute('data-count'),10);
               size = (fontDif * (data - lowVal) / sizeDif) + minFont;
               size = Math.round(size);
               size = size / 5;
               elements[i].style.fontSize = size + "vmin";
            }
         }
    </script>
    
</head>

<body class="careerspage">
 
 <div class="nav-down" id="header_div">    
        <?php get_header(); ?>
</div>


   
<main id=maincontent>
    <!-- <section class="banner" style="position: relative;">
        
        <div class="banner-img-pos carrer-b bannerStyle collapseBanner" id="bannerID">
            <div align="center" class="browseJobBtn" style="text-align: center; left: 50%; margin-left: -3em; padding-top: 2.2em !important; cursor: pointer;" onclick="showJobPositions()" >Browse Jobs <br><span class="fa fa-angle-double-down fa-3x" style="font-size: 2.1em; color: #FFFFFF;position: absolute;left: 6.5vmin;"> </span></div>
        </div>
    </section>--> <!--- banner section -->
    
<section class="zap_section1">

  <div class="zap_banner zap_img" id="career_banner_img"> 
      <div class="zap_bg_layer" style="background-color: #103461;"> </div> 
      
      <div class="zap_banner_text" style="color:white">
            <span class="zap_banner_focus" style="display:inline;" >Together, <span class="zap_banner_heading" style="display:inline;">let us create something</span> phenomenal !</span>          
            <span class="zap_banner_body" style="text-transform:initial">
                <p>
                     If Passionate, Innovative, Smart and Tech-Savvy is what you are, here is where you should be.
                </p>
          </span>           
      </div>

      <div id="menu_career">        
            <div id="career_menu_button" class="" >
                <a href="#our_opportunities">
                <img id="we_are_hiring" style="width: 110px;margin-bottom: 23px;" src="<?php bloginfo('template_directory'); ?>/images/we_are_hiring.svg"/>
                </a> 
            </div>
        
    </div>
    <script type="text/javascript">
        /*$( "#career_menu_button" ).click(function() {
          $( "#career_menu_links" ).toggle( "slow");
        });
        
        $( document ).ready(function() {
            console.log( "ready!" );
            $( "#career_menu_links" ).toggle( "fast");
        });*/
    </script>
  </div>
</section>

    <div class="zap_subMenu">
    <ul>
     <li><a href="#our_people"> People </a></li>
     <li><a href="#zapcom_culture">Culture</a></li>
<!--     <li><a href="#our_culture">Benefits</a></li>-->
      <li><a href="#our_opportunities">Apply</a></li>
    </ul>    
    </div>
    
    <section class="" id="our_people">
    <span class="zap_h1" style="color:#003d5f;"> Our People</span>
    <img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>
    <span class="zap_body"> 
        We have found our ‘People’ through a selective yet distinctive method of hiring, which evaluates their technical expertise, logical thinking & reasoning, cultural fitment, aptitude and attitude.
    </span>
    <div class="container row employee_testimonials">
        <div class="col-sm-6">            
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <center>
                        <div class="employee_image" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/employee/arpith.png')"></div>
                    </center>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <center>
                        <div class="row">
                            <div class="employee_content">
                                <p class="employee_saying">
                                    <span style="font-weight: bold; color: #32848e; font-size: 22px;">“</span>Exciting place to work with a nice culture. A youthful company full of smart, friendly people. We have fun and we deliver - the way it should be! <span style="font-weight: bold;  color: #32848e;font-size: 22px;">”</span>
                                </p>
                                <p class="employee_details" style="font-weight: bold;  color: #32848e;">
                                    - Arpit Poladia (Java Developer)
                                </p>
                            </div>
                        </div>
                    </center>
                </div>            
        </div>
        <div class="col-sm-6">           
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <center>
                        <div class="employee_image" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/employee/dheeraj.png')"></div>
                    </center>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <center>
                        <div class="employee_content">
                            <p class="employee_saying">
                                <span style="font-weight: bold;  color: #32848e; font-size: 22px;">“</span>You will be exposed to all aspects & in turn gain a broader understanding of the business as a whole, making you agile, decisive and confident.<span style="font-weight: bold; color: #32848e;font-size: 22px;">”</span>
                            </p>
                            <p class="employee_details" style="font-weight: bold;  color: #32848e;">
                                - Dheeraj Bhoomireddy (Associate Software Engineer)
                            </p>
                        </div>
                    </center>
                </div>            
        </div>
    </div>
    <div class="container row employee_testimonials">
        <div class="col-sm-6">            
                <div class="col-md-4 col-sm-12 col-xs-12" >
                    <center>
                        <div class="employee_image" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/employee/eswaran.png')"></div>
                    </center>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <center>
                        <div class="employee_content">
                            <p class="employee_saying">
                                <span style="font-weight: bold;  color: #32848e;font-size: 22px;">“</span>Working with Technology & Domain experts, you will learn faster than ever before. A wonderful place to make your imagination real.<span style="font-weight: bold; color: #32848e; font-size: 22px;">”</span>
                            </p>
                            <p class="employee_details" style="font-weight: bold;  color: #32848e;">
                                - Eswaran Pragasam (UI Engineer)
                            </p>
                        </div>
                    </center>
                </div>            
        </div>
        <div class="col-sm-6">            
                <div class="col-md-4 col-sm-12 col-xs-12" >
                    <center>
                        <div class="employee_image" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/employee/ravi.png')"></div>
                    </center>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <center>
                        <div class="employee_content">
                            <p class="employee_saying">
                                <span style="font-weight: bold; color: #32848e; font-size: 22px;">“</span>You get a chance to work with talented people, who will support you both personally and professionally to further knowledge, personality, career and success.<span style="font-weight: bold;  color:#32848e; font-size: 22px;">”</span>
                            </p>
                            <p class="employee_details" style="font-weight: bold;  color:#32848e;">
                                - Ravindra Bhat (Sr. Java Developer)
                            </p>
                        </div>
                    </center>
                </div>
        </div>
    </div>
</section>    

<section class="" id="zapcom_culture">
   <span class="zap_h1" style="color:#003d5f;"> Our Culture</span>
    <img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>

    <div class="row">   
        <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-push-6">
        
            <ul class="culture_specs">
            <li class="li_color">
                <p>Explore one’s abilities beyond technology.</p>  
            </li>
            <li class="li_color"> 
                 <p>Learn a lot, and learn them quickly.</p>
           
                </li>
                <li class="li_color">
                     <p>Performance driven growth.</p>
             
            </li>
                <li class="li_color" >
                     <p> Get holistic insight into business at large.</p>
            </li>
            <li class="li_color">
                 <p> Ample opportunities to experiment & excel.</p>
               
            </li>
            <li class="li_color">
                 <p>  Layer-less structure with talented, creative and like-minded peers. </p>
                
            </li>
            </ul>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6">
            <div id="cul-img_1" class="culture_image" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/career/career_culture_5.jpg');"> 
            </div>
            
        </div>
        
       
       
   
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div id="cul-img_2" class="culture_image" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/career/career_culture_2.jpg');">           
            </div>
        </div>
        
<!--
        <div class="col-xs-12 col-sm-12 col-md-2">
             <div id="cul-img_3" class="culture_image" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/career/career_culture_3.jpg');    background-position: 25% !important;">
                
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-5">
                <div id="cul-img_5" class="culture_image" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/career/career_culture_4.jpg');">
            </div>
        </div>
-->
         </div>
        <div class="perks col-md-4 col-sm-12 col-xs-12">
         <div class="" id="our_culture">
        <div class="perk-pos" >
        <div class="perk-cnt-career perks-benefits">
            <div class="container">
                <h2 style="font-family:'montserratbold' !important;color:white;" class="zap_body">Perks and Benefits</h2>
                <!-- h2 class="head-sec cr-bnft" > The Perks and Benefits </h2> -->
                <p class="zap_body"> Our team competes at the highest level. At ZapCom, we nurture a uniquely engaging workplace that delivers. And how do we keep this 'engaging workplace' happy? That's where the perks come into play. For starters, you'll enjoy:  </p>
                
                <div class="static-tab-whowr">
                    <!-- <div class="carr-benft">
                        <div class="img-stat"> <span class="crpage benfit-4"> </span> </div>
                        <p> Cutting-Edge Technologies </p> 
                    </div> -->
                    <div class="carr-benft">
                        <div class="img-stat"> <span class="crpage benfit-2"> </span> </div>
                        <p> Hi-End Laptops  </p>
                    </div>
                    <div class="carr-benft"> 
                        <div class="img-stat"> <span class="crpage benfit-7"> </span> </div>
                        <p> Flexible Timings </p> 
                    </div>
                    <!-- <div class="carr-benft"> 
                        <div class="img-stat"> <span class="crpage benfit-8"> </span> </div>
                        <p> Brown Bag Sessions </p> 
                    </div> -->
                    <div class="carr-benft">
                        <div class="img-stat"> <span class="crpage benfit-3"> </span> </div>
                        <p> Competitive Salaries </p>
                    </div>
                    <div class="carr-benft"> 
                        <div class="img-stat"> <span class="crpage benfit-6"> </span> </div>
                        <p> "There is Free Lunch!" </p>
                    </div>
                    <div class="carr-benft">
                        <div class="img-stat"> <span class="crpage benfit-1"> </span> </div>
                        <p> Weekly Mixers  </p>
                    </div>
                    <div class="carr-benft">
                        <div class="img-stat"> <span class="crpage benfit-5"> </span> </div>
                        <p> Health Insurance </p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    </div>
        </div>
    </div>
    
     
    

</section>
 
    <!-- 
    <div class="" id="our_culture">
        <h2 style="font-family:'montserratbold' !important;" class="zapcom-heading">Perks and Benefits</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>
        <div class="perk-pos" style="z-index:-3;height:89%;">
        <div class="perk-cnt-career perks-benefits">
            <div class="container">
                <!-- h2 class="head-sec cr-bnft" > The Perks and Benefits </h2> 
                <p class="zap_body"> Our team competes at the highest level. At ZapCom, we nurture a uniquely engaging workplace that delivers. And how do we keep this 'engaging workplace' happy? That's where the perks come into play. For starters, you'll enjoy:  </p>
                
                <div class="static-tab-whowr">
                    <!-- <div class="carr-benft">
                        <div class="img-stat"> <span class="crpage benfit-4"> </span> </div>
                        <p> Cutting-Edge Technologies </p> 
                    </div> 
                    <div class="carr-benft">
                        <div class="img-stat"> <span class="crpage benfit-2"> </span> </div>
                        <p> Hi-End Laptops  </p>
                    </div>
                    <div class="carr-benft"> 
                        <div class="img-stat"> <span class="crpage benfit-7"> </span> </div>
                        <p> Flexible Timings </p> 
                    </div>
                    <!-- <div class="carr-benft"> 
                        <div class="img-stat"> <span class="crpage benfit-8"> </span> </div>
                        <p> Brown Bag Sessions </p> 
                    </div> 
                    <div class="carr-benft">
                        <div class="img-stat"> <span class="crpage benfit-3"> </span> </div>
                        <p> Competitive Salaries </p>
                    </div>
                    <div class="carr-benft"> 
                        <div class="img-stat"> <span class="crpage benfit-6"> </span> </div>
                        <p> "There is Free Lunch!" </p>
                    </div>
                    <div class="carr-benft">
                        <div class="img-stat"> <span class="crpage benfit-1"> </span> </div>
                        <p> Weekly Mixers  </p>
                    </div>
                    <div class="carr-benft">
                        <div class="img-stat"> <span class="crpage benfit-5"> </span> </div>
                        <p> Health Insurance </p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    </div>
    -->



    <script>
        var globalModal;
        function showModal(dialogName) { 
            var x = document.getElementById(dialogName);
            globalModal = document.getElementById(dialogName);
            x.style.display = "block";
            document.getElementsByTagName("BODY")[0].style.overflow = "hidden";
            document.getElementsByTagName("BODY")[0].style.position = "fixed";
        }
        function closeModal(dialogName) { 
            var x = document.getElementById(dialogName);
            x.style.display = "none";
            document.getElementsByTagName("BODY")[0].style.overflow = "";
            document.getElementsByTagName("BODY")[0].style.position = "";
        }
    </script>
    <section id="job_vacancy_sec"> 
        <div id="our_opportunities">
        <span class="zap_h1" style="color:#003d5f;"> Current Openings</span>
        <img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>
        </div>
 

<div class="row">
            <div class="col-md-2"></div>
    <!--    <div class="col-md-5" style="padding: 0 20px;">
            <span class="zap_h3"> We Hire For</span>
            <div class="jobTitles" id="tagcloud">
                <span class="jobName">
                    <a href="#" onclick="return false;"> Java </a>
                </span>
                <span class="jobName">
                    <a href="#" onclick="return false;" > QA </a>
                </span>
                <span class="jobName">
                    <a href="#" onclick="return false;" > DevOps </a>
                </span>
                <span class="jobName">
                    <a href="#" onclick="return false;" > iOS/Android </a>
                </span>
                <span class="jobName">
                    <a href="#" onclick="return false;" > UI/UX </a>
                </span>
                <span class="jobName">
                    <a href="#" onclick="return false;"> Machine Learning </a>
                </span>
                <span class="jobName">
                    <a href="#" onclick="return false;" > Scrum Master </a>
                </span>
            
            </div>
        </div>  -->
     
	
 <div class="col-md-4">
  <h2 style="font-weight:bold;text-align:Center;padding:20px">India</h2>      <!--   <span class="zap_h3"> Current Openings </span>-->
            
            <div class="jobPositionDiv" id="jobPositionDivID">
        <?php
                global $wpdb;
				$sql="select * from wp_career_job_description where (position_name='Design' or position_name='Analyst' or position_name='Administrator' or position_name='Development') and vacancy=1 ORDER BY cjid ASC ";
				$sqlall=$wpdb->get_results($sql);
				$index=1;
				echo '<div class="jobTitles" id="tagcloud" data-minfont="17" data-maxfont="17">';
				
				foreach($sqlall as $eachjob)
				{
				    echo '<div class="modal" id="jid'.$eachjob->cjid.'">
								<div class="jobModal TabbedPanelsContentGroup cnt-sec tab-cnt-cr" style="padding: 0;">
								    <div class="TabbedPanelsContent">
                                        <div class="modal-header">
                                            <button type="button" class="close closeButton" data-dismiss="modal" onclick="closeModal(\'jid'.$eachjob->cjid.'\')">&times;</button>
                                            <h3 class="tabcnt-hd-cr modal-title fontStyles"> '.$eachjob->desination_name.' </h3>
                                        </div>
                                        <div class="modal-body fontStyles" style="border: none !important; height: 300px; overflow-y: auto;">
												<p>
													'.$eachjob->job_description.'
												</p>
                                        </div>
								        <div class="modal-footer">
                                                <button type="button" id="applyButton" class="tech-sec4-cncts btn btn-default applybtn" value="Apply" name="submit" onclick="closeModal(\'jid'.$eachjob->cjid.'\')">Apply</button>
                                                
								                <button type="button" class="btn btn-default closeBtn applybtn" data-dismiss="modal" onclick="closeModal(\'jid'.$eachjob->cjid.'\')">Close</button>
								        </div>
                                    </div>
                                </div>
                            </div>';
                    
                        $designation=$eachjob->desination_name;
				        $designation=str_replace(".","_",$designation);
				        $designation=str_replace(" ","_",$designation);
                        echo 	'<span class="jobName" data-count="'.rand(17,17).'">
											<a href="#'.$designation.'Modal"  onclick="showModal(\'jid'.$eachjob->cjid.'\')" style="font-size: 15px"> '.$eachjob->desination_name.' 
											</a>
										</span>';
                        $index++;
                    }
                    echo '</div>';
            ?>
        <script>
            var tc = document.getElementById('tagcloud');
            tagcloud(tc,'span');
        </script>
    </div>
        </div>
         
<div class="col-md-4">  <h2 style="font-weight:bold;text-align:center;padding:20px">USA</h2>
            <div class="jobPositionDiv" id="jobPositionDivID">
        <?php
                global $wpdb;
				$sql="select * from wp_career_job_description where (position_name='AdminHR') and vacancy=1 ORDER BY cjid ASC ";
				$sqlall=$wpdb->get_results($sql);
				$index=1;
				echo '<div class="jobTitles" id="tagcloud" data-minfont="17" data-maxfont="17">';
				
				foreach($sqlall as $eachjob)
				{
				    echo '<div class="modal" id="jid'.$eachjob->cjid.'">
								<div class="jobModal TabbedPanelsContentGroup cnt-sec tab-cnt-cr" style="padding: 0;">
								    <div class="TabbedPanelsContent">
                                        <div class="modal-header">
                                            <button type="button" class="close closeButton" data-dismiss="modal" onclick="closeModal(\'jid'.$eachjob->cjid.'\')">&times;</button>
                                            <h3 class="tabcnt-hd-cr modal-title fontStyles"> '.$eachjob->desination_name.' </h3>
                                        </div>
                                        <div class="modal-body fontStyles" style="border: none !important; height: 300px; overflow-y: auto;">
												<p>
													'.$eachjob->job_description.'
												</p>
                                        </div>
								        <div class="modal-footer">
                                                <button type="button" id="applyButton" class="tech-sec4-cncts btn btn-default applybtn" value="Apply" name="submit" onclick="closeModal(\'jid'.$eachjob->cjid.'\')">Apply</button>
                                                
								                <button type="button" class="btn btn-default closeBtn applybtn" data-dismiss="modal" onclick="closeModal(\'jid'.$eachjob->cjid.'\')">Close</button>
								        </div>
                                    </div>
                                </div>
                            </div>';
                    
                        $designation=$eachjob->desination_name;
				        $designation=str_replace(".","_",$designation);
				        $designation=str_replace(" ","_",$designation);
                        echo 	'<span class="jobName" data-count="'.rand(17,17).'">
											<a href="#'.$designation.'Modal"  onclick="showModal(\'jid'.$eachjob->cjid.'\')" style="font-size: 15px"> '.$eachjob->desination_name.' 
											</a>
										</span>';
                        $index++;
                    }
                    echo '</div>';
            ?>
        <script>
            var tc = document.getElementById('tagcloud');
            tagcloud(tc,'span');
        </script>
    </div>
 </div> 
    
<div class="col-md-2"></div>
 
 
        </div>
 
   


    <script>
        $('.applybtn').click(function(event) {
            jQuery('html,body').animate({
                scrollTop: jQuery("#job_vacancy_sec").offset().top},
                'fast');
        });
    </script>
  
    

    
    <div id="careerApplyForm" class="section-2 career-tab" style="width: 100%; height: 1px; padding: 0px 0px;"></div>
	<div class="section-2 career-tab">
    <a name="redirect_ouropportunites" class="landing-redirect" style="position:absolute; "></a>
      <!-- Career Form With Job Descriptions -->
            <!--<div class="container row">-->
               <!-- <section class="section-2 sec-cn-form">-->   <!-- Career Form -->
        <div class="col-md-2">
            <br>
        </div>
        <div class="col-md-8 career-form-div">
			<!--<div class="cnt-form" style="background-color:white; border-radius:5px; padding:1.5vmin; height:430px;">-->
				<div class="cnt-form">
                    <br>
					<script>
						$(document).ready(function () {
							$('.group').hide();
							var job=$('#jobPosition').val();
							$('#hiddenjobpositions').val(job);
							job=job.replace(/\./g, "_");
							job=job.replace(/\ /g, "_");
							$('#'+job).show();
							
							$('#jobPosition').change(function () {
								$('.group').hide();
								var job1=$(this).val();
								$('#hiddenjobpositions').val(job1);
								job1=job1.replace(/\./g, "_");
								job1=job1.replace(/\ /g, "_");
								//console.log(job1);
								$('#'+job1).show();
							});
						});
					</script>

                        <div class="careerFormStyle">
							<form class="form-cnt" form action="<?php bloginfo('template_url'); ?>/mail/career_mail.php" method="post" enctype="multipart/form-data">
                                <div>
                                    <h3 style="line-height: 65px; font-weight: 600; font-family: 'montserratLight'; color: #003D5F;">
                                        Apply for the Job                                    </h3>
                                  </div>
                            
								<div class="txt-div" style="width: 50%;">
									<input type="text" class="txt-form-zp" placeholder="Your Name" required="required" pattern="[a-zA-Z ]+" name="name" minlength="2" style="height: 35px;" oninvalid="setCustomValidity('Your name should contain alphabets only')" onchange="try{setCustomValidity('')}catch(e){}" required>
								</div>
							<!--	<div class="txt-div" style="width: 50%;">
									<input type="email" class="txt-form-zp" placeholder="Your Email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" style="height: 35px;" oninvalid="setCustomValidity('Please enter a valid Email ID. E.g: john@yahoo.com')" onchange="try{setCustomValidity('')}catch(e){}" required>
								</div> -->


						<div class="txt-div" style="width: 50%;">
									<input type="email" class="txt-form-zp" placeholder="Your Email" required="required" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" name="email" style="height: 35px;" oninvalid="setCustomValidity('Please enter a valid Email ID. E.g: john@yahoo.com')" onchange="try{setCustomValidity('')}catch(e){}" required>
								</div>





								<div class="txt-div" style="width: 50%;">
									<!--<input type="text" class="txt-form-zp" placeholder="Your Mobile" required="required" pattern="[7-9]{1}[0-9]{9}" name="mobile" style="height: 35px;">-->
                                    <input type="text" class="txt-form-zp" placeholder="Your Mobile" required="required" pattern="(\+\d{1,3}[- ]?)?\d{6,12}" name="mobile" style="height: 35px;" oninvalid="setCustomValidity('Please enter a valid Mobile Number')" onchange="try{setCustomValidity('')}catch(e){}" required>
								</div>
								<div class="txt-div" style="width: 50%;">
									<select id="jobPosition" name='jobpositions' style="width:99%; height:35px; font-family:'montserratLight';" class="txt-form-zp" placeholder="Choose Job Position" oninvalid="setCustomValidity('Choose the Job Position you applying for')" onchange="try{setCustomValidity('')}catch(e){}" required>
										<!--<optgroup label=" ">-->
											<option value="" disabled selected hidden>Post applying for...</option>
										<!--</optgroup>-->
										<?php
											$position_name_arr=array("Design", "Development");
											for($x = 0; $x < count($position_name_arr); $x++) 
											{
//												echo '<optgroup label="'.$position_name_arr[$x].'">';
												$sql3='select * from wp_career_job_description where position_name="'.$position_name_arr[$x].'" and vacancy=1';
												$sql33=$wpdb->get_results($sql3);
												foreach($sql33 as $eachjob)
												{
													echo '<option value="'.$eachjob->desination_name.'">'.$eachjob->desination_name.'</option>';
												}
												echo '</optgroup>';
											}
										?>
									</select>
								</div>
								<div class="txt-div full" style=" text-align: center; width: 95%;  border-radius: 4px; margin-left: 6px;">
									<span style=" margin-right: 18px; text-align: right; color: #777777; padding: 6px 6px 6px 0;">&nbsp;Curriculum Vitae</span>
									<input type="file" id="file" placeholder="Upload Your Resume" name="file" class="txt-form-zp"  accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document" style="margin: 0px !important; margin-top: -6px; font-family: 'montserratLight';" >
									
								</div>
								
								
								<div class="txt-div full">
									<input type="hidden" id="hiddenjobpositions" value="" name="hiddenjobpositions">
								</div>
								<div class="txt-div full">
									<input type="submit" class="tech-sec4-cnct" value="Apply" name="submit" style="float: none; height: 45px; font-size: 1.9rem;"> 
									<span style="width: 100%; text-align: center;margin: 5px;">&nbsp; Or, send us an email directly to hr@zapcg.com</span>
								</div>
                            
                            </form>
                    </div>
                </div>
				   <!-- </section> --> <!-- Career Form -->
            <!--</div>-->

		</div>			
		 <div class="col-md-2">
            <br>
            <!-- <div class="cnt-form">
                <div class="careerFormStyle">
                    <h3 style="line-height: 65px; font-weight: 600; font-family: 'montserratLight'; color: #003D5F;">What HR has to say...</h3>
                    <div class="txt-div full"> 
                        <center> <img src="<?php bloginfo('template_directory'); ?>/images/career_hr.jpg"> </center>
                    </div>
                    <div class="txt-div full"> 
                        <p style="padding-left: 8px; padding-right: 8px; padding-bottom: 8px">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam.” </p>
                    </div>
                </div>
            </div> -->
        </div> 
		
        </div>	
		
    </section>
	
    
     <script>    
    $(function() {
        
        
    });


</script>
	
    

</main>

<?php get_footer(); ?> <!-- wrapper -->






</body>

<script src="<?php bloginfo('template_url'); ?>/js/jss/bootstrap.min.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.min.js"> </script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.bxslider.min.js"> </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!--<script src="<?php bloginfo('template_url'); ?>/js/jquery.scrollify.min.js"> </script>-->
    
   
</html>