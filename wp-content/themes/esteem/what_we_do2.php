php 

Template Name What We Do   
 

!DOCTYPE HTML
html
head
meta http-equiv=Content-Type content=texthtml; charset=utf-8
titleZapCom Group  What We Dotitle
meta name=description content=ZapCom is all about being passionate in building innovative and intuitive products in the areas of Hospitality and Retail.  
head
style
span.morecontent span {
    display none;
}
.wht-prd-new {
    float left;
}
style
	style
		
		.banner-img-pos img {
			margin-top -1vmin;
		}
		
		
		.howwehelplist {
			list-style-type circle !important;
			width60vw !important;
		}
		#howwehelplist1 li{
		   background url(php bloginfo('template_directory'); imagescheckmark.png) no-repeat left 1px;
		}
		
		@media screen and (max-width 767px){
			.banner p{
				font-size 30px;
				bottom 80px;
			}
		}

		@media screen and (min-width 768px){
			.banner p{
				font-size 50px;
				bottom 130px;
			}
		}
		
	style
style

.zapcom-heading{
	font-family 'ralewayregular';
	font-size 40px;
}
.zapcom-subheading{
	font-family 'ralewaybold';
	font-size 25px;
}
.zapcom-body{
	font-family 'ralewayregular';
	font-size 18px;
    position absolute;
    opacity 0;
    top 0;
}

	#page_tagline{
		background-color rgba(238,238,238,1);
	}
	#page_tagline div.row{
		margin 2vmin;
	}
	#page_tagline div.row divnth-child(even){
		font-size 4vmin;
		padding-top 4.5vmin;
	}
	#page_tagline div.row divnth-child(odd){
		font-size 15vmin;
		color #198AC9;
		vertical-align text-top;
		padding 0vmin;
	}
	@media screen and (max-width 767px){
		#page_tagline div.row{
			margin 2vmin 25px;
		}
	}



	#whoweare_3tech .imgdiv{
		display block;
	}

	#whoweare_3tech .wtwedo_icon{
		background-color #fff;
		border 0px transparent solid !important;
	    float left;
	    height 210px;
	    width 240px;
	    margin 0 0 10px 0;
	    background-repeat no-repeat;
	    background-position 50%;
	    border-radius 50%;
	    border 1px solid #cacaca;
	    display block;
	    margin 2vmin 10px;
	    background-color transparent;
	}
	#whoweare_3tech .icon_cloud{
		background-image url(php bloginfo('template_directory'); imageswhweare_icon_cloud.png);
		background-size 80%;

	}
	#whoweare_3tech .icon_bigdata{
		background-image url(php bloginfo('template_directory'); imageswhweare_icon_bigdata.png);
		background-size 72%;

	}
	#whoweare_3tech .icon_mobile{
		background-image url(php bloginfo('template_directory'); imageswhweare_icon_mobile.png);
		background-size 70%;

	}



	.services-section-indnth-child(even){
		background-color rgba(238,238,238,1);
	}

	@media only screen and (min-width 1080px){
		.services-section-ind .content .content-text{
			background-color transparent;
			width 80%;
		}
		#digi_trans .content .content-text{margin-top-450px !important;}
		#architect_cloud .content .content-text{margin-top-550px !important;}
		#cust_analytics .content .content-text{margin-top-550px !important;}
		#except_mobile .content .content-text{margin-top-550px !important;}
	}
	@media only screen and (min-width 768px){
		.services-section-ind{
			text-align left;
			float left;
			width 100%;
			background-size 50% 100%;
			background-repeat no-repeat;
		}
		.services-section-indnth-child(even){
			text-align left;
			float left;
			width 100%;
			background-size 50% 100%;
			background-position 100% 100%;
			background-repeat no-repeat;
		}
		.services-section-ind .content{
			width 50%;
			background-color transparent;
			padding 10px 25px 10px 25px;
			border-top 400px solid #fff;	
			border-left 100px solid transparent;
			height 400px;
			position absolute;
			right 0;
		}
		.services-section-indnth-child(even) .content{
			width 65%;
			background-color transparent;
			padding 10px 25px 10px 5px;
			border-top 400px solid #eee;	
			border-right 100px solid transparent;
			height 400px;
			position absolute;
			left 0;
		}
		.services-section-ind .content .content-text{
			background-color transparent;

		}

		.services-heading{
			font-size5vmin;
			margin-bottom 3%;
			font-family 'ralewayregular' !important;
			color #198AC9;
			line-height 1;
			background-color transparent;
		}
		.services-para1{
			font-size 18px;
			margin-bottom 3%;
			font-family 'ralewaybold' !important;
			color #003D5F;
			background-color transparent;
		}
		.services-para2{
			font-size 19px;
			color #003D5F;
			font-family 'ralewaylight' !important;
			background-color transparent;
		}

		#digi_trans{height inherit;}
		#digi_trans .content{border-top 500px solid #fff;height 500px;}
		#digi_trans .content .content-text{margin-top-500px;}

		#architect_cloud{height inherit;}
		#architect_cloud .content{border-top 600px solid #eee;height 600px;}
		#architect_cloud .content .content-text{margin-top-600px;}

		#cust_analytics{height 600px;}
		#cust_analytics .content{border-top 600px solid #fff;height 600px;}
		#cust_analytics .content .content-text{margin-top-600px;}

		#except_mobile{height 650px;}
		#except_mobile .content{border-top 650px solid #eee;height 650px;}
		#except_mobile .content .content-text{margin-top-650px;}

		#whatwedo_sec_paras div[class=row] {
			display flex;
			align-items center;
		}

	}
	@media only screen and (max-width 767px){
		.services-section-ind{
			text-align left;
			padding 5% 5%;
			float left;
			width 100%;
			background #fff;
			background-image none !important;
			height80vh;
			border 1px solid gold;
			
			border-bottom 8px solid #c7c7c7;
		}
		.services-heading{
			font-size25px;
			margin-bottom 3%;
			font-family 'ralewaybold' !important;
			color #198AC9;
			line-height 1;
		}
		.services-para1{
			font-size18px;
			margin-bottom 3%;
			font-family 'ralewaybold' !important;
			color #003D5F;
		}
		.services-para2{
			font-size19px;
			color #003D5F;
			font-family 'ralewaylight' !important;
			font-style italic;
		}
	}

	#services_sec{
		background-color rgba(238,238,238,1);
	}
	#services_sec h2{
		font-size 7vmin;
		margin-bottom 2vmin;
	}

	#whatwedo_sec_paras div[class=row] {
		margin 10px 5vmin;
	}
	#whatwedo_sec_paras div[class=col-]{
		margin 10px 2vmin;
		padding 0px 0px;
		background-color rgb(238,238,238);
		box-shadow 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
		box-shadow 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);

	}
	#whatwedo_sec_paras  div  divlast-child  div{
		padding 1vmin 10vmin;
	}
	#whatwedo_sec_paras .panel{
		border none !important;
		margin 0px 60px;
		box-shadow none;
		-webkit-box-shadow none;
	}
	#whatwedo_sec_paras .panel-heading{
		border-top 1px #847f7f solid;
		border-top 1px #ddd solid;
		background-color #fff !important;
	}
	#whatwedo_sec_paras .panel-body{
		border-top-color #fff;
		background-color #fff !important;
	}
	#whatwedo_sec_paras h3{
		font-size 5vmin;
		padding-top 3vmin;
		padding-bottom 3vmin;
		padding-left 5vmin;
		color  #198AC9;
		width 100%;
		text-align left;
		background-color #fff !important;
		font-family 'ralewayregular' !important;
	}
	#whatwedo_sec_paras h2{
		font-family 'ralewayregular' !important;
	}
	#whatwedo_sec_paras a,#whatwedo_sec_paras avisited, #whatwedo_sec_paras ahover, #whatwedo_sec_paraslink{
		text-decoration none;
	}
	#whatwedo_sec_paras .imgdiv{
		width 100%;
		padding-bottom 2vmin;
		background-color #fff !important;
	}
	#whatwedo_sec_paras p{
		font-size 16px;
        font-weight bold;
		color #fff;
		width 100%;
		padding 5px 12vmin;
		text-align left;
		
	}
	#whatwedo_sec_paras img{
		height 150px !important;
        margin-left 33%;
	}
	#whatwedo_sec_paras span{
		width 100px;
	    height 100px;
	    background-repeat no-repeat;
	    background-size 100%;
	}
	@media only screen and (min-width 768px){
		.row-eq-height {
			display -webkit-box;
			display -webkit-flex;
			display -ms-flexbox;
			display flex;
		}
	}
	@media only screen and (max-width 767px){
		#whatwedo_sec_paras .panel{
			margin 0px 20px;
		}
	}
style
	
style
.widget-head-color-box {
    border-radius 5px 5px 0px 0px;
    margin-top 0px;
	
}

.navy-bg {
    background url(php bloginfo('template_directory'); imagesservices1.png) no-repeat center;
	background-size cover;
}
.navy-bgbefore {
	-webkit-filter brightness(30%);
}
.p-lg {
    padding 17px;
}



.whowr-tab1 p{
	font-size 15px !important;
}
    
    .threeIconsCloud{
        left 33.5%;
        opacity 0;
        -webkit-transition all 300ms;
	    -moz-transition all 300ms;
        transition all 300ms;
    }
    .threeIconsCloud.movedhover{
         -webkit-transform scale(0.7);
            -moz-transform scale(0.7);
            transform scale(0.7);
        
    }
    .threeIconsCloud.moved{
        opacity 1;
        left0;
    }
    .threeIconsBigData{
        opacity 0;
         -webkit-transition all 300ms;
	    -moz-transition all 300ms;
        transition all 300ms;
    }
    
     .threeIconsBigData.moved{
        opacity 1;
       
    }
    .threeIconsMApps{
        right 33.5%;
        opacity 0;
        -webkit-transition all 300ms;
        -moz-transition all 300ms;
        transition all 300ms;
    }
    .threeIconsMApps.moved{
       opacity 1;
       right 0;
    }
    .threeIconsMApps.movedhover{
         -webkit-transform scale(0.7);
            -moz-transform scale(0.7);
            transform scale(0.7);
        
    }
    
    .leaderdesc{
            opacity 0;
            top 0;
            position absolute;
            color #0f2642;
            width 70%;
            left 75px;
            -webkit-transition all 300ms;
	       -moz-transition all 300ms;
           transition all 300ms;
        }
    
        .leaderOuterBox{
            height 250px;
        }
        
        .leaderOuterBox .leaderimage{
           -webkit-transition all 300ms;
	       -moz-transition all 300ms;
           transition all 300ms;
        }
        
       
        
        div.leaderOuterBoxhover .leaderdesc{
            opacity 1;
            -webkit-transform translateX(-30px);
            -moz-transform translateX(-30px);
            transform translateX(-30px);
        }
         div.leaderOuterBoxhover .leaderimage{
            opacity 0.3;
            -webkit-transform scale(0.7);
            -moz-transform scale(0.7);
            transform scale(0.7);
        }
style
	
body class=whatwedopage
	
div class=nav-down id=header_div	
        php get_header(); 
div


    
main id=maincontent
section id=firstSection class=banner section-3 data-section-name=section1 style=height 643px;


 div class=banner-img-pos style=background url('php bloginfo('template_directory'); imagesbannerwhatwedo2.jpg') no-repeat center; background-size cover; height643px; 
 	div style=height100%; width100%; positionabsolute; background-color #000; opacity 0.35; z-index 0;
 	div
 	p style=color #153965;
	    text-align center;
	    padding-left 5vmin;
	    padding-right 5vmin;
	    z-index 1;
    	position absolute;
    	width 100%;
    	font-family 'ralewayregular';
        text-transform uppercase;
        top 40%;
        font-weight bold;
 		Shaping your span style=path-breaking ideasspan into span style=innovative softwarespan
 	p
  div
section
 !--img src=php bloginfo('template_directory'); imagesserviceBanner.jpg-- 
		
	
		

	

!--
div class=container
div class=banner-cnt wht-wd 
  p To me, ideas are worth nothing unless executed. br They are just a multiplier. Execution is worth millions.  p
   h1 class=h2-bnnr-whowr- Steve Jobs h1
div

div
--


 !--- banner section --

section  class=section-3 data-section-name=section2 id=page_tagline style=height 643px;z-index -3; position relative
	div class=row
		div class=col-md-1 col-sm-1 col-xs-1&ldquo;div
		div class=col-md-10 col-sm-10 col-xs-10
			p
				We excel in developing high performing software products and platforms, Giving wings to your revolutionary ideas. Convert them to an engaging, inspiring and transforming user experience.
			p
		div
		div class=col-md-1 col-sm-1 col-xs-1&rdquo;div
	div
    


div id=whoweare_3tech style=background-color rgba(238,238,238,1); position relative; z-index -3; padding0px 0px;

    
    div id=myCarousel class=carousel slide visible-xs  data-ride=carousel
  !-- Indicators --
  !-- Wrapper for slides --
  div class=carousel-inner role=listbox
    div class=item active
         h4 class=zapcom-subheading Cloud h4
			centerdiv class=imgdivspan class=wtwedo_icon icon_cloud spandivcenter
			p class=textcontent zapcom-bodyZapCom builds complex software solutions on cloud or migrate the legacy onesp
    div

    div class=item
     h4 class=zapcom-subheading Big-Data h4
			centerdiv class=imgdivspan class=wtwedo_icon icon_bigdata spandivcenter
			p class=textcontent zapcom-bodyFor customers, our big data solutions mean faster, easier, simple and actionable insightsp
    div

    div class=item
     h4 class=zapcom-subheading Mobile Apps h4
			centerdiv class=imgdivspan class=wtwedo_icon icon_mobile spandivcenter
			p class=textcontent zapcom-bodyOur solutions help enterprises adopt mobile as a new channel to engage their customers p
    div  
  div

  !-- Left and right controls --
  a class=left carousel-control href=#myCarousel role=button data-slide=prev
    span class=glyphicon glyphicon-chevron-left aria-hidden=truespan
    span class=sr-onlyPreviousspan
  a
  a class=right carousel-control href=#myCarousel role=button data-slide=next
      
    span class=glyphicon glyphicon-chevron-right aria-hidden=truespan
    span class=sr-onlyNextspan
  a
div
    
div class=container hidden-xs
   
		div class=col-sm-4 threeIconsCloud style=padding 30px 5px;
			h4 class=zapcom-subheading Cloud h4
			centerdiv class=imgdivspan class=wtwedo_icon icon_cloud spandivcenter
			p class=textcontent zapcom-bodyZapCom builds complex software solutions on cloud or migrate the legacy onesp
		div

		div class=col-sm-4 threeIconsBigData style=background-color #fff; padding 30px 5px; border 1px solid rgb(238,238,238);
			h4 class=zapcom-subheading Big-Data h4
			centerdiv class=imgdivspan class=wtwedo_icon icon_bigdata spandivcenter
			p class=textcontent zapcom-bodyFor customers, our big data solutions mean faster, easier, simple and actionable insightsp
		div

		div class=col-sm-4 threeIconsMApps style=padding 30px 5px; 
			h4 class=zapcom-subheading Mobile Apps h4
			centerdiv class=imgdivspan class=wtwedo_icon icon_mobile spandivcenter
			p class=textcontent zapcom-bodyOur solutions help enterprises adopt mobile as a new channel to engage their customers p

	div
    
    
div
	!--div class=container row
		div class=col-sm-4 threeIconsCloud style=padding 30px 5px;
			h4 class=zapcom-subheading Cloud h4
			centerdiv class=imgdivspan class=wtwedo_icon icon_cloud spandivcenter
			p class=textcontent zapcom-bodyZapCom builds complex software solutions on cloud or migrate the legacy onesp
		div

		div class=col-sm-4 threeIconsBigData style=background-color #fff; padding 30px 5px; border 1px solid rgb(238,238,238);
			h4 class=zapcom-subheading Big-Data h4
			centerdiv class=imgdivspan class=wtwedo_icon icon_bigdata spandivcenter
			p class=textcontent zapcom-bodyFor customers, our big data solutions mean faster, easier, simple and actionable insightsp
		div

		div class=col-sm-4 threeIconsMApps style=padding 30px 5px; 
			h4 class=zapcom-subheading Mobile Apps h4
			centerdiv class=imgdivspan class=wtwedo_icon icon_mobile spandivcenter
			p class=textcontent zapcom-bodyOur solutions help enterprises adopt mobile as a new channel to engage their customers p

		div

	div--

div 
section

section class=section-3 tab-wt-wd data-section-name=section3 id=whoweare style=height 643px;padding-top0px; position relative; z-index -3; 
			div class=services-section-ind id=digi_trans style=background-image url('php bloginfo('template_directory'); imageswhweare_digital_transform.jpg');
				div class=content
					div class=content-text
						h2 class=services-heading
							Digital Transformation to Empower Customers
						h2
						p class=services-para1
							Technology advancement has put customers in control of their interactions with businesses. Enterprises wanting to know and delight their customers, have to realign and invest with focus on providing exceptional customer experience. 
						p
						p class=services-para2
							With extensive experience in understanding the digital economy, ZapCom is strategically placed to help clients deliver better products, services and business processes through Disruptive Technologies, Insights & Processes.
						p
					div
				div
			div
    section
    section class=section-3 tab-wt-wd data-section-name=section4 id=whoweare style=height 643px;padding-top0px; position relative; z-index -3; 
			div class=services-section-ind  id=architect_cloud  style=background-image url('php bloginfo('template_directory'); imageswhweare_cloud.jpg');
				div class=content
					div class=content-text
						h2 class=services-heading
							Architecting Cloud-Aware Applications
						h2
						p class=services-para1
							With cloud computing, applications are built differently, run differently, and consumed differently. These differences require new modes of thinking and an understanding of the design patterns that achieve the best results. P2V approach of deploying a multi-tier application on a cloud infrastructure prevents applications from taking advantage of the unique capabilities of the cloud. 
						p
						p class=services-para2
							ZapCom can assist you in creating applications resilient to failure & latency, secure, location independent and elastically scalable, with service composability.
						p
					div
				div
			div
    section
    section class=section-3 tab-wt-wd data-section-name=section5 id=whoweare style=height 643px;padding-top0px; position relative; z-index -3; 
		  	div class=services-section-ind id=cust_analytics  style=background-image url('php bloginfo('template_directory'); imageswhweare_analytics.jpg');
				div class=content
					div class=content-text
						h2 class=services-heading
							Customer insights through Predictive Analytics
						h2
						p class=services-para1
							Segmenting customers is not enough. You have to micro-target to engage them deeper. Chances of making a successful transaction is much higher when you are able to create a customized offering by predicting what a specific customer would prefer in a particular context, based on consumer data and past behaviours to identify the interests of that individual.
						p
						p class=services-para2
							ZapCom’s Predictive Analytics Framework based on Natural Language Processing (NLP), Machine Learning and Semantic Technologies can help to establish relationships between users and their choice criteria based on similar contexts in the past. 
						p
					div
				div
			div
    section
    section class=section-3 tab-wt-wd data-section-name=section6 id=whoweare style=height 643px;padding-top0px; position relative; z-index -3; 
		  	div class=services-section-ind  id=except_mobile  style=background-image url('php bloginfo('template_directory'); imageswhweare_mobile.jpg');
		  		div class=content
					div class=content-text
						h2 class=services-heading
							Creating exceptional Mobile Apps
						h2
						p class=services-para1
							Deciding the right architecture and UI for your Enterprise Mobile Apps can impact cost, usability, reliability & adoption. There is no ‘one-size-fits-all’ architecture to solve all mobile problems. Decision about right architecture depends a number of factors like user profile, required features and range of devices to be supported.
						p
						p class=services-para2
							After considering relevant factors, ZapCom help you choose Native, Hybrid or Web architecture for your mobile apps and advice on the platforms & tools to invest in. We can create high performing, stable, aesthetically appealing, easy to use apps that exploit full capabilities of smart mobile devices.
						p
					div
				div
			div
		  	
section


!--section class=section-3 leadershipsec style=positionrelative; z-index-3; padding-bottom 30px;--
    section class=section-3 data-section-name=section7 id=whatwedo_sec_paras style=height 643px;background-color #fff; z-index -3; position relative;
	
        div
		h2 class=zapcom-headingWe do things differentlyh2
		p style=font-size 15px; color #000; text-align center; margin-top 3vmin; margin-bottom 5vmin;
			To make sure you get “more bang for your buck”
		p
	div
	!--img src=php bloginfo('template_directory'); imageshorizontal_line.png--
        div class=col-sm-4 leaderOuterBox
			div class=leaderimage
				img class=img-responsive src=php bloginfo('template_directory'); imageswtwedo_thingsdiff_perform.png 
                h5 class=job_titleRadical Performanceh5
			div
			div class=leaderdesc
				
				div class=job_info
					p
						ZapCom will help you achieve IT objectives and system performance targets. Our Architecture Realization, Solution Engineering, Database Reengineering &amp; Performance Engineering services spearheaded by our seasoned technologists are tuned to effectuate these.
						p
					
				div
			div
		div
        div class=col-sm-4 leaderOuterBox
			div class=leaderimage
				img class=img-responsive src=php bloginfo('template_directory'); imageswtwedo_thingsdiff_reducing.png 
                h5 class=job_titleReducing Complexityh5
			div
			div class=leaderdesc
				
				div class=job_info
					p
						As more features are added to your product, it gets complex for a simple reason; adding today’s software to yesterday’s software, thereby making it combinatorial of different systems that have different legacies. and, two, the product has to connect to other software. Our technology champions analyse and identify the root causes, prioritize and suggest resolutions.
						p
					div
					
				div
			div
		
		div class=col-sm-4 leaderOuterBox
			div class=leaderimage
				img class=img-responsive src=php bloginfo('template_directory'); imageswtwedo_thingsdiff_idea.png 
                h5 class=job_titleCoE driven Innovationsh5
			div
			div class=leaderdesc
				
				div class=job_info
					p
						Centre of Excellences (CoEs) are our way of innovating and mastering key technologies that we believe will shape the world tomorrow. We have the best brains leading the CoEs. They are encouraged to understand technology trends, learn in depth, innovate through trial & error, define best practices, create reusable libraries & develop in-house skills in their focus area.
						p
					
					!--p class=trigger-click onClick=visible_generic(this)
						spanmore...span
					p--
				div
			div
		div
		
    
    div class=col-sm-4 leaderOuterBox
			div class=leaderimage
				img class=img-responsive src=php bloginfo('template_directory'); imageswtwedo_thingsdiff_opensource.png 
                h5 class=job_titleAdvocating Open Sourceh5
			div
			div class=leaderdesc
				
				div class=job_info
					p
						We are power users of open source software (OSS). Analysts are equivocal that OSS is increasingly ubiquitous as enterprises and startups look to trim software costs while creating modern applications. Judicious adoption of OSS will benefit in terms of quality, innovations, integration flexibility, community support, exit easiness and of course, cost. We’ll customers to adopt right OSS tools and technologies.
						p
					
					!--p class=trigger-click onClick=visible_generic(this)
						spanmore...span
					p--
				div
			div
		div
		div class=col-sm-4 leaderOuterBox
			div class=leaderimage
				img class=img-responsive src=php bloginfo('template_directory'); imageswtwedo_thingsdiff_travel.png 
                h5 class=job_titleTravel & Hospitality Pundith5
			div
			div class=leaderdesc
				
				div class=job_info
					p
						That’s our sweet spot. Our team with deep domain experience across online B2B and B2C travel business, GDS, hotel CRS, destination activities & cruise solutions. Our technology experts have experience in application development, re-engineering and leverage latest trends to help travel & hospitality companies.
						p
					div
					
				div
			
		div
		div class=col-sm-4 leaderOuterBox
			div class=leaderimage
				img class=img-responsive src=php bloginfo('template_directory'); imageswtwedo_thingsdiff_effectiveness.png 
                h5 class=job_titleProcess Efficiency to Effectivenessh5
			div
			div class=leaderdesc
				
				div class=job_info
					p
						ZapCom has successfully delivered many projects in AgileScrum methodology. We help our customers adopt this methodology of rapidly delivering working software and further improve their delivery efficiency through DevOps and Testing Automation.
						p
					
				div
			div
		div

section 


main

php get_footer(); 

 !-- wrapper --


script type=textjavascript
function changeContent(infoDiv, msg) {
  var el = document.getElementById(infoDiv);
  if (infoDiv) {
    el.innerHTML = msg;
  }
}

script

script type=textjavascript
 var TabbedPanels1 = new Spry.Widget.TabbedPanels(TabbedPanels1);
var TabbedPanels2 = new Spry.Widget.TabbedPanels(TabbedPanels2);
script
body

script src=php bloginfo('template_url'); jsjssbootstrap.min.js script
script src=php bloginfo('template_url'); jsjssjquery.min.js script

script src=httpajax.googleapis.comajaxlibsjquery1.8.2jquery.min.jsscript
script src=php bloginfo('template_url'); jsjssjquery.bxslider.min.js script
script src=httpcdnjs.cloudflare.comajaxlibsjquery-easing1.3jquery.easing.min.jsscript
script src=httpyourjavascript.com6140341282jquery-scrollify-min.jsscript
script src=php bloginfo('template_url'); jsjquery.particleground.min.js script

script
    $(.section-3).css({height643px});
$(function() {
$.scrollify({
        section  .section-3,
        sectionName  false,
        interstitialSection  .foot_sec,
        easing easeOutQuint,
        scrollSpeed 1100,
        offset  0,
        scrollbars false,
        standardScrollElements ,
        setHeights true,
        beforefunction(i,panels) {
         
        },
        afterfunction(i,panels) {
            if(i==1){
                $(.threeIconsCloud,.threeIconsMApps,.threeIconsBigData).addClass(moved);
            }else{
                 $(.threeIconsCloud,.threeIconsMApps,.threeIconsBigData).removeClass(moved);
            }
        },
        afterResizefunction() {},
        afterRenderfunction() {}
    });
    });
    
    $('#firstSection').particleground({
    dotColor '#47a1d3','#153965'
        lineColor '#47a1d3',
    density  20000,
        maxSpeedX  1.5,
        maxSpeedY  1.5
});
    
    $('a[href=#myCarousel]').click(function() {
        console.log(this);
        return;
    })
   
script
!-- script src=php bloginfo('template_url'); SpryAssetsSpryURLUtils.js script --

html