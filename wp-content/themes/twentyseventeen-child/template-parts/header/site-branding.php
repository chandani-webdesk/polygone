<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<div class="topbar">
   <div class="container">
       <div class="row">
           	<!-- email & phone  -->
            <?php if(is_active_sidebar('top-header')){    dynamic_sidebar('top-header'); }?>
           	<!-- social icons -->
            <?php if(is_active_sidebar('header-social-icon')){    dynamic_sidebar('header-social-icon'); }?>
       </div>
   </div>
</div>
<div class="container header_logo_menu">
   <div class="row">
       <div class="col logo">
        <?php the_custom_logo(); ?>
        <a href="<?php echo site_url();?>">
          <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/sticky_logo.png" class="sticky_logo"> 
        </a> 
       </div>
       <div class="col menu">
        <?php if ( has_nav_menu( 'primary_menu' ) ) : ?>
    			<div class="navigation-top">
    				<div class="wrap">
    					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
    				</div><!-- .wrap -->
    			</div><!-- .navigation-top -->
		    <?php endif; ?>
      </div>
   </div>
</div>

