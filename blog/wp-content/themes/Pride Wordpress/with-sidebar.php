<?php
	// Template Name: With SideBar
?>
<?php get_header(); ?>
<?php 
	global $more;
	$more = 0;	 
?>

	<div class="container inner_content">
        <div class="row">
            <!--Page contetn-->
            <div class="span8">
				<?php if (!(have_posts())) { ?><div class="span12"><h2 class="colored uppercase">There is no posts</h2></div><?php }  ?>   
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div><?php the_content(); ?></div>
                <?php endwhile;  ?> 
                <?php endif; ?>
        	</div>
            <div class="span4 sidebar">
				<?php get_sidebar(); ?>
            </div>
        </div>
    </div>




<?php get_footer(); ?>