<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<div>
<h3 class="sep_bg" style="margin-top:50px;"><?php comments_number('There are no comments yet, but you can be the first','1 Comment:','% Comments:')?></h3>
<?php if ( have_comments() ) : ?>
	
        <ul class="unstyled commentsul">
        	<?php wp_list_comments('max_depth=3&callback=mytheme_comment'); ?>     
       </ul>
	
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>
</div>
<div class="clear"></div>
<?php if ( comments_open() ) : ?>

<div id="respond">
<h3 class="sep_bg" style="margin-top:50px;"><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

<!--- replace comment_form();  -->
<?php paginate_comments_links('prev_text=back&next_text=forward'); ?>
<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
<form class="form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="contact-form">


<?php if ( is_user_logged_in() ) : ?>
	<h5 style="margin-bottom:18px;">Logged in as <i class="icon-user"></i> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> / <i class="icon-remove-sign"></i> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out</a></h5>
<?php else : ?>

    <input type="text" class="span4" style="margin-right:25px;" placeholder="Name" name="author" value="<?php echo esc_attr($comment_author); ?>" />
    <input  class="span4" type="text" placeholder="E-mail" name="email" value="<?php echo esc_attr($comment_author_email); ?>" />
<?php endif; ?>
    <textarea type="text" placeholder="Message" id="comment" name="comment" rows="5" class="span8"></textarea>
	<button name="submit" id="submit_form" type="submit"  class="btn btn-small btn-info">Post comment</button>
		
	
<p><?php comment_id_fields(); ?></p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>