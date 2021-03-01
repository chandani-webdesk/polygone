<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<div class="row">
	<div class="col footer_logo">
   		<?php if(is_active_sidebar('footer-1')){    dynamic_sidebar('footer-1'); }?>
   	</div>
	<div class="col footer_contact">
		<?php if(is_active_sidebar('footer-3')){    dynamic_sidebar('footer-3'); }?>
	</div>
   	<div class="col footer_menus">
		<?php if(is_active_sidebar('footer-2')){    dynamic_sidebar('footer-2'); }?>
	</div>
</div>
