<?php
/*
Template Name:Insights
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ZapCom Group| Insights</title>
<meta name="description" content="We are passionate about transforming innovative ideas into great products. ">

<!-- Button Styles -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
		width: 65%;
		background: #fff;
		/*height:80vh;*/
		/*border-top: 5px solid #c7c7c7;*/
	}
	.tech-heading{
		font-size:5vmin;
		margin-top: 2%;
		margin-bottom: 3%;
		font-family: 'montserratLight' !important;
		color: #198AC9;
		line-height: 1;
	}
	.para1{
		width: 100%;
		font-size:3.0vmin;
		margin-top: 1%;
		margin-bottom: 2%;
		font-family: 'montserratLight' !important;
		color: #003D5F;
	}
	.dateTime{
		width: 100%;
		font-size:3.0vmin;
		color: #003D5F;
		font-family: 'montserratLight' !important;
		/*font-style: italic;*/
	}
	.imageDiv{
		align-self: center;
		margin-bottom: 2%;
		height: 50vmin;
		width: 100%;
	}
	.image{
		display: block;
		margin-left: auto;
		margin-right: auto;
		max-width: 100%;
		max-height: 100%
	}
</style>
	
</head>
<body class="insightspage">
	<header class="nav-down" id="headersec">
        <?php get_header(); ?>
    </header>

 	<!-- Starting PHP Code Here -->
    <?php
    	$con = mysqli_connect("localhost","root","root","zapcgdb");

		// Check connection
		if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		$blog_limit = 2;


         if( isset($_GET{'id'} ) ) {
            $id = $_GET{'id'};
         }else {
            $id = 0;
         }

         $sql = "SELECT id, title, blog_content, author, date_time, image FROM blogs WHERE id = $id";
         $query = mysqli_query($con, $sql);

         if(!$query) {
            die('Could not get data: ' . mysqli_error());
         } ?>
<main id=maincontent>

<section class="banner">


 <div class="banner-img-pos"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-technology2.jpg" style="margin-top: -4vmin !important; width:100%;"> </div> 

 <div class="container">

<!--<div class="img-dwn"> <a href="#whoweare"> <span class="dwn-sprt"> </span> </a> </div>-->

</div>

</section>


	<hr/>
	
<section id="tech-cloud" class="tech-sec">
         <?php

          while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $originalDate = $row['date_time'];
			$newDate = date("M d, Y", strtotime($originalDate)); ?>


    <!-- Ending PHP Code Here -->

    

	<h2 class="tech-heading">
		<?php echo $row['title']; ?>
	</h2>
	<p class="dateTime">
		<?php echo $newDate; ?> By <?php echo $row['author']; ?>
	</p>



	<div class="imageDiv">
		<a><img class="image" src="<?php bloginfo('template_directory'); ?>/images/<?php echo $row['image']; ?>" alt="Image"></a>
	</div>
	<p class="para1">
		<?php echo $row['blog_content']; ?>
	</p>
	<!-- Start PHP Code -->

	<?php
         }

         
    	mysqli_close($con);
    ?>
	
    <!-- End PHP Code -->
</section>
	

	
	

	
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

