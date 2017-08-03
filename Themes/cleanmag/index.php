<?php
/**
 * @package WordPress
 * @subpackage CleanMag Theme
 */
$options = get_option( 'cleanmag_theme_settings' );
?>
<?php get_header(' '); ?>

<div id="content" class="grid_17 alpha">
<?php
//start main loop here
if (have_posts()) : ?>              
<?php get_template_part( 'post' , 'entry') ?>                	
<?php endif; ?>

<?php
// include pagination
if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); }
?>

</div>
<!-- END grid_17 -->
<?php get_sidebar(' '); ?>           
<?php get_footer(' '); ?>