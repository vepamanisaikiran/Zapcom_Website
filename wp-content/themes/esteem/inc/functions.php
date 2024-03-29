<?php
/**
 * Esteem functions and definitions
 *
 * This file contains all the functions and it's defination that particularly can't be
 * in other files.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */

/****************************************************************************************/

add_action( 'wp_enqueue_scripts', 'esteem_scripts_styles_method' );
/**
 * Register jquery scripts
 */
function esteem_scripts_styles_method() {

	global $esteem_theme_options_settings;
    $options = $esteem_theme_options_settings;

   	/**
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'esteem_style', get_stylesheet_uri() );

	wp_enqueue_style( 'esteem-responsive', ESTEEM_CSS_URL . '/responsive.css' );

	/**
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/**
	 * Register JQuery cycle js file for slider.
	 */
	wp_register_script( 'jquery_cycle', ESTEEM_JS_URL . '/jquery.cycle.all.min.js', array( 'jquery' ), '2.9999.5', true );

	/**
	 * Enqueue Slider setup js file.
	 */
	if( of_get_option( 'esteem_activate_slider', '0' ) == '1' ) {
		if ( is_home() || is_front_page() ) {
			wp_enqueue_script( 'esteem_slider', ESTEEM_JS_URL . '/esteem-slider-setting.js', array( 'jquery_cycle' ), false, true );

		}
	}

	wp_enqueue_script( 'esteem-custom', ESTEEM_JS_URL. '/esteem-custom.js', array( 'jquery' ) );
	wp_enqueue_style( 'esteem-fontawesome', get_template_directory_uri().'/fontawesome/css/font-awesome.css', array(), '3.2.1' );

   /**
    * Browser specific queuing i.e
    */
	$esteem_user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
	if(preg_match('/(?i)msie [1-8]/',$esteem_user_agent)) {
		wp_enqueue_script( 'html5', ESTEEM_JS_URL . '/html5shiv.min.js', true );
	}

	wp_enqueue_script( 'esteem-navigation', ESTEEM_JS_URL . '/navigation.js', array( 'jquery' ), false, true );

}

add_action('admin_print_styles', 'esteem_admin_styles');
/**
 * Enqueuing some styles.
 *
 * @uses wp_enqueue_style to register stylesheets.
 * @uses wp_enqueue_style to add styles.
 */
function esteem_admin_styles() {
	wp_enqueue_style( 'esteem-fontawesome', get_template_directory_uri().'/fontawesome/css/font-awesome.css', array(), '3.2.1' );
	wp_enqueue_style( 'esteem_admin_style', ESTEEM_ADMIN_CSS_URL. '/admin.css' );
}

/****************************************************************************************/

if ( ! function_exists( 'esteem_sidebar_select' ) ) :
/**
 * Fucntion to select the sidebar
 */
function esteem_sidebar_select() {
	global $post;

	if( $post ) { $layout_meta = get_post_meta( $post->ID, '_esteem_layout', true ); }

	if( is_home() ) {
		$queried_id = get_option( 'page_for_posts' );
		$layout_meta = get_post_meta( $queried_id, '_esteem_layout', true );
	}

	if( empty( $layout_meta ) || is_archive() || is_search() ) { $layout_meta = 'default_layout'; }
	$esteem_default_layout = of_get_option( 'esteem_default_layout', 'right_sidebar' );

	$esteem_default_page_layout = of_get_option( 'esteem_pages_default_layout', 'right_sidebar' );
	$esteem_default_post_layout = of_get_option( 'esteem_single_posts_default_layout', 'right_sidebar' );

	if( $layout_meta == 'default_layout' ) {
		if( is_page() || is_home() ) {
			if( $esteem_default_page_layout == 'right_sidebar' ) { get_sidebar(); }
			elseif ( $esteem_default_page_layout == 'left_sidebar' ) { get_sidebar( 'left' ); }
		}
		elseif( is_single() ) {
			if( $esteem_default_post_layout == 'right_sidebar' ) { get_sidebar(); }
			elseif ( $esteem_default_post_layout == 'left_sidebar' ) { get_sidebar( 'left' ); }
		}
		elseif( $esteem_default_layout == 'right_sidebar' ) { get_sidebar(); }
		elseif ( $esteem_default_layout == 'left_sidebar' ) { get_sidebar( 'left' ); }
	}
	elseif( $layout_meta == 'right_sidebar' ) { get_sidebar(); }
	elseif( $layout_meta == 'left_sidebar' ) { get_sidebar( 'left' ); }
}
endif;

add_filter( 'body_class', 'esteem_body_class' );
/**
 * Filter the body_class
 *
 * Throwing different body class for the different layouts in the body tag
 */
function esteem_body_class( $classes ) {
	global $post;

	if( $post ) { $layout_meta = get_post_meta( $post->ID, '_esteem_layout', true ); }

	if( is_home() ) {
		$queried_id = get_option( 'page_for_posts' );
		$layout_meta = get_post_meta( $queried_id, '_esteem_layout', true );
	}

	if( empty( $layout_meta ) || is_archive() || is_search() ) { $layout_meta = 'default_layout'; }
	$esteem_default_layout = of_get_option( 'esteem_default_layout', 'right_sidebar' );

	$esteem_default_page_layout = of_get_option( 'esteem_pages_default_layout', 'right_sidebar' );
	$esteem_default_post_layout = of_get_option( 'esteem_single_posts_default_layout', 'right_sidebar' );

	if( $layout_meta == 'default_layout' ) {
		if( is_page() || is_home() ) {
			if( $esteem_default_page_layout == 'right_sidebar' ) { $classes[] = ''; }
			elseif( $esteem_default_page_layout == 'left_sidebar' ) { $classes[] = 'left-sidebar'; }
			elseif( $esteem_default_page_layout == 'no_sidebar_full_width' ) { $classes[] = 'no-sidebar-full-width'; }
			elseif( $esteem_default_page_layout == 'no_sidebar_content_centered' ) { $classes[] = 'no-sidebar'; }
		}
		elseif( is_single() ) {
			if( $esteem_default_post_layout == 'right_sidebar' ) { $classes[] = ''; }
			elseif( $esteem_default_post_layout == 'left_sidebar' ) { $classes[] = 'left-sidebar'; }
			elseif( $esteem_default_post_layout == 'no_sidebar_full_width' ) { $classes[] = 'no-sidebar-full-width'; }
			elseif( $esteem_default_post_layout == 'no_sidebar_content_centered' ) { $classes[] = 'no-sidebar'; }
		}
		elseif( $esteem_default_layout == 'right_sidebar' ) { $classes[] = ''; }
		elseif( $esteem_default_layout == 'left_sidebar' ) { $classes[] = 'left-sidebar'; }
		elseif( $esteem_default_layout == 'no_sidebar_full_width' ) { $classes[] = 'no-sidebar-full-width'; }
		elseif( $esteem_default_layout == 'no_sidebar_content_centered' ) { $classes[] = 'no-sidebar'; }
	}
	elseif( $layout_meta == 'right_sidebar' ) { $classes[] = ''; }
	elseif( $layout_meta == 'left_sidebar' ) { $classes[] = 'left-sidebar'; }
	elseif( $layout_meta == 'no_sidebar_full_width' ) { $classes[] = 'no-sidebar-full-width'; }
	elseif( $layout_meta == 'no_sidebar_content_centered' ) { $classes[] = 'no-sidebar'; }


	if ( of_get_option( 'esteem_posts_page_display_type', 'full_content' ) == 'small_image' ) {
		$classes[] = 'blog-medium';
	}
	if ( of_get_option( 'esteem_posts_page_display_type', 'full_content' ) == 'large_image' ) {
		$classes[] = 'blog-large';
	}

	if( of_get_option( 'esteem_site_layout', 'box' ) == 'wide' ) {
		$classes[] = 'wide';
	}

	return $classes;
}

add_filter( 'excerpt_length', 'esteem_excerpt_length' );

/**
 * Sets the post excerpt length to 40 words.
 *
 * function tied to the excerpt_length filter hook.
 *
 * @uses filter excerpt_length
 */
function esteem_excerpt_length( $length ) {
	return 40;
}

add_filter( 'excerpt_more', 'esteem_continue_reading' );
/**
 * Returns a "Continue Reading" link for excerpts
 */
function esteem_continue_reading() {
	return '&hellip; ';
}

add_action( 'admin_head', 'esteem_favicon' );
add_action( 'wp_head', 'esteem_favicon' );
/**
 * Fav icon for the site
 */
function esteem_favicon() {
	if ( of_get_option( 'esteem_activate_favicon', '0' ) == '1' ) {
		$esteem_favicon = of_get_option( 'esteem_favicon', '' );
		$esteem_favicon_output = '';
		if ( !empty( $esteem_favicon ) ) {
			$esteem_favicon_output .= '<link rel="shortcut icon" href="'.esc_url( $esteem_favicon ).'" type="image/x-icon" />';
		}
		echo $esteem_favicon_output;
	}
}

/****************************************************************************************/

add_action('wp_head', 'esteem_custom_css');
/**
 * Hooks the Custom Internal CSS to head section
 */
function esteem_custom_css() {

	$esteem_internal_css = '';

	$primary_color = of_get_option( 'esteem_primary_color', '#ED564B' );
	if( $primary_color != '#ED564B' ) {
		$esteem_internal_css .= 'blockquote{border-left: 3px solid ' .$primary_color.'}button,html input[type="button"],input[type="reset"],input[type="submit"],#slider-title a{background:'.$primary_color.'}a,a:visited,a:hover,a:focus,a:active,.main-navigation li:hover > a,.main-navigation li.current_page_item > a,.main-navigation li.current-menu-item > a,.main-navigation li.current-menu-ancestor > a,#site-title a span,#site-title a:hover,#site-title a:focus,#site-title a:active,#controllers a:hover, #controllers a.active,.widget ul li a:hover,.widget ul li a:hover:before,.services-block .read-more:hover,.service-image-wrap,.service-title a:hover,.entry-meta a:hover,.entry-title a:hover,.search-wrap button:before,#site-generator a:hover, #colophon .widget a:hover,.menu-toggle:before{color: '.$primary_color.'}.main-navigation ul ul {border-top: 4px solid'.$primary_color.'}#controllers a:hover, #controllers a.active,#promo-box,.fancy-tab,.call-to-action-button,.readmore-wrap,.page-title-bar,.default-wp-page .previous a:hover, .default-wp-page .next a:hover{ background-color: '.$primary_color.'}#secondary .widget-title span, #colophon .widget-title span{ border-bottom: 2px solid '.$primary_color.'}
		.services-block .read-more:hover{border: 1px solid '.$primary_color.'}.service-border{ border: 3px solid '.$primary_color.'}
		.blog-medium .post-featured-image, .blog-large .post-featured-image, .category .post-featured-image, .search .post-featured-image{border-bottom: 4px solid '.$primary_color.'}.search-form-top,#colophon{border-top: 3px solid '.$primary_color.'}a#scroll-up{ background-color: '.$primary_color.'}';
	}

	if( !empty( $esteem_internal_css ) ) {
		?>
		<style type="text/css"><?php echo $esteem_internal_css; ?></style>
		<?php
	}

	$esteem_custom_css = of_get_option( 'esteem_custom_css', '' );
	if( !empty( $esteem_custom_css ) ) {
		?>
		<style type="text/css"><?php echo $esteem_custom_css; ?></style>
		<?php
	}
}

/**************************************************************************************/

add_action( 'esteem_footer_copyright', 'esteem_footer_copyright', 10 );
/**
 * function to show the footer info, copyright information
 */
if ( ! function_exists( 'esteem_footer_copyright' ) ) :
function esteem_footer_copyright() {
	$site_link = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';

	$wp_link = '<a href="'.esc_url( 'http://wordpress.org' ).'" target="_blank" title="' . esc_attr__( 'WordPress', 'esteem' ) . '"><span>' . __( 'WordPress', 'esteem' ) . '</span></a>';

	$tg_link =  '<a href="'.esc_url( 'http://themegrill.com/themes/esteem' ).'" target="_blank" title="'.esc_attr__( 'ThemeGrill', 'esteem' ).'" rel="designer"><span>'.__( 'ThemeGrill', 'esteem') .'</span></a>';

	$default_footer_value = sprintf( __( 'Copyright &copy; %1$s %2$s.', 'esteem' ), date( 'Y' ), $site_link ).' '.sprintf( __( 'Powered by %s.', 'esteem' ), $wp_link ).' '.sprintf( __( 'Theme: %1$s by %2$s.', 'esteem' ), 'Esteem', $tg_link );

	$esteem_footer_copyright = '<div class="copyright">'.$default_footer_value.'</div>';
	echo $esteem_footer_copyright;
}
endif;

/**************************************************************************************/

if ( ! function_exists( 'esteem_posts_listing_display_type_select' ) ) :
/**
 * Function to select the posts listing display type
 */
function esteem_posts_listing_display_type_select() {
	if ( of_get_option( 'esteem_posts_page_display_type', 'full_content' ) == 'large_image' ) {
		$format = 'blog-image-large';
	}
	elseif ( of_get_option( 'esteem_posts_page_display_type', 'full_content' ) == 'small_image' ) {
		$format = 'blog-image-medium';
	}
	elseif ( of_get_option( 'esteem_posts_page_display_type', 'full_content' ) == 'full_content' ) {
		$format = 'blog-full-content';
	}
	else {
		$format = get_post_format();
	}

	return $format;
}
endif;

add_action('admin_init','esteem_textarea_sanitization_change', 100);
/**
 * Override the default textarea sanitization.
 */
function esteem_textarea_sanitization_change() {
   remove_filter( 'of_sanitize_textarea', 'of_sanitize_textarea' );
   add_filter( 'of_sanitize_textarea', 'esteem_sanitize_textarea_custom',10,2 );
}

/**
 * sanitize the input for custom css
 */
function esteem_sanitize_textarea_custom( $input,$option ) {
   if( $option['id'] == "esteem_custom_css" ) {
      $output = wp_filter_nohtml_kses( $input );
   } else {
      $output = $input;
   }
   return $output;
}

/**
 * Adding the support for the entry-title tag for Google Rich Snippets
 */
function esteem_add_mod_hatom_data($content) {
   $title = get_the_title();
   if (is_single()) {
      $content .= '<div class="extra-hatom-entry-title"><span class="entry-title">' . $title . '</span></div>';
   }
   return $content;
}
add_filter('the_content', 'esteem_add_mod_hatom_data');
?>