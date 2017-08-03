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
        <h1><?php the_title(); ?></h1>	
            <div class="post-meta">
                <span class="meta-date"><?php the_time('j'); ?> <?php the_time('M'); ?>, <?php the_time('Y'); ?></span>
                <span class="meta-category"><?php the_category(' '); ?></span>
                <span class="meta-author"><?php the_author_posts_link(); ?></span>
                <span class="meta-permalink"><a href="<?php the_permalink(' ') ?>" title="Permalink"><?php _e('Permalink'); ?></a></span>
            </div>
            <!-- END post-meta --> 
        <?php if ( has_post_thumbnail() ) { ?>
        		<div class="post-thumbnail">
        			<?php the_post_thumbnail('post-image'); ?>
                </div>
                <!-- END post-thumbnail -->
        <?php } ?>
		<?php the_content(); ?>
        <div class="clear"></div>
		<?php endwhile; ?>
		<?php endif; ?>	
        
        <?php wp_link_pages('before=<div id="post-page-navigation">&after=</div>'); ?>
         
        <div class="post-bottom">
        	<?php the_tags('<div class="post-tags">',' ','</div>'); ?>
        </div>
        <!-- END post-bottom -->
        
        
        </div>
        <!-- END entry -->
        
	<!-- Removing the author entry, mostly out of aesthetics and redundancy (there's only one author).  Comment back in if multiple authors start being available. -->
<!--
         <div id="post-author" class="clearfix entry">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'platformbase_author_bio_avatar_size', 50 ) ); ?>
                <h4><?php _e('About The Author') ?></h4>
        		<?php the_author_meta('description') ?>
       	</div>
-->    
	<?php comments_template(); ?>
</div>
<!-- END grid_17 -->        
<?php get_sidebar(); ?>
<?php get_footer(); ?>