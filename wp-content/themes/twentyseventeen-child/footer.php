<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<?php get_template_part( 'template-parts/footer/footer', 'widgets' );?>
				<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script type="text/javascript">
	jQuery('a[href="#reviews"]').click(function() {
	    jQuery('html, body').animate({ scrollTop: jQuery("#reviews").offset().top - 100 }, 'slow');
	});
	//jQuery(document).ready(function($) {
	jQuery(window).load(function() {
		jQuery('a[href="#contact"]').click(function() {
		    jQuery('html, body').animate({scrollTop: jQuery("#contact").offset().top - 30}, 'slow');
		});
	});
</script>
</body>
</html>
