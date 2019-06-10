<?php
/*
Template Name:Get Blogs
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ZapCom Group| Insights</title>
<meta name="description" content="We are passionate about transforming innovative ideas into great products. ">

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/get_blogs.css">

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
	
</head>
<body class="insightspage" style="background-color: #f2f2f2;">
	<header class="nav-down" id="headersec">
        <?php get_header(); ?>
    </header>

 	<!-- Starting PHP Code Here -->
    <?php
    	$con = mysqli_connect("localhost","zapadm","RndMysql!@#$","zapcgdb");

		// Check connection
		if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		$blog_limit = 2;

  		/* Getting total count of the blogs */
         $sql = "SELECT count(id) FROM blogs ";
         $query = mysqli_query($con, $sql);

          if(!$query) {
            die('Could not get data first query: ' . mysqli_error());
         }

         $row = mysqli_fetch_array($query, MYSQLI_NUM);
         $blog_count = $row[0];

         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $blog_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }

         $left_blog = $blog_count - ($page * $blog_limit);

         $sql = "SELECT * FROM blogs LIMIT $offset, $blog_limit";
         $query = mysqli_query($con, $sql);

         if(!$query) {
            die('Could not get data second query: ' . mysqli_error());
         } ?>
<main id=maincontent>

<section class="banner">


 <div class="banner-img-pos"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-technology2.jpg" style="margin-top: -4vmin !important; width:100%;"> </div> 

 <div class="container">

<!--<div class="img-dwn"> <a href="#whoweare"> <span class="dwn-sprt"> </span> </a> </div>-->

</div>

</section>


	<hr/>
	
<section id="tech-cloud" class="tech-sec" style="background-color: #f2f2f2;">
         <?php

          while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $originalDate = $row['date_time'];
			$newDate = date("M d, Y", strtotime($originalDate)); ?>


    <!-- Ending PHP Code Here -->

    

	<!-- <h2 class="tech-heading">
		<?php //echo $row['title']; ?>
	</h2>
	<p class="dateTime">
		<?php //echo $newDate; ?> By <?php //echo $row['author']; ?>
	</p> -->

    <a href="/zapcg/index.php/zapcom-blog/?id=<?php echo $row['id']; ?>" style="text-decoration: none; background: white;">
	<div class="hoverBlog">
        <div class="socialButtons">
            <!-- Facebook Button -->
            <div class="fb-share-button" data-href="http://www.zapcg.com/index.php/who-we-are/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a style="float: left;" class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.zapcg.com%2Findex.php%2Fwho-we-are%2F&amp;src=sdkpreparse"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/facebook-icon.png"></a></div>

            <!-- Twitter Button -->
            <a class="twitter-share-button"
            href="https://twitter.com/intent/tweet?text=/zapcg/index.php/zapcom-blog/?id=<?php echo $row['id'];?>" data-size="large" >
            <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/twitter-icon.png"></a>

            <!-- LinkedIn Button -->
            <div style="float: left; margin-top: 8px;">
                <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                <script type="IN/Share" data-url="http://localhost/zapcg/index.php/all-blogs/"></script>
            </div>
        </div>
	   <div class="blogDiv">
	       	<a href="/zapcg/index.php/zapcom-blog/?id=<?php echo $row['id']; ?>" style="text-decoration: none; background: white;"><img class="image" src="<?php bloginfo('template_directory'); ?>/images/<?php echo $row['image']; ?>" alt="Image"></a>
	   </div>
       <a href="/zapcg/index.php/zapcom-blog/?id=<?php echo $row['id']; ?>" style="text-decoration: none; background: white;">
	   <div class="footerBlog">
         <div class="blogHeading" ><span class="tech-heading"><?php echo $row['title']; ?></span></div>
	     <div class="blogDate"><span class="dateTime"><?php echo $newDate; ?> By <?php echo $row['author']; ?></span></div>
	   
       </div></a>
	</div></a>
	<!-- Start PHP Code -->

	<?php
         }

         if(($page == 0)&&($left_blog <= $blog_limit )){
            //Do not display anything
         }else if( $page == 0 ) {
            echo "<ul class='pager' style='text-align: end;''><li><a href= \"$_PHP_SELF?page=$page\">Next</a></li></ul>";	 
         }else if( $left_blog <= $blog_limit ) {
            $last = $page - 2;
            echo "<ul class='pager' style='text-align: end;''><li><a href= \"$_PHP_SELF?page=$last\">Previous</a></li></ul>";
         }else if( $page > 0 ) {
            $last = $page - 2;
            echo "<ul class='pager' style='text-align: end;''><li><a href= \"$_PHP_SELF?page=$last\">Previous</a></li></ul>";	
            echo "<li><a href= \"$_PHP_SELF?page=$page\">Next</a></li></ul>";	
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

