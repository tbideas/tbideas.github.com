			<?php get_header(); ?>
            <?php
				$custom = get_post_custom($post->ID);
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
				$small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog'); 
				$small_p_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'portfolio-three'); 
				$cat = get_the_category($post->ID); 
				$cat = $cat[0]; 
			?>
            <?php $img1 = get_post_meta($post->ID, 'image', true); ?>
            <?php $img2 = get_post_meta($post->ID, 'image2', true); ?>
            <?php $img3 = get_post_meta($post->ID, 'image3', true); ?>            
            
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
                <div class="container inner_content">
                    <section style=" padding:0px !important">
                        <div class="row">
                            <div class="span6">
                            	<div class="slider_area">
									<?php if (!((get_post_meta($post->ID, image, true)) || (get_post_meta($post->ID, image2, true)) || (get_post_meta($post->ID, image3, true)) || (get_post_meta($post->ID, video, true)))) { ?>
                                        <img src="<?php echo $large_image_url[0]; ?>" alt="" />
                                    <?php } ?>
                                    <?php if (get_post_meta($post->ID, video, true));{ ?><?php echo get_post_meta($post->ID, video, true); ?><?php }?>	
                                    <?php if ((get_post_meta($post->ID, 'image', true)) || (get_post_meta($post->ID, 'image2', true)) || (get_post_meta($post->ID, 'image3', true))){ ?>
                                    <div class="theme-default">
                                        <div id="slider" class="nivoSlider">
                                            <?php if (get_post_meta($post->ID, 'image', true)) { ?>
                                                <img src="<?php echo get_post_meta($post->ID, image, true); ?>" alt="" />
                                            <?php } ?>
                                            <?php if (get_post_meta($post->ID, 'image2', true)) { ?>
                                                <img src="<?php echo get_post_meta($post->ID, image2, true); ?>" alt="" />
                                            <?php } ?>
                                            <?php if (get_post_meta($post->ID, 'image3', true)) { ?>
                                                <img src="<?php echo get_post_meta($post->ID, image3, true); ?>" alt="" />
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                            	</div>
                            </div>
                            <div class="span6 portfolio-description">
                                <div class="sep_bg"><h2><?php the_title(); ?></h2> <strong><span class="colored"><?php previous_post_link(); ?></span> <span style="font-size:10px;"> / </span> <span class="colored"><?php next_post_link(); ?></span></strong></div>
								<?php the_content(''); ?>
                            </div>
                        </div>
                    </section>
                </div>
           
            <?php endwhile;  ?>
	 		<?php endif; ?>
        <!--End main container-->
        <!--Footer-->
        <?php get_footer(); ?>