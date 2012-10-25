<?php
// Template Name: Portfolio Template
$paged = 1;
if ( get_query_var('paged') ) $paged = get_query_var('paged');
if ( get_query_var('page') ) $paged = get_query_var('page');
query_posts( '&post_type=portfolio-type&paged=' . $paged );
?>
<?php
$title = get_the_title();
if ( $title == "2 Columns Portfolio")  $data['sl_portfolio_style'] = "2 Columns Portfolio";
if ( $title == "3 Columns Portfolio")  $data['sl_portfolio_style'] = "3 Columns Portfolio";
if ( $title == "4 Columns Portfolio")  $data['sl_portfolio_style'] = "4 Columns Portfolio";
if ( $title == "6 Columns Portfolio")  $data['sl_portfolio_style'] = "6 Columns Portfolio";
if ( $title == "2 Columns Portfolio")  query_posts( '&post_type=portfolio-type&posts_per_page=4&paged=' . $paged );
if ( $title == "4 Columns Portfolio")  query_posts( '&post_type=portfolio-type&posts_per_page=8&paged=' . $paged );
if ( $title == "6 Columns Portfolio")  query_posts( '&post_type=portfolio-type&posts_per_page=12&paged=' . $paged );
if ( $title == "3 Columns Portfolio")  query_posts( '&post_type=portfolio-type&posts_per_page=6&paged=' . $paged );
?>


			<?php get_header(); ?>
            
            <div class="container inner_content">
                <div class="row hidden-phone">
                    <div class="span12">
                            <div id="filters" class="btn-group ">
                                <button data-filter="*" class="btn btn-info btn-small" >All Works</button> <?php 
									$categories = get_categories(array('type' => 'post', 'taxonomy' => 'portfolio-category')); 
									foreach($categories as $category) {
									$group = $category->slug;
									  echo "<button data-filter='.$group' class='btn btn-inverse btn-small'>".$category->cat_name."</button>";
									}
								?>
                            </div>
                    </div>
                </div>
                
                <section style="padding-top:30px !important;">
                <div class="row">
                    <div class="span12">
                        <div id="portfolio" class="row">
							<?php if ($data['sl_portfolio_style'] == "4 Columns Portfolio") { ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                                <?php
                                    $custom = get_post_custom($post->ID);
                                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
                                     
                                    $cat = get_the_category($post->ID); 
                                    $cat = $cat[0]; 
                                ?>
                                <?php $cur_terms = get_the_terms( $post->ID, 'portfolio-category' ); 
                                    foreach($cur_terms as $cur_term){  
                                }?>
                                
                                    <div class="span3 block <?php echo strtolower($cur_term->slug); ?>"data-filter="">
                                        <div class="view view-first">
                                            <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto"><img src="<?php echo $large_image_url[0]; ?>" alt="" /></a>
                                            <div class="mask">
                                                <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" class="info"></a>
                                                <a href="<?php echo get_permalink(); ?>" class="link"></a>
                                            </div>
                                        </div>
                                        <div class="descr">
	                                        <h6><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h6>
											<p class="clo"><?php echo get_post_meta($post->ID, 'port-descr', 1); ?></p>
                                        </div>
                                    </div>
                                
                                <?php endwhile; endif; ?>
                            <?php } ?>
        
                        
                        	<?php if ($data['sl_portfolio_style'] == "3 Columns Portfolio") { ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                                <?php
                                    $custom = get_post_custom($post->ID);
                                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
                                     
                                    $cat = get_the_category($post->ID); 
                                    $cat = $cat[0]; 
                                ?>
                                <?php $cur_terms = get_the_terms( $post->ID, 'portfolio-category' ); 
                                    foreach($cur_terms as $cur_term){  
                                }?>
                                
                                    <div class="span4 block <?php echo strtolower($cur_term->slug); ?>"data-filter="">
                                        <div class="view view-first">
                                            <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto"><img src="<?php echo $large_image_url[0]; ?>" alt="" /></a>
                                            <div class="mask">
                                                <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" class="info"></a>
                                                <a href="<?php echo get_permalink(); ?>" class="link"></a>
                                            </div>
                                        </div>
                                        <div class="descr">
	                                        <h6><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h6>
											<p class="clo"><?php echo get_post_meta($post->ID, 'port-descr', 1); ?></p>
                                        </div>
                                    </div>
                                
                                <?php endwhile; endif; ?>
                            <?php } ?>
                        
                        	<?php if ($data['sl_portfolio_style'] == "2 Columns Portfolio") { ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                                <?php
                                    $custom = get_post_custom($post->ID);
                                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
                                     
                                    $cat = get_the_category($post->ID); 
                                    $cat = $cat[0]; 
                                ?>
                                <?php $cur_terms = get_the_terms( $post->ID, 'portfolio-category' ); 
                                    foreach($cur_terms as $cur_term){  
                                }?>
                                
                                    <div class="span6 block <?php echo strtolower($cur_term->slug); ?>"data-filter="">
                                        <div class="view view-first">
                                            <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto"><img src="<?php echo $large_image_url[0]; ?>" alt="" /></a>
                                            <div class="mask">
                                                <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" class="info"></a>
                                                <a href="<?php echo get_permalink(); ?>" class="link"></a>
                                            </div>
                                        </div>
                                        <div class="descr">
	                                        <h6><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h6>
											<p class="clo"><?php echo get_post_meta($post->ID, 'port-descr', 1); ?></p>
                                        </div>
                                    </div>
                                
                                <?php endwhile; endif; ?>
                            <?php } ?>
                            
                            
                            <?php if ($data['sl_portfolio_style'] == "6 Columns Portfolio") { ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                                <?php
                                    $custom = get_post_custom($post->ID);
                                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); 
                                     
                                    $cat = get_the_category($post->ID); 
                                    $cat = $cat[0]; 
                                ?>
                                <?php $cur_terms = get_the_terms( $post->ID, 'portfolio-category' ); 
                                    foreach($cur_terms as $cur_term){  
                                }?>
                                
                                    <div class="span2 block <?php echo strtolower($cur_term->slug); ?>"data-filter="">
                                        <div class="view view-first">
                                            <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto"><img src="<?php echo $large_image_url[0]; ?>" alt="" /></a>
                                            <div class="mask">
                                                <a href="<?php echo $large_image_url[0]; ?>" rel="prettyPhoto" class="info"></a>
                                                <a href="<?php echo get_permalink(); ?>" class="link"></a>
                                            </div>
                                        </div>
                                        <div class="descr">
	                                        <h6><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h6>
											<p class="clo"><?php echo get_post_meta($post->ID, 'port-descr', 1); ?></p>
                                        </div>
                                    </div>
                                
                                <?php endwhile; endif; ?>
                            <?php } ?>
                            
                        
                        </div>
                    </div>
                </div>
                </section>
            </div>

            
            
            
            
            
            
            

        <?php get_footer(); ?>