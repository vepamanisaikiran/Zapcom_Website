
<?php
/*
Template Name:BLOGS
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ZapCom Group| Blogs</title>
<meta name="description" content="We are passionate about transforming innovative ideas into great products. ">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/technology_style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/zapcg_style.css">

</head>
<body style="overflow-x: hidden;">
	
<div class="nav-down" id="header_div">	
        <?php get_header(); ?>
</div>

<main id="maincontent">
    
<main id="maincontent">

<main id=maincontent>
    
<?php do_action( 'esteem_before_body_content' ); ?>

	<div id="primary" style="border:0px;padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px" >
	<div class="container" >
	</div>
	</div>
<div class="col-md-8 col-sm-8">



<?php


	 $link = $_SERVER['PHP_SELF'];

    $link_array = explode('/',$link);
	
    //echo $page = end($link_array);
	//echo $page;

	

$lastSegment = basename(parse_url($link, PHP_URL_PATH));
//echo $lastSegment;


$lastSegment=1;
$variable = $_GET['var'];

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

$lastSegment= $uri_segments[3];










$the_page = get_query_var('paged'); //<!-- tell wordpress this is paged
query_posts('category_name=>'.$lastSegment.'&posts_per_page=4&paged='.$the_page); //<-- set cat= to the numeric category
$catObj = get_category_by_slug($lastSegment); 
$catName = $catObj->name;

?>

	<?php if( have_posts() ): ?>
	<h1 style=" text-align: center;margin-bottom:5px;"> <?php echo $catName ?></h1>
<?php

    while (have_posts()) {
        the_post();
?>
        
		
		
		
		
		
		
		
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
	  <div style="border:0px;height:auto;margin:0px;padding:0px;" id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
				
				
				
				<div class="col-md-12" style="" >
				
		<div class="col-md-1">
		
		
		</div>
		
<div class="col-md-10 " id="col1"  style="border-radius:5px;margin:22px;padding:0px;background-color:white;">

<article class="qe" style="border:0px;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php do_action( 'esteem_before_post_content' ); ?>


		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>


			 <div class="col-md-8 col-xs-12 col-sm-12">
	
	 <div style="col-xs-12 col-sm-12">
 
 		
 <p style="color:#0D47A1;font-size: 22px;"><?php the_title(); ?>  <span class="meta" style="color:#2196F3;font-size:13px;"> <strong><?php the_time('F jS, Y'); ?></strong> /<i class="fa fa-user" aria-hidden="true"></i> <strong><?php the_author_link(); ?></strong> <span class="comments"></span></span></p>
		<p class="text" ><?php the_excerpt(__('Continue reading »','example')); ?></p>
<button style="text-align: center;margin-top:5px;margin-bottom:5px;" type="button" class="btn btn-info" onclick="location.href='<?php the_permalink(); ?>';">Read More</button>

		</div>
		
		 
		</div>
		
		<div class="col-md-4" style="margin:0px:padding:0px;">
		
		
		<?php
		
		if ( has_post_thumbnail() ) {
  ?>
  
  <a style="color:white;" href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>"  class="img-responsive" style="height:30vh;width:100%;"/></a>  
  
  <?php
}
		
		?>


			 </div>
		
</article>

</div>








		   </div><!-- /#post-<?php get_the_ID(); ?> -->
		   
		   
			<div class="col-md-12" style="" >
				
		<div class="col-md-1">
		
		
		</div>
		
<div class="col-md-10 " id="col1"  style="border-radius:5px;margin:22px;padding:0px;background-color:white;">
<hr>


</div>
</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
       
		
		<?php
    }			//end of whitle
	
	
	?>
		
	<!-- <div><?php next_posts_link('Next Page &raquo;') ?></div>
        <div><?php previous_posts_link('&laquo; Previous Page') ?></div> -->
		
		
		<div class="col-md-1">
		</div>
		<div class="col-md-5" style="margin:0px:padding:0px;">

		<div class="col-md-6" style="float:left;">
			<span class="newer"><?php previous_posts_link(__('<- Newer','example')) ?></span> 
		</div><!-- /.navigation -->	
        	
			
		</div>	
		<div class="col-md-6" style="margin:0px:padding:0px;">
		
        	<div class="col-md-6" style="float:right;">
		 <span class="older"><?php next_posts_link(__('Older ->','example')) ?></span>
		</div><!-- /.navigation -->	
			
		</div>	
		
		
		
		
		
	<?php


?>

</div>
<div style="hegiht:5px;visibility:hidden;margin:0px:padding:0px;">

</div>

    </main>	           

	<?php else: ?>

		<div id="post-404" class="noposts">

		    <p><?php _e('None found.','example'); ?></p>

	    </div><!-- /#post-404 -->

	<?php endif; wp_reset_query(); ?>

	</div><!-- /#content -->
	
<div class="col-md-4 col-sm-4" style="margin:0px:padding:0px;">
	
	<div class="container">
	<div class="col-md-2">
	</div>
	<div class="col-md-6" style="margin-left:10px;">
	
	<h1 style="margin-bottom:10px;">Categories</h1>
		<hr>
	<?php
			
			
			
			$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
$categories = get_categories( $args );
$first = true;
   echo '<li class="title"><a href="/index.php/blogs/">All Blogs</a>';
  foreach ($categories as $category) {
    if ( $first )
    {
         echo '<li class="title"><a href="/index.php/category/'.$category->slug.'">'.$category->cat_name.'</a>';

        $first = false;
    }
    else
    {
              echo '<li class="title"><a href="/index.php/category/'.$category->slug.'">'.$category->cat_name.'</a>';

    }
    $theid = $category->term_id;
    $children = $wpdb->get_results( "SELECT term_id FROM $wpdb->term_taxonomy WHERE parent=$theid" );
        $no_children = count($children);
    if ($no_children > 0) {
        echo "<ul>";
        $args2 = array(
         'orderby' => 'name',
         'parent' => 2
         );
        $args2["parent"]=$category->term_id;
        $categories2 = get_categories( $args2 );
         foreach ($categories2 as $category2) {

            echo '<li><a href="">'.$category2->cat_name.'</a></li>';

        }
        echo '</ul>';
    } else {
    echo '</li>';
    }

  }
 ?>
			</div>
			
			</div>
	
	</div>

</main>	
	
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









