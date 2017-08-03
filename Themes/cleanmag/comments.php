<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<?php if ( comments_open() ) : ?>
<div id="commentsbox">
<h3 id="comments"><?php comments_number('No Comments', '1 Comment', '% Comments' );?></h3>

<?php if ( have_comments() ) : ?>
<ol class="commentlist">
<?php wp_list_comments(
	array(
		'avatar_size' => 55,
	));
?>
</ol>

<div class="comment-nav">
    <div class="alignleft"><?php previous_comments_link() ?></div>
    <div class="alignright"><?php next_comments_link() ?></div>
</div>

<?php endif;
endif;
if ( comments_open() ) : ?>

<div id="comment-form">
<?php comment_form(); ?>
</div>
</div>

<?php endif;
// delete me and the sky will fall on your head ?>