<?php
/**
 * Theme Header Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-1.css"> 
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/media-query.css">

<!--<link href="css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css">-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jss/responsive-tabs.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && 

		location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	</script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style-1.css"> 
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/media-query.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css">

<!--<link href="css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css">

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/jss/js/responsive-tabs.min.js" type="text/javascript"></script>-->
<script src="<?php bloginfo('template_url'); ?>/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<!--<script src="<?php bloginfo('template_url'); ?>/SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>-->
<link href="<?php bloginfo('template_url'); ?>/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
 <meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
/**
 * This hook is important for wordpress plugins and other many things
 */
wp_head();
?>

	<style>
		@media screen and (min-width: 769px and max-width: 991px)
		{
			div.footer-col{
				padding: 2vmin 0 !important;
			}
		}
	</style>
	<style>
		#mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-item > a
		{
			font-family: 'ralewaybold' !important;
			/*font-size: 3vmin;*/
		}
	</style>
</head>

<body <?php body_class(); ?>>
	
	
		<header id="masthead" class="site-header" role="banner">
			<div class="inner-wrap">
				<div class="hgroup-wrap clearfix">
					<div class="site-branding">
						<?php if( ( of_get_option( 'esteem_show_header_logo_text', 'text_only' ) == 'both' || of_get_option( 'esteem_show_header_logo_text', 'text_only' ) == 'logo_only' ) && of_get_option( 'esteem_header_logo_image', '' ) != '' ) {
						?>
							<div class="header-logo-image">
								<a rel="home" title="" href="<?php echo esc_url( home_url( '/' ) ); ?>">
	<img alt="" src="<?php bloginfo('template_url'); ?>/images/logo.png">
	</a>
							</div><!-- .header-logo-image -->
						<?php }
						if( of_get_option( 'esteem_show_header_logo_text', 'text_only' ) == 'both' || of_get_option( 'esteem_show_header_logo_text', 'text_only' ) == 'text_only' ) {
						?>
							<div class="header-text">
								<h1 id="site-title">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
											<?php bloginfo( 'name' ); ?>
										</a>
									</h1>
								<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
							</div><!-- .header-text -->
						<?php } ?>
					</div><!-- .site-branding -->
					<div class="hgroup-wrap-right">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<h3 class="menu-toggle"></h3>
							<div class="nav-menu clearfix">
								<?php
									if ( has_nav_menu( 'primary' ) ) {
											wp_nav_menu( array( 'theme_location' => 'primary',
																'container' => false
																 ) );
									}
									else {
											wp_page_menu();
									}
								?>
							</div><!-- .nav-menu -->
						</nav>
						</div><!-- .hgroup-wrap-right -->
				</div><!-- .hgroup-wrap -->
			</div><!-- .inner-wrap -->
			<?php //esteem_render_header_image(); ?>

			<?php
   		
		   	if( !( is_front_page()) ) { ?>
			<!--	<section class="page-title-bar clearfix">
					<div class="inner-wrap">
						<?php //if( '' != esteem_header_title() ) { ?>
							<div class="page-title-wrap"><h1><?php //echo esteem_header_title(); ?></h1></div>
						<?php //} ?>
						<?php //if( function_exists( 'esteem_breadcrumb' ) ) { esteem_breadcrumb(); } ?>
					</div>
				</section>-->
			<?php } ?>
		</header>
		
	
</body>
</html>