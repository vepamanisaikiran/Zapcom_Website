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
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
    
    
    <style>
        input[type="button"]{
           outline:none;
        }
        input[type="button"]::-moz-focus-inner {
           border: 0;
        }
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 70px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            
        }
        .jobModal{
            width: 70% !important;
            position: absolute;
            right: 15vw;
            border-radius: 15px;
        }
        .closeButton {
            width: 4ex;
            height: 4ex;
        }
        #applyButton {
            float: none;
            margin: 0 auto;
            background-color: #198ac9;
            color: #FFFFFF;
            font-size: 15px;
            font-family: ralewayregular;
            border-radius: 3px;
            text-transform: uppercase;
        }
        #applyButton:hover {
            background-color: #002438;
            font-weight: 600;
            color: white;
        }
        .group {
            margin-bottom: 25px;
        }
        ol{
            list-style-type: none !important;
        }
        .cnt-form {
            padding-left: 1%;
        }
        
        @media only screen and (max-width: 1300px){
			.jobPositionDiv {
                top: 46vmin !important;
            }
            .careerFormStyle {
                height: 60vmin !important;
            }
		}
        @media only screen and (max-width: 1280px) {
			.jobPositionDiv {
                top: 58vmin !important;
            }
            .careerFormStyle {
                height: 74vmin !important;
            }
		}
        @media only screen and (max-width: 1120px) {
            .jobPositionDiv {
                top: 48vmin !important;
            }
		}
        @media only screen and (max-width: 980px) {
            .careerFormStyle {
                height: 62vmin !important;
            }
		}
        @media only screen and (max-width: 610px) {
			.jobPositionDiv {
                top: 50vmin !important;
            }
            .careerFormStyle{
                height: 76vmin !important;
            }
		}
		@media only screen and (max-width: 500px) {
			.jobPositionDiv {
                top: 55vmin !important;
            }
            .careerFormStyle{
                height: 90vmin !important;
            }
		}
		@media only screen and (max-width: 420px) {
			.jobPositionDiv {
                top: 58vmin !important;
            }
            .careerFormStyle{
                height: 110vmin !important;
            }
		}
		@media only screen and (max-width: 360px) {
            .careerFormStyle{
                height: 114vmin !important;
            }
		}
		@media only screen and (max-width: 310px) {
            .careerFormStyle{
                height: 124vmin !important;
            }
		}
		@media only screen and (min-width: 768px) {
			.career-form-div{
				display: table;
  				margin: auto;
			}
		}
		@media only screen and (max-width: 768px) {
			.career-form-div{
				border-right: none;
			}
		}
        
		input::-webkit-input-placeholder {
			font-family:ralewayregular;
			color: rgb(119, 119, 119);
		}

		input:-moz-placeholder { /* Firefox 18- */
			font-family:ralewayregular;
			color: rgb(119, 119, 119);
		}

		input::-moz-placeholder {  /* Firefox 19+ */
			font-family:ralewayregular;
			color: rgb(119, 119, 119);
		}

		input:-ms-input-placeholder {  
			font-family:ralewayregular;
			color: rgb(119, 119, 119);
		}
		
		
		
		#tagcloud
        {
            width: 100%;
            height:auto;
        }
		#tagcloud span
		{
			display: inline-flex;
			background-color: white;
			border-radius: 1vmin;
			/*margin: 3vmin 2vmin;*/
            margin: 1vmin 1vmin;
			color: rgb(0, 0, 0) !important;
		}
		#tagcloud span a
		{
            color: rgb(0, 30, 47);
            padding: 1.6vmin;
            font-weight: 900;
		}
		#tagcloud span a:hover
		{
			color: white;
			padding: 1.6vmin;
			text-decoration: none;
		}
        .jobName {
            background: #ECECEC;
            border-radius: 15px;
            display: block;
            color: #7f7f7f;
            margin: 0px auto;
            margin-top: 100px;
            box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.25), 0 2px 8px 0 rgba(0, 0, 0, 0.55);
        }
        #tagcloud .jobName {
            font-size: 2.5vmin !important;
            margin: 2vmin 2vmin !important;
        }
        
        .jobPositionDiv {
            /*background-color: rgba(25, 126, 183, 0.55);*/
            margin-bottom: 2vmin;
            padding: 0.1vmin 3vmin;
            text-align: center;
            width: 100%;
            height: auto;
            position: absolute;
            top: 60vmin;
        }
        #jobPositionDivID {
            display: none;
        }
        .jobName:hover
		{
			display: inline-flex;
			background-color: rgb(0, 61, 95) !important;
			border-radius: 1vmin;
			margin: 2vmin 2vmin;
			color: white !important;
		}
        .browseJobBtn {
            font-size: 2.5vmin !important;
            font-weight: 800 !important;
            position: absolute;
            top: 20%;
            right: 46%;
            width: 17vmin;
            height: 17vmin;
            border-radius: 28vmin !important;
            color: white !important;
            background-color: rgba(0, 169, 255, 0.83) !important;
            border: none !important;
            padding: 0px 0px !important;
            box-shadow: 0px 2px 0px 0px rgba(0, 0, 0, 0.43); /*0px 8px 10px 0px rgba(0, 0, 0, 0.43), inset 0px 4px 1px 1px rgba(26, 130, 247, 0.49), inset 0px -3px 1px 1px rgba(204,198,197,.5);*/
        }
        .browseJobBtn:hover {
            background-color: rgb(0, 169, 255) !important;
        }
        #bannerID {
            background-image:url('<?php bloginfo('template_directory'); ?>/images/careers_1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            -moz-transition: height .45s;
            -ms-transition: height .45s;
            -o-transition: height .45s;
            -webkit-transition: height .45s;
            transition: height .45s;
            width: 100%;
            height: 34vmin;
            overflow: hidden;
        }
        /*.careerFormStyles {
            border-radius: 15px;
            height: 50vmin;
            background-color: #EFECEC;
        }*/
        .closeBtn {
            font-family: 'ralewayregular' !important;
            font-weight: 600 !important;
        }
        .fontStyles {
            font-family: 'ralewayregular' !important;
        }
        
        
        .boxPoints {
            border-radius: 5px 5px 0px 0px;
            margin-top: 10px;
            box-shadow: 0 2px 8px 0 rgba(255, 255, 255, 0.25), 0 2px 8px 0 rgb(0, 0, 0);
        }
        .workAtZap {
            text-align: center;
            width: 100%;
            height: auto;
            display: inline-block;
        }
        .eachCol {
            padding-left: 4vmin !important;
            padding-bottom: 4vmin;
            padding-right: 4vmin !important;
        }
        .gradBox1 {
            background: rgba(26, 130, 247, 0.92);
            background: linear-gradient(to right bottom, rgb(0, 61, 95), rgb(0, 137, 197));
        }
        .gradBox2 {
            background: rgba(8, 80, 162, 0.85);
            background: linear-gradient(to right bottom, rgb(0, 137, 197), rgb(0, 61, 95));
        }
        .eachPoint{
            text-align: center;
        }
        .pointTitle {
            padding: 15px;
            font-family: ralewaybold !important;
            color: white !important;
        }
        .subPoints{
            color: white;
            font-size: large;
            padding: 20px;
        }
        
        
        .careerFormStyle {
            padding-top: 15px;
            height: 66vmin;
            background-color: #FFFFFF;
            box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.25), 0 2px 2px 0 rgba(0, 0, 0, 0.28);
        }
        
        .perks-benefits {
            background-image: url('<?php bloginfo('template_directory'); ?>/images/perks-benefits-dark.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width:100%;
            height: auto;
            position: static !important;
        }
        /*.ban-perk-image {
            background-color: black;
        }*/
    </style>
    
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
    
    <script>
        function showJobPositions(){
            var jobPosDivID = document.getElementById("jobPositionDivID");
            var bannerID = document.getElementById("bannerID");
            if(jobPosDivID.style.display == "block"){ //if visible, hide the jobPosition div
                jobPosDivID.style.display = "none";
                bannerID.style.height = "34vmin";
            }
            else {                                    //if hidden, show the jobPosition div
                bannerID.style.height = "58vmin";
                var op = 0.1;  // initial opacity
                var timer = setInterval(function () {
                    if (op >= 1){
                        clearInterval(timer);
                    }
                    jobPosDivID.style.opacity = op;
                    jobPosDivID.style.filter = 'alpha(opacity=' + op * 100 + ")";
                    op += op * 0.1;
                }, 40);
                jobPosDivID.style.display = "block";
            }
        }
    </script>
    
    
    <script>
        jQuery(function() {
            jQuery('#box1').css('opacity', 0);
            jQuery('#box2').css('opacity', 0);
            jQuery('#box3').css('opacity', 0);
            jQuery('#box4').css('opacity', 0);
            
            jQuery(window).scroll(function() {    
                var scroll = $(window).scrollTop();
                if (scroll >= 50) {
                    jQuery('#box1').addClass("fadeInUp");
                }
                if (scroll >= 210) {
                    jQuery('#box2').addClass("fadeInUp");
                }
                if (scroll >= 290) {
                    jQuery('#box3').addClass("fadeInUp");
                }
                if (scroll >= 400) {
                    jQuery('#box4').addClass("fadeInUp");
                }
            });
        });
    </script>
    

        <style type="text/css">
        #our_culture{
            width: 100%;
            text-align: center;
            position: relative;
            z-index: -3;
            background-color: rgb(238,238,238);
            /*border-bottom: 3px black solid;*/
            padding-top: 25px;
        }
        #our_culture h2{
            font-size: 33px;
            padding: 20px 0px;
        }
        #our_culture h6{
            font-size: 15px;
            padding: 10px 75px;
        }


        #myCarousel img{
            /*width: 100%;*/
        }
        .carousel-indicators li{
            color: #000 !important;
            border-color: #000 !important;
            /*background-color: rgba(255,255,255,1) !important;*/
        }
        .carousel-indicators li:active{
            color: #000 !important;
            background-color: rgba(0,0,0,1) !important;
        }
        .carousel-inner{
            background-image: url('<?php bloginfo('template_directory'); ?>/images/career_banner_temp.jpg');
            background-size: cover;
            background-position: 50%;
        }
        #myCarousel .item{
            height: 450px;
            background-color: rgba(0,0,0,0.4);
            -webkit-transition: 0.3s ease-in-out left;
            -moz-transition: 0.3s ease-in-out left;
            -o-transition: 0.3s ease-in-out left;
            transition: 0.3s ease-in-out left;
        }
        #myCarousel h3{
            color: #fff;
            font-size: 20px;
        }

    </style>
    
</head>

<body class="careerspage">
 
 <div class="nav-down" id="header_div">    
        <?php get_header(); ?>
</div>


   
<main id=maincontent>
    <section class="banner">
        <?php
            global $wpdb;
            $sql = "SELECT * FROM `wp_career_career_banner`";
            $sqll=$wpdb->get_results($sql);
        ?>
        
        <?php
            foreach($sqll as $post_name){
        ?>
        <!-- <div class="banner-img-pos carrer-b bannerStyle collapseBanner" id="bannerID">
            <button type="button" class="btn btn-default browseJobBtn" onclick="showJobPositions()" style="text-align: center; left: 50%; margin-left: -3em;">Browse Jobs <br><span class="fa fa-angle-double-down fa-3x" style="font-size: 2.1em; color: #FFFFFF;position: absolute;left: 6.5vmin;"> </span> </button>
        </div> -->
        <div class="banner-img-pos carrer-b bannerStyle collapseBanner" id="bannerID">
            <div align="center" class="browseJobBtn" style="text-align: center; left: 50%; margin-left: -3em; padding-top: 2.2em !important; cursor: pointer;" onclick="showJobPositions()" >Browse Jobs <br><span class="fa fa-angle-double-down fa-3x" style="font-size: 2.1em; color: #FFFFFF;position: absolute;left: 6.5vmin;"> </span></div>
        </div>
    </section> <!--- banner section ---->
    
    <br>
    <section>
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
                                                
								                <button type="button" class="btn btn-default closeBtn" data-dismiss="modal" onclick="closeModal(\'jid'.$eachjob->cjid.'\')">Close</button>
								        </div>
                                    </div>
                                </div>
                            </div>';
                    
                        $designation=$eachjob->desination_name;
				        $designation=str_replace(".","_",$designation);
				        $designation=str_replace(" ","_",$designation);
                        echo 	'<span class="jobName" data-count="'.rand(17,17).'">
											<a href="#'.$designation.'Modal"  onclick="showModal(\'jid'.$eachjob->cjid.'\')" style="font-size: 2.5vmin"> '.$eachjob->desination_name.' 
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
        
    <script>
        $('.applybtn').click(function(event) {
            jQuery('html,body').animate({
                scrollTop: jQuery("#careerApplyForm").offset().top},
                'slow');
        });
    </script>
    </section>
    
    
    
    
  
    
    
<!--
		<?php } ?>
</section> <!---  section 3 ---->
    


    <section class="section-2" id="our_culture">
        <h2> Our Culture</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/horizontal_line.png"/>
        <h6> 
            Why ZapCom?
        </h6>
        <div class="container" style="width: 75%;">
            <div class="row">
                <div class="col-sm-12" style="padding-top: 15px;">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                      <div class="item active">
                        
                        <div class="carousel-caption">
                          <h3> &ldquo; As it’s a start-up that is willing to learn &rdquo; </h3>
                        </div>
                      </div>

                      <div class="item">
                       
                        <div class="carousel-caption">
                          <h3> &ldquo; A start-up that is willing to define how businesses can be done &rdquo; </h3>
                        </div>
                      </div>
                    
                      <div class="item">
                        
                        <div class="carousel-caption">
                          <h3> &ldquo; A company willing to enhance users to have a good value experience with it’s content and information &rdquo; </h3>
                        </div>
                      </div>

                      <div class="item">
                        
                        <div class="carousel-caption">
                          <h3> &ldquo; A culture that is evolving to be a Cohesive Professional team of Achievers &rdquo; </h3>
                        </div>
                      </div>
                      <div class="item">
                        
                        <div class="carousel-caption">
                          <h3> &ldquo; A company that is willing to provide opportunity to explore one’s talent and skills &rdquo; </h3>
                        </div>
                      </div>
                      <div class="item">
                        <div class="carousel-caption">
                          <h3> &ldquo; A company that gives equal employment opportunity &rdquo; </h3>
                        </div>
                      </div>
                  
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section-3 perk-pos" style="z-index:-3;">
        
        <!--<div class="ban-perk"> <img src="<?php bloginfo('template_directory'); ?>/images/perks-benefits-dark.jpg"> </div>-->
        
        <div class="perk-cnt-career perks-benefits">
            <div class="container">
                <h2 class="head-sec cr-bnft" > The Perks and Benefits </h2>
                <p class="cnt-sec" style="font-family: 'ralewayregular'; font-size: 2.5vmin;"> Our team competes at the highest level. At ZapCom, we nurture a uniquely engaging workplace that delivers. And how do we keep this 'engaging workplace' happy? That's where the perks come into play. For starters, you'll enjoy:  </p>
                
                <div class="static-tab-whowr">
                    <div class="carr-benft">
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
                    <div class="carr-benft"> 
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
    </section> 
  
    
    <section id="careerApplyForm" class="section-2 career-tab" style="width: 100%; height: 100px; padding: 0px 0px; margin-top: -100px;"></section>
	<section class="section-2 career-tab" style="padding-top: 1vmin; padding-bottom: 8vmin; position: relative; z-index: -3;">  <!-- Career Form With Job Descriptions -->
            <!--<div class="container row">-->
               <!-- <section class="section-2 sec-cn-form">-->   <!-- Career Form -->
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
                                    <h3 style="line-height: 65px; font-weight: 600; font-family: 'ralewayregular'; color: #003D5F;">
                                        Apply for the Job
                                    </h3>
                                  </div>
								<div class="txt-div" style="margin-left:8px; width:48%">
									<input type="text" class="txt-form-zp" placeholder="Your Name" required="required" pattern="[a-zA-Z ]+" name="name" minlength="2" style="height: 35px;" oninvalid="setCustomValidity('Your name should contain alphabets only')" onchange="try{setCustomValidity('')}catch(e){}" required>
								</div>
								<div class="txt-div" style="width:48%">
									<input type="email" class="txt-form-zp" placeholder="Your Email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" style="height: 35px;" oninvalid="setCustomValidity('Please enter a valid Email ID. E.g: john@yahoo.com')" onchange="try{setCustomValidity('')}catch(e){}" required>
								</div>
								<div class="txt-div" style="margin-left:8px; width:48%">
									<!--<input type="text" class="txt-form-zp" placeholder="Your Mobile" required="required" pattern="[7-9]{1}[0-9]{9}" name="mobile" style="height: 35px;">-->
                                    <input type="text" class="txt-form-zp" placeholder="Your Mobile" required="required" pattern="(\+\d{1,3}[- ]?)?\d{6,12}" name="mobile" style="height: 35px;" oninvalid="setCustomValidity('Please enter a valid Mobile Number')" onchange="try{setCustomValidity('')}catch(e){}" required>
								</div>
								<div class="txt-div" style="width:48%">
									<select id="jobPosition" name='jobpositions' style="width:98%; height:35px; font-family:'ralewayregular';" class="txt-form-zp" placeholder="Choose Job Position" oninvalid="setCustomValidity('Choose the Job Position you applying for')" onchange="try{setCustomValidity('')}catch(e){}" required>
										<!--<optgroup label=" ">-->
											<option value="" disabled selected hidden >Post applying for...</option>
										<!--</optgroup>-->
										<?php
											$position_name_arr=array("Design", "Development");
											for($x = 0; $x < count($position_name_arr); $x++) 
											{
												echo '<optgroup label="'.$position_name_arr[$x].'">';
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
								<div class="txt-div full" style=" text-align: center; width: 95%; border: 0.5px solid rgba(128, 128, 128, 0.44); border-radius: 4px; margin-left: 10px;">
									<span style="width: 48%; margin-right: 18px; text-align: right; color: #777777; padding: 6px;">&nbsp;Curriculum Vitae</span>
									<input type="file" id="file" placeholder="Upload Your Resume" name="file" class="txt-form-zp" required="required" accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document" style="margin: 0px !important; width: 46%; margin-top: -6px; font-family: 'ralewayregular';" required>
									
								</div>
								
								
								<div class="txt-div full">
									<input type="hidden" id="hiddenjobpositions" value="" name="hiddenjobpositions">
								</div>
								<div class="txt-div full">
									<input type="submit" class="tech-sec4-cnct" value="Apply" name="submit" style="float: none; height: 45px; font-size: 1.9rem;"> 
									<span style="width: 100%; text-align: center;">&nbsp; Or, Send us an email directly to hr@zapcg.com</span>
								</div>
                            
                            </form>
                    </div>
                </div>
				   <!-- </section> --> <!-- Career Form -->
            <!--</div>-->

		</div>			
				
		
				
		<div class="col-md-4">
            <br>
            <div class="cnt-form"> <!--style="background-color:white; border-radius:5px; padding:1.5vmin; height:430px;">-->
                <div class="careerFormStyle"><!--style="background-color:white; height:500px; border-radius:5px; padding:3%;">-->
                    <!-- <div class="txt-div full"> -->
						<h3 style="line-height: 65px; font-weight: 600; font-family: 'ralewayregular'; color: #003D5F;">Choose Your Destiny</h3>
					<!-- </div> -->
					<!-- <div class="txt-div full"> --> 
						<p  style="padding: 8px;">Join a PASSIONATE, TECH-SAVVY, and more importantly 'PEOPLE-ORIENTED' Team!</p>
					<!-- </div> -->
					<div class="txt-div full"> 
						<center> <img src="<?php bloginfo('template_directory'); ?>/images/careers_destiny.jpg"> </center>
					</div>
					<div class="txt-div full"> 
						<p style="padding-left: 8px; padding-right: 8px; padding-bottom: 8px">We think creativity is important, we value honesty and teamwork, and moreover we're having a lot of fun creating a valuable product.</p>
					</div>
                </div>
            </div>
        </div>
    </section>
	
	
    
<!-- <section class="section-3" style=" background-color: #198AC9; color:white; margin-top:30px;">
	<div class="container">
		<h3 class="cnt-hd-sec">  <span style="color:#ffffff;font-size:3vmin;">Working with a start-up is always interesting and challenging. And what's more, everyone is an equal among equals. ZapCom is the right place for people who refuse to obey the usual norms and want to test unchartered waters. ZapCom nurtures the innovative and experimental inquisitiveness in its people and gives full support to bloom and flourish.</span> </h3>

		
	</div>
</section> -->
</main>

<?php get_footer(); ?> <!-- wrapper -->






</body>

<script src="<?php bloginfo('template_url'); ?>/js/jss/bootstrap.min.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.min.js"> </script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/jquery.bxslider.min.js"> </script>
</html>