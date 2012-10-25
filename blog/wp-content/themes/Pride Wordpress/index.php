<?php get_header(); ?>
<?php 
	global $more;
	$more = 0;	 
?>

	<div class="container inner_content">
        <div class="row">
            <!--Page content-->
            <div class="span12 blog post">
				<?php if (!(have_posts())) { ?><div class="span12"><h2 class="colored uppercase">There is no posts</h2></div><?php }  ?>   
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div id="article-<?php the_ID( ); ?>" class="row">
			<div class="span2">
				<h3 class="sep_bg"><?php the_time( get_option( 'date_format' )); ?></h3>
				<div class="meta">
				    <span><strong><i class="icon-list-alt"></i> Category:</strong> <a href="#"><?php the_category( ', ' ); ?></a></span>
				    <span><strong><i class="icon-user"></i> Author:</strong> <a href="#"><?php the_author_posts_link(); ?></a></span>
				    <span><strong><i class="icon-comment"></i> Comments:</strong> <a href="#"><?php comments_number(); ?></a></span>
				    <span><?php edit_post_link( 'Modifier', ' | ' ); ?></span>
				</div>
			</div>
			<div class="span10" style="margin-bottom:20px">
				<h3 class="sep_bg"><a href="<?php the_permalink( ); ?>" title="<?php the_title( ); ?>"><?php the_title(); ?></a></h3>
				<?php the_content(); ?>
				<a href="<?php the_permalink( ); ?>" title="<?php the_title( ); ?>" class="btn btn-small btn-info">Read More</a>
			</div>
		</div>
                <?php endwhile;  ?> 
                <?php endif; ?>
        	</div>
        </div>
    </div>


<?php get_footer(); ?>