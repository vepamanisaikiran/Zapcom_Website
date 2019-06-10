<?php 
/*
Template Name: POSITIONS
 */?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Position | Zapcom</title>
    
</head>

<body >
	
		<?php get_header(); ?>
        <section class="banner">
<div class="container">
<div class="career-blog-div">
<?php 
// the query to set the posts per page to 3
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('category_name' => 'CAREER','posts_per_page' => 2, 'paged' => $paged );
query_posts($args); ?>
<!-- the loop -->
<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
		<!-- rest of the loop -->
		<!-- the title, the content etc.. -->
		<h1 class="career-head"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
<div class="career-blog-content"><?php the_content(); ?></div>
<?php endwhile; ?>
<!-- pagination -->
<div class="career-blog-pagination"><?php next_posts_link(); ?>
<?php previous_posts_link(); ?></div>
<?php else : ?>
<!-- No posts found -->
<?php endif; ?>

</div>

</div>
</section>
        
        
		<?php get_footer(); ?>
		
</body>
<script src="<?php bloginfo('template_url'); ?>/jss/js/bootstrap.min.js"> </script>
<script src="<?php bloginfo('template_url'); ?>/jss/js/jquery.min.js"> </script>
</html>