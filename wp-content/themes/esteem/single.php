<?php 
/**
 * Theme Single Post Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'esteem_before_body_content' ); ?>
		
<div id="primary" style="border:0px;padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px" >
	
		
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="container">
			
			<div class="col-md-2">
				</div>
				
				<div class="col-md-8">
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
				<div style="margin-bottom:20px;">	
 <h1 style=" text-align: center;color:#0D47A1;margin-bottom:10px;"><?php the_title(); ?></h1>
 <!--<img src="<?php echo $url ?>"  class="img-responsive" style="width:100%;"/>  -->
 <div style="text-align: center;">
                <span class="meta" style="color:#2196F3"> <strong>Posted on <?php the_time('F jS, Y'); ?></strong> by <i class="fa fa-user" aria-hidden="true"></i> <strong><?php the_author_link(); ?></strong> <span class="comments"></span></span>
				
				</div>
			</div>

			<hr>
				<?php get_template_part( 'content', 'single' ); ?>
				<?php get_template_part( 'navigation', 'archive' ); ?>
				
				<?php
					do_action( 'esteem_before_comments_template' );
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();					
	      		do_action ( 'esteem_after_comments_template' );
				
				?>
</div>
				
				
				
				
				
					
			<div class="col-md-2">
				</div>
				
				</div>
				


			<?php endwhile; ?>

		<!-- #content -->
	</div><!-- #primary -->
	
	<?php esteem_sidebar_select(); ?>
	
	<?php do_action( 'esteem_after_body_content' ); ?>

<?php get_footer(); ?>