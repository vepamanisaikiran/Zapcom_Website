<?php 
/**
 * Theme Index Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>
<style type="text/css">
    
   @font-face {
	font-family: 'PfRegular';  
    src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PlayfairDisplayRegular.ttf');  
	 
}
    
     @font-face {
	font-family: 'PfBlack';  
	src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PlayfairDisplay-Black.ttf');  
	  
}
    
     @font-face {
	font-family: 'PfBlackItalic';  
	src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PlayfairDisplay-BlackItalic.ttf');  
	 
}
    
     @font-face {
	font-family: 'PfBold';  
	src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PlayfairDisplay-Bold.ttf');  
	  
}
    
     @font-face {
	font-family: 'PfBoldItalic';  
	src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PlayfairDisplay-BoldItalic.ttf');  
	
}
    
     @font-face {
	font-family: 'PfItalic';  
	src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PlayfairDisplay-Italic.ttf');  
	
}
    
     @font-face {
	font-family: 'PfBlack';  
	src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PlayfairDisplaySC-Black.ttf');  
	
}
    
     @font-face {
	font-family: 'PflackItalic;  
	src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PlayfairDisplaySC-BlackItalic.ttf');  
	  
}
     @font-face {
	font-family: 'PfSCBold';  
	src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PlayfairDisplaySC-Bold.ttf');  
	  
}
    
     @font-face {
	font-family: 'PfSCBoldItalic';  
	src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PPlayfairDisplaySC-BoldItalic.ttf');  
	  
}
     @font-face {
	font-family: 'PfSCBlack';  
	src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PlayfairDisplaySC-Black.ttf');  
	
}

     @font-face {
	font-family: 'PfSCRegular';  
	src: url('http://localhost/zapcg/wp-content/themes/esteem/fonts/PlayfairDisplaySC-Regular.ttf');  
	 
}
/*
@font-face {
    font-family: 'ralewaylight';
    src: url('raleway/raleway-light-webfont.eot');
    src: url('raleway/raleway-light-webfont.eot?#iefix') format('embedded-opentype'),
    
         url('raleway/raleway-light-webfont.ttf') format('truetype'),
         url('raleway/raleway-light-webfont.svg#ralewaylight') format('svg');
    font-weight: normal;
    font-style: normal;

}


@font-face {
    font-family: 'ralewaybold';
    src: url('raleway/Raleway-Bold-webfont.eot');
    src: url('raleway/Raleway-Bold-webfont.eot?#iefix') format('embedded-opentype'),
       
         url('raleway/Raleway-Bold-webfont.ttf') format('truetype'),
         url('raleway/Raleway-Bold-webfont.svg#ralewaybold') format('svg');
    font-weight: normal;
    font-style: normal;

}




@font-face {
    font-family: 'ralewaymedium';
    src: url('raleway/Raleway-Medium-webfont.eot');
    src: url('raleway/Raleway-Medium-webfont.eot?#iefix') format('embedded-opentype'),
        
         url('raleway/Raleway-Medium-webfont.ttf') format('truetype'),
         url('raleway/Raleway-Medium-webfont.svg#ralewaymedium') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'ralewayregular';
    src: url('raleway/Raleway-Regular-webfont.eot');
    src: url('raleway/Raleway-Regular-webfont.eot?#iefix') format('embedded-opentype'),
        
         url('raleway/Raleway-Regular-webfont.ttf') format('truetype'),
         url('raleway/Raleway-Regular-webfont.svg#ralewayregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'raleway';
    src: url('raleway/Raleway-Regular-webfont.eot');
    src: url('raleway/Raleway-Regular-webfont.eot?#iefix') format('embedded-opentype'),
        
         url('raleway/Raleway-Regular-webfont.ttf') format('truetype'),
         url('raleway/Raleway-Regular-webfont.svg#ralewayregular') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'montserratlight';
    src: url('raleway/montserrat-light-webfont.eot');
    src: url('raleway/montserrat-light-webfont.eot?#iefix') format('embedded-opentype'),
        
         url('raleway/montserrat-light-webfont.ttf') format('truetype'),
        ;
    font-weight: normal;
    font-style: normal;

}


@font-face {
    font-family: 'robotoregular';
    src: url('raleway/roboto-regular-webfont.eot');
    src: url('raleway/roboto-regular-webfont.eot?#iefix') format('embedded-opentype'),
       
         url('raleway/roboto-regular-webfont.ttf') format('truetype'),
         url('raleway/roboto-regular-webfont.svg#robotoregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
----------------------------

@font-face {
    font-family: 'ralewaylight';
    src: url('raleway/raleway-light-webfont.eot');
    src: url('raleway/raleway-light-webfont.eot?#iefix') format('embedded-opentype'),
         
         url('raleway/raleway-light-webfont.ttf') format('truetype'),
         url('raleway/raleway-light-webfont.svg#ralewaylight') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'ralewaybold';
    src: url('raleway/Raleway-Bold-webfont.eot');
    src: url('raleway/Raleway-Bold-webfont.eot?#iefix') format('embedded-opentype'),
        
         url('raleway/Raleway-Bold-webfont.ttf') format('truetype'),
         url('raleway/Raleway-Bold-webfont.svg#ralewaybold') format('svg');
    font-weight: normal;
    font-style: normal;

}




@font-face {
    font-family: 'ralewaymedium';
    src: url('raleway/Raleway-Medium-webfont.eot');
    src: url('raleway/Raleway-Medium-webfont.eot?#iefix') format('embedded-opentype'),
         
         url('raleway/Raleway-Medium-webfont.ttf') format('truetype'),
         url('raleway/Raleway-Medium-webfont.svg#ralewaymedium') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'ralewayregular';
    src: url('raleway/Raleway-Regular-webfont.eot');
    src: url('raleway/Raleway-Regular-webfont.eot?#iefix') format('embedded-opentype'),
       
         url('raleway/Raleway-Regular-webfont.ttf') format('truetype'),
         url('raleway/Raleway-Regular-webfont.svg#ralewayregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'raleway';
    src: url('raleway/Raleway-Regular-webfont.eot');
    src: url('raleway/Raleway-Regular-webfont.eot?#iefix') format('embedded-opentype'),
       
         url('raleway/Raleway-Regular-webfont.ttf') format('truetype'),
         url('raleway/Raleway-Regular-webfont.svg#ralewayregular') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'montserratlight';
    src: url('raleway/montserrat-light-webfont.eot');
    src: url('raleway/montserrat-light-webfont.eot?#iefix') format('embedded-opentype'),
        
         url('raleway/montserrat-light-webfont.ttf') format('truetype'),
        ;
    font-weight: normal;
    font-style: normal;

}


@font-face {
    font-family: 'robotoregular';
    src: url('raleway/roboto-regular-webfont.eot');
    src: url('raleway/roboto-regular-webfont.eot?#iefix') format('embedded-opentype'),
        
         url('raleway/roboto-regular-webfont.ttf') format('truetype'),
         url('raleway/roboto-regular-webfont.svg#robotoregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
*/
</style>
<?php get_header(); ?>

	<?php do_action( 'esteem_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
		
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php get_template_part( 'navigation', 'none' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'none' ); ?>
				
			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
	<?php esteem_sidebar_select(); ?>
	
	<?php do_action( 'esteem_after_body_content' ); ?>

<?php get_footer(); ?>



