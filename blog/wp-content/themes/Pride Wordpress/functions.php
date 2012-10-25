<?php

/**
This file was not meant not to replace your functions.php file. 
Just copy and paste the codes below into your own functions.php file.
*/

/**
 * Slightly Modified Options Framework
 */
require_once ('admin/index.php');
include('inc/shortcodes.php');
/*=======================================
	Add WP Menu Support
=======================================*/

function register_veles_menu() { 
  register_nav_menus(
    array(
      'main_menu' => 'Main navigation',
      'secondary_menu' => 'Footer navigation'
    )
  );
}

add_action( 'init', 'register_veles_menu' ); 


if ( ! isset( $content_width ) ) $content_width = 900;









/*=======================================
	Register Sidebar
=======================================*/

if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Sidebar',
        'before_widget' => '<div class="well">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="sep_bg">',
        'after_title' => '</h4>',
    ));
	
function wp_corenavi() {
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = ($wp_rewrite->using_permalinks()) ? user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' ) : @add_query_arg('paged','%#%');
  if( !empty($wp_query->query_vars['s']) ) $a['add_args'] = array( 's' => get_query_var( 's' ) );
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; 
  $a['mid_size'] = '3'; 
  $a['end_size'] = '1'; 
  $a['prev_text'] = 'Back'; 
  $a['next_text'] = 'Next'; 
  $a['total'] = $wp_query->max_num_pages;

  echo  paginate_links($a);
}

function load_fonts() {
            wp_register_style('gShanti', 'http://fonts.googleapis.com/css?family=Shanti');
            wp_enqueue_style( 'gShanti');

            wp_register_style('gMako', 'http://fonts.googleapis.com/css?family=Mako');
            wp_enqueue_style( 'gMako');
            
            wp_register_style('gCrimson', 'http://fonts.googleapis.com/css?family=Crimson+Text:regular,regularitalic,600,600italic,bold,bolditalic');
            wp_enqueue_style( 'gCrimson');
            
            wp_register_style('gDroid', 'http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold');
            wp_enqueue_style( 'gDroid');

            wp_register_style('gPlay', 'http://fonts.googleapis.com/css?family=Play');
            wp_enqueue_style( 'gPlay');

            wp_register_style('gTerminalDosis', 'http://fonts.googleapis.com/css?family=Terminal+Dosis+Light');
            wp_enqueue_style( 'gTerminalDosis');

            wp_register_style('gPacifico', 'http://fonts.googleapis.com/css?family=Pacifico');
            wp_enqueue_style( 'gPacifico');

            wp_register_style('gCrushed', 'http://fonts.googleapis.com/css?family=Crushed');
            wp_enqueue_style( 'gCrushed');

            wp_register_style('gPuritan', 'http://fonts.googleapis.com/css?family=Puritan');
            wp_enqueue_style( 'gPuritan');

            wp_register_style('gYanone', 'http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz');
            wp_enqueue_style( 'gYanone');

            wp_register_style('gOswald', 'http://fonts.googleapis.com/css?family=Oswald');
            wp_enqueue_style( 'gOswald');

            wp_register_style('gAnonymousPro', 'http://fonts.googleapis.com/css?family=Anonymous+Pro');
            wp_enqueue_style( 'gAnonymousPro');

            wp_register_style('gVollkorn', 'http://fonts.googleapis.com/css?family=Vollkorn');
            wp_enqueue_style( 'gVollkorn');

            wp_register_style('gNoblie', 'http://fonts.googleapis.com/css?family=Nobile');
            wp_enqueue_style( 'gNoblie');

            wp_register_style('gMolengo', 'http://fonts.googleapis.com/css?family=Molengo');
            wp_enqueue_style( 'gMolengo');

            wp_register_style('gAllerta', 'http://fonts.googleapis.com/css?family=Allerta');
            wp_enqueue_style( 'gAllerta');

            wp_register_style('gMetrophobic', 'http://fonts.googleapis.com/css?family=Metrophobic');
            wp_enqueue_style( 'gMetrophobic');


            wp_register_style('gFrancoisOne', 'http://fonts.googleapis.com/css?family=Francois+One');
            wp_enqueue_style( 'gFrancoisOne');

            wp_register_style('gRokkitt', 'http://fonts.googleapis.com/css?family=Rokkitt');
            wp_enqueue_style( 'gRokkitt');

            wp_register_style('gDidactGothic', 'http://fonts.googleapis.com/css?family=Didact+Gothic');
            wp_enqueue_style( 'gDidactGothic');

            wp_register_style('gNewsNewsCyrcle', 'http://fonts.googleapis.com/css?family=News+Cycle');
            wp_enqueue_style( 'gNewsNewsCyrcle');

            wp_register_style('gSpecialElite', 'http://fonts.googleapis.com/css?family=Special+Elite');
            wp_enqueue_style( 'gSpecialElite');

            wp_register_style('gKreon', 'http://fonts.googleapis.com/css?family=Kreon');
            wp_enqueue_style( 'gKreon');

            wp_register_style('gOrbitron', 'http://fonts.googleapis.com/css?family=Orbitron');
            wp_enqueue_style( 'gOrbitron');

            wp_register_style('gRadley', 'http://fonts.googleapis.com/css?family=Radley');
            wp_enqueue_style( 'gRadley');

            wp_register_style('gBentham', 'http://fonts.googleapis.com/css?family=Bentham');
            wp_enqueue_style( 'gBentham');

            wp_register_style('gJosefinSans', 'http://fonts.googleapis.com/css?family=Josefin+Sans');
            wp_enqueue_style( 'gJosefinSans');

        }
 
add_action('wp_head', 'load_fonts');

/*=======================================
	Add Thumbnail Support
=======================================*/
add_theme_support( 'automatic-feed-links' );

 add_theme_support('post-thumbnails');
 if ( function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
}


// PAGINATION

function paginate() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => true,
		'type' => 'plain'
	);
	if( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	if( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
	echo paginate_links( $pagination );
}




// Extra Fields
add_action('admin_init', 'extra_fields', 1);

function extra_fields() {
    add_meta_box( 'extra_fields', 'Additional settings', 'blog_fields_box_func', 'post', 'normal', 'high'  );
	add_meta_box( 'extra_fields', 'Additional settings', 'extra_fields_box_page_func', 'page', 'normal', 'high'  );
	add_meta_box( 'extra_fields', 'Additional settings', 'extra_fields_box_port_func', 'portfolio-type', 'normal', 'high'  );
}


function extra_fields_box_port_func( $post ){
?>
    <h4>Few words about project</h4>
    <p>
		<input type="text" name="extra[port-descr]" style="width:100%;" value="<?php echo get_post_meta($post->ID, 'port-descr', 1); ?>">  </input>
	</p>
    
    
    <h4>You can upload up to 3 additional images (Optional. For slider)</h4>
    <p>
		<label for="upload_image">Upload Image 1: </label>
		<input id="upload_image" type="text" size="90" name="extra[image]" value="<?php echo get_post_meta($post->ID, image, true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>

	</p>	
	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<p>
		<label for="upload_image">Upload Image 2: </label>
		<input id="upload_image" type="text" size="90" name="extra[image2]" value="<?php echo get_post_meta($post->ID, image2, true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>

	</p>	
	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />

	<p>
		<label for="upload_image">Upload Image 3: </label>
		<input id="upload_image" type="text" size="90" name="extra[image3]" value="<?php echo get_post_meta($post->ID, image3, true); ?>" />
		<input class="upload_image_button" type="button" value="Upload" /><br/>

	</p>	
	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<h4>Or past code for Video (iframe height="360" width="100%" )</h4>
    <p>
		<textarea type="text" name="extra[video]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'video', 1); ?></textarea>
	</p>	
<?php
}

function blog_fields_box_func( $post ){
?>
    <h4>If it will be Video post please paste code here( Iframe width="640")</h4>
    <p>
		<textarea type="text" name="extra[video]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'video', 1); ?></textarea>
	</p>	
<?php
}

function extra_fields_box_page_func( $post ){
?>
    <h4>Custom page description (Optional)</h4>
    <p>
		<textarea type="text" name="extra[description]" style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'description', 1); ?></textarea>
	</p>	
<?php
}



add_action('save_post', 'extra_fields_update', 0);


function extra_fields_update( $post_id ){
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; 
	if ( !current_user_can('edit_post', $post_id) ) return false; 
	if( !isset($_POST['extra']) ) return false;	

	
	$_POST['extra'] = array_map('trim', $_POST['extra']);
	foreach( $_POST['extra'] as $key=>$value ){
		if( empty($value) )
			continue delete_post_meta($post_id, $key);

		update_post_meta($post_id, $key, $value);
	}
	return $post_id;
}

function upload_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', get_bloginfo('template_directory').'/assets/js/custom_uploader.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
}



function upload_styles() {
	wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'upload_scripts'); 
add_action('admin_print_styles', 'upload_styles');




// CUSTOM POST TYPES

function justins_custom_post_types() {
	
	
	// Portfolio
	
	$labels_portfolio = array(
		'add_new' => 'Add New', 'portfolio-type',
		'add_new_item' => 'Add New Portfolio Post',
		'edit_item' => 'Edit Portfolio Post',
		'menu_name' => 'Portfolio',
		'name' => 'Portfolio', 'post type general name',
		'new_item' => 'New Portfolio Post',
		'not_found' =>  'No portfolio posts found',
		'not_found_in_trash' => 'No portfolio posts found in Trash', 
		'parent_item_colon' => '',
		'singular_name' => 'Portfolio Post', 'post type singular name',
		'search_items' => 'Search Portfolio Posts',
		'view_item' => 'View Portfolio Post',
	);
	$args_portfolio = array(
		'capability_type' => 'post',
		'has_archive' => true, 
		'hierarchical' => true,
		'labels' => $labels_portfolio,
		'menu_position' => 4,
		'public' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'show_in_menu' => true, 
		'show_ui' => true, 
		'supports' => array( 'comments', 'editor', 'excerpt', 'thumbnail', 'title' ),
		'singular_label' => 'Portfolio',
	);
	register_post_type( 'portfolio-type', $args_portfolio );
	
	
}

add_action( 'init', 'justins_custom_post_types' );


// CUSTOM TAXONOMIES

function justins_custom_taxonomies() {


	// Portfolio Categories	
	
	$labels = array(
		'add_new_item' => 'Add New Category',
		'all_items' => 'All Categories' ,
		'edit_item' => 'Edit Category' , 
		'name' => 'Portfolio Categories', 'taxonomy general name' ,
		'new_item_name' => 'New Genre Category' ,
		'menu_name' => 'Categories' ,
		'parent_item' => 'Parent Category' ,
		'parent_item_colon' => 'Parent Category:',
		'singular_name' => 'Portfolio Category', 'taxonomy singular name' ,
		'search_items' =>  'Search Categories' ,
		'update_item' => 'Update Category' ,
	);
	register_taxonomy( 'portfolio-category', array( 'portfolio-type' ), array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'portfolio-type/category' ),
		'show_ui' => true,
	));
	
	
	// Portfolio Tags	
	
	$labels = array(
		'add_new_item' => 'Add New Tag' ,
		'all_items' => 'All Tags' ,
		'edit_item' => 'Edit Tag' , 
		'menu_name' => 'Portfolio Tags' ,
		'name' => 'Portfolio Tags', 'taxonomy general name' ,
		'new_item_name' => 'New Genre Tag' ,
		'parent_item' => 'Parent Tag' ,
		'parent_item_colon' => 'Parent Tag:' ,
		'singular_name' =>  'Portfolio Tag', 'taxonomy singular name' ,
		'search_items' =>   'Search Tags' ,
		'update_item' => 'Update Tag' ,
	);
	register_taxonomy( 'portfolio-tags', array( 'portfolio-type' ), array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'portfolio-type/tag' ),
		'show_ui' => true,
	));
	
		
}

add_action( 'init', 'justins_custom_taxonomies', 0 );


// CUSTOM POSTS PER PAGE




function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div class="seppp">
      <?php if ($comment->comment_approved == '0') : ?>
         <div class="alert alert-info"><?php echo 'Your comment is awaiting moderation.'; ?></div>
      <?php endif; ?>
<!--		<h3 class="no-indent"><?php comment_author_link(); ?></h3> -->
                <div class="row">
                    <div class="span1 hidden-phone">
						<?php echo get_avatar($comment,$size='70',$default='<path_to_url>'); ?>
                    </div>
                
                <div class="span7">
                        <h6><span class="colored"><?php comment_author_link(); ?></span> <a style="color:inherit; padding-left:7px;" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php echo get_comment_date('d M Y') ?></a></h6>
                        <div style=" font-style:italic;">
                            <?php comment_text() ?>
                        </div>
                </div>
            </div>
            </div>

     <?php
    }
?>