<?php get_header(); ?>

        	<div class="container inner_content">
                <div class="row">
                    <!--Page contetn-->
                    <div class="span9">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>
                            <div class="row <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                                <div class="span9">
                                	<?php if (get_post_meta($post->ID, video, true));{ ?>
										<?php echo get_post_meta($post->ID, video, true); ?>
                                    <?php }?>
                                	<?php if (( has_post_thumbnail())) { ?>
                                        <div class="row">
                                            <div class="span9 slider_area nolink" style="margin-bottom:0px;">
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
                                </div>
                                <div class="span2" <?php if ((get_post_meta($post->ID, video, true) || (has_post_thumbnail())) ) { ?> style="margin-top:35px;"<?php } ?>>
                                    <div class="ddate">
                                        <h3 class="sep_bg"><?php the_time( get_option( 'date_format' )); ?></h3>
                                        <div class="firstA"></div>
                                    </div>
                                    <div class="meta">
                                        <span><strong><i class="icon-user"></i> Author:</strong> <a href="#"><?php the_author_posts_link(); ?></a></span>
                                        <span><strong><i class="icon-list-alt"></i> Tags:</strong> <?php $tag = get_the_tags(); if (! $tag) { ?> There is no tags<?php } else { ?><?php the_tags(''); ?><?php } ?></span>
                                        <span><strong><i class="icon-comment"></i> Comments:</strong> <a href="<?php the_permalink() ?>#comments"><?php comments_number('0','1','%')?></a></span>
                                    </div>
                                    <hr>
                                    <span class="share">Share: </span>
                                    <!-- AddThis Button BEGIN -->
                                    <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=ra-4f8811347196f281"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
                                    <!-- AddThis Button END -->
                                    <hr>
                                </div>
                                <div class="span7" <?php if ((get_post_meta($post->ID, video, true) || (has_post_thumbnail())) ) { ?> style="margin-top:35px;"<?php } ?>>
                                    <div>
                                    	<h3 class="sep_bg"><span style="colored"><?php the_title(); ?></span></h3>
                                        <?php the_content(''); ?>
                                    </div>
                                </div>
                                <div class="span9">
									<?php comments_template(); ?>
                                </div>
                            </div>
						<?php endwhile;  ?> 
						<?php endif; ?>

                    </div>
                    <!--/Page contetn-->
                    <!--Sidebar-->
                    <div class="span3 sidebar">
						<?php get_sidebar(); ?>
                    </div>
                    <!--/Sidebar-->
                </div>
            </div>




<?php get_footer(); ?>