<?php
/**
 * @package WordPress
 * @subpackage CleanMag Theme
 */
?>
<?php get_header(); ?>
<div class="grid_17 alpha">
    <div class="entry clearfix">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="page-title"><?php the_title(); ?></h1>			
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>	   
    <?php comments_template(); ?>  
	</div>
	<!-- END entry -->
</div>
<!-- END grid_17 -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>