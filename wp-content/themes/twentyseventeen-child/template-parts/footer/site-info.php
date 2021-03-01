<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<div class="copyright">
   <?php if(is_active_sidebar('footer-bottom')){    dynamic_sidebar('footer-bottom'); }?>
</div>