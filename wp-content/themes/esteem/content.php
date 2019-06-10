<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>


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
