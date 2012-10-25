<?php
	// Template Name: Blog Template
?>
<?php get_header(); ?>
<?php 
	global $more;
	$more = 0; 
?>
        	<div class="container">
                <div class="row">
                    <!--Page content-->
                    <div class="span8">
                        <?php if ( !is_archive() ) { ?>
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('paged='.$paged.'&cat='.$cat); ?>		
                        <?php } ?> 
                        <?php if (!(have_posts())) { ?><div class="span12"><h2 class="colored">There is no posts</h2></div><?php }  ?>   
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                        ?>
                        <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>TESTA
                            <div class="row <?php post_class(); ?>" id="post-<?php the_ID(); ?>" style="margin-bottom:50px;">
                                <div class="span2" style="margin-bottom:20px;">
                                    <div class="ddate">
                                        <h3 class="sep_bg"><?php the_time('d') ?> <?php the_time('M') ?> / <?php the_time('Y') ?></h3>
                                        <div class="firstA"></div>
                                    </div>
                                    <div class="meta">
                                        <span><strong><i class="icon-user"></i> Author:</strong> <?php the_author_meta('nickname'); ?></span>
                                        <span><strong><i class="icon-list-alt"></i> Tags:</strong> <?php $tag = get_the_tags(); if (! $tag) { ?> There is no tags<?php } else { ?><?php the_tags(''); ?><?php } ?></span>
                                        <span><strong><i class="icon-comment"></i> Comments:</strong> <a href="<?php the_permalink() ?>#comments"><?php comments_number('0','1','%')?></a></span>
                                    </div>
                                    <hr class="hidden-phone">
                                </div>
                                <div class="span6">
                                    <div class="blog_item">
                                        <div class="blog_head">
                                            <h3 class="sep_bg"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <?php if (get_post_meta($post->ID, video, true));{ ?>
											<?php echo get_post_meta($post->ID, video, true); ?>
                                        <?php }?>
                                        <?php if (( has_post_thumbnail())) { ?>
                                        
                                        <div class="row">
                                            <div class="span6 slider_area nolink" style="margin-bottom:20px;">
                                                <div class="view view-first">
                                                    <img src="<?php echo $large_image_url[0]; ?>" alt="" />
                                                    <div class="mask">
                                                        <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" class="info"></a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <?php } ?>
                                        <?php the_content('<br><a class="btn btn-small btn-info" style=" margin-top:15px;" href="'. get_permalink($post->ID) . '">Read More</a>'); ?>
                                    </div>
                                </div>
                            </div>
						<?php endwhile;  ?> 
						<?php endif; ?>
                        <section style="padding:0px !important;">
	                        <hr style="margin-top:0px;">
							<?php if (function_exists('wp_corenavi')) { ?><div class="pride_pg"><?php wp_corenavi(); ?></div><?php }?>
                        </section>
                    </div>
                    <!--/Page content-->
                    <!--Sidebar-->
                    <div class="span4 sidebar">
			<?php get_sidebar(); ?>
                    </div>
                    <!--/Sidebar-->
                </div>
            </div>
        

<?php get_footer(); ?>