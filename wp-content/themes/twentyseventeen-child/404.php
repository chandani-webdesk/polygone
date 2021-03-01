<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	
	<section class="error-404 not-found">

		
		<header class="page-header">		
			<h1 class="page-title"><?php _e( '404 Error - Page not found', 'twentynineteen' ); ?></h1>

			<p class="u-textAlignCenter">
	            Uh oh, looks like the page you are looking for has moved or no longer exists.
	        </p>
	    </header>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/404-img.svg" class="not-found-img"> 
				
	</section>
</div><!-- #primary -->
<?php
get_footer();
