<?php get_header(); ?>
<?php if (have_posts()) : ?>
<div id="post" class="grid_17 alpha">
	<div class="entry clearfix">
		<?php
        if(isset($_GET['author_name'])) :
        $curauth = get_userdatabylogin($author_name);
        else :
        $curauth = get_userdata(intval($author));
        endif;
        ?>
        <h1 id="archive-title">About: <?php echo $curauth->nickname; ?></h1>
        
        <div id="sub-description">
            <?php echo $curauth->user_description; ?>
        </div>
        <!-- END #sub-description --> 
	</div>
    <!-- END entry -->
      
	<?php
    // get post entry
	get_template_part('post', 'entry') ?>    
	<?php
    //get pagination
	if (function_exists("pagination")) { pagination(); } ?>
</div>
<!-- END #post -->
<?php endif; ?>     
<?php get_sidebar(' '); ?>	   
<?php get_footer(' '); ?>