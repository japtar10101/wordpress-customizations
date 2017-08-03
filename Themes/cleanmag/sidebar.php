<?php
/**
 * @package WordPress
 * @subpackage CleanMag Theme
 */
?>
<div id="sidebar" class="grid_8 alpha omega">          
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
	<?php endif; ?>
</div>
<!-- END sidebar -->