<?php while (have_posts()) : the_post(); ?>      
<div class="entry">
    <h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-meta">
        	<span class="meta-date"><?php the_time('j'); ?> <?php the_time('M'); ?>, <?php the_time('Y'); ?></span>
            <span class="meta-category"><?php the_category(' '); ?></span>
            <span class="meta-author"><?php the_author_posts_link(); ?></span>
            <span class="meta-permalink"><a href="<?php the_permalink() ?>" title="Permalink"><?php _e('Permalink'); ?></a></span>
        </div>
        <!-- END post-meta -->
        <?php if ( has_post_thumbnail() ) {  ?>   
			<div class="post-thumbnail">
        			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('post-image'); ?></a>
			</div>
			<!-- END post-thumbnail -->
        <?php } ?>
	<?php /* echo excerpt('50'); */ ?>
	<?php
		if ( is_sticky() ) {
			the_content();
        	} else {
        		echo excerpt('150');
		}
	 ?>
</div><!-- END entry -->
<?php endwhile; ?>