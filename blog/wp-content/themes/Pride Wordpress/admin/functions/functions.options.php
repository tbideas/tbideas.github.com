<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories = array();  
		$of_categories_obj = get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp = array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages = array();
		$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp = array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select = array("one","two","three","four","five"); 
		$of_options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_one"		=> "Block One",
				"block_two"		=> "Block Two",
				"block_three"	=> "Block Three",
			), 
			"enabled" => array (
				"placebo" => "placebo", //REQUIRED!
				"block_four"	=> "Block Four",
			),
		);


		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}


		//Background Images Reader
		$of_portfolio_style = array("1" => "6 Columns Portfolio", "2" => "4 Columns Portfolio", "3" => "3 Columns Portfolio", "4" => "2 Columns Portfolio");
		$bg_images_path = STYLESHEETPATH. '/images/bg/'; // change this to where you store your bg images
		$bg_images_url = get_bloginfo('template_url').'/images/bg/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr = wp_upload_dir();
		$all_uploads_path = $uploads_arr['path'];
		$all_uploads = get_option('of_uploads');
		$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

//Header
$of_options[] = array( "name" => "Header",
					"type" => "heading");
          

$of_options[] = array( "name" => "UPLOAD YOUR LOGO",
					"desc" => "",
					"id" => "header_logo",
					"std" => "http://www.orange-idea.com/assets/pride/logo.png",
					"type" => "media");


					
$of_options[] = array( "name" => "TOP LINE TEXT",
					"desc" => "Past your text or HTML",
					"id" => "header_top_line",
					"std" => "Subscribe to be notified for updates: <a href='#'>RSS Feed</a>",
					"type" => "text");					


$of_options[] = array( "name" => "SOCIAL ICONS",
					"desc" => "Twitter",
					"id" => "header_social_tw",
					"std" => "http://twitter.com",
					"type" => "text");	

$of_options[] = array( "name" => "",
					"desc" => "Facebook",
					"id" => "header_social_fb",
					"std" => "http://facebook.com",
					"type" => "text");

$of_options[] = array( "name" => "",
					"desc" => "Google +",
					"id" => "header_social_g",
					"std" => "http://plus.google.com",
					"type" => "text");

$of_options[] = array( "name" => "",
					"desc" => "Dribbble",
					"id" => "header_social_dr",
					"std" => "http://dribbble.com",
					"type" => "text");

$of_options[] = array( "name" => "",
					"desc" => "Flickr",
					"id" => "header_social_fl",
					"std" => "http://flickr.com",
					"type" => "text");

$of_options[] = array( "name" => "",
					"desc" => "YouTube",
					"id" => "header_social_yt",
					"std" => "http://youtube.com",
					"type" => "text");


$of_options[] = array( "name" => "HOME PAGE TAG LINE",
					"desc" => "Twitter",
					"id" => "header_tagline",
					"std" => "<i class='icon-home icon-pride'></i> <strong class='colored'>Pride Tempalte:</strong> is designed to help people of all skill levels designer or developer, huge nerd or early beginner.",
					"type" => "text");	



//Footer
$of_options[] = array( "name" => "Footer",
					"type" => "heading");
          

$of_options[] = array( "name" => "WIDGET I",
					"desc" => "Upload your logo for footer WIDGET I",
					"id" => "footer_logo",
					"std" => "http://www.orange-idea.com/assets/pride/logo-footer.png",
					"type" => "media");

$of_options[] = array( "name" => "",
					"desc" => "Past your text or HTML",
					"id" => "widget1",
"std" => "
<p>Pride template is designed to help people of all skill levels designer or developer, huge nerd or early.</p>
<p>
<i class='icon-user  icon-white'></i> +1 800 2000 600<br>
<i class='icon-envelope icon-white'></i> contact@sitename.com<br>
<i class='icon-map-marker icon-white'></i> 9930 124th Northeast Kirkland, Washington
</p>",
					"type" => "textarea");


$of_options[] = array( "name" => "WIDGET II",
					"desc" => "Header for WIDGET II",
					"id" => "footer_w2_head",
					"std" => "Recent from Twitter",
					"type" => "text");


$of_options[] = array( "name" => "",
					"desc" => "Content for WIDGET II ( If empty will show Twitter Feed )",
					"id" => "footer_w2_content",
					"std" => "",
					"type" => "textarea");

$of_options[] = array( "name" => "",
					"desc" => "You Twitter account",
					"id" => "footer_w2_tw",
					"std" => "Orange_Idea_RU",
					"type" => "text");





$of_options[] = array( "name" => "WIDGET III",
					"desc" => "Header for WIDGET III",
					"id" => "footer_w3_head",
					"std" => "Flickr gallery",
					"type" => "text");


$of_options[] = array( "name" => "",
					"desc" => "Content for WIDGET III ",
					"id" => "footer_w3_content",
					"std" => "We love it so much, we decided to help people",
					"type" => "textarea");

$of_options[] = array( "name" => "",
					"desc" => "You Flickr ID",
					"id" => "footer_w3_fl",
					"std" => "36188705@N08",
					"type" => "text");





$of_options[] = array( "name" => "WIDGET IV",
					"desc" => "Header for WIDGET IV",
					"id" => "footer_w4_head",
					"std" => "Recent from the blog",
					"type" => "text");


$of_options[] = array( "name" => "",
					"desc" => "Content for WIDGET IV (will show recent posts if empty)",
					"id" => "footer_w4_content",
					"std" => "We love it so much, we decided to help people",
					"type" => "textarea");

$of_options[] = array( "name" => "BOTTOM LINE",
					"desc" => "",
					"id" => "bottom_content",
					"std" => "Copyright 2012 Pride - Company. Design by <a href='http://themeforest.net/user/OrangeIdea?ref=OrangeIdea' target='_blank'>OrangeIdea</a>",
					"type" => "text");




/* Portfolio */
$of_options[] = array( "name" => "Portfolio",
					"type" => "heading");



$of_options[] = array( "name" => "TYPE OF PORTFOLIO",
					"desc" => "",
					"id" => "sl_portfolio_style",
					"std" => "1",
					"type" => "select",
					"options" => $of_portfolio_style);  
					
$of_options[] = array("name" =>  "",
					"desc" => "Enter the number of projects to display",
					"id" => "sl_portfolio_projects",
					"std" => "10",
					"type" => "text");

/* Contacts */
$of_options[] = array( "name" => "Contacts",
					"type" => "heading");

$of_options[] = array( "name" => "GOOGLE MAP",
					"desc" => "Past your address for google map",
					"id" => "g_map",
					"std" => "9930 15th Avenue Northeast Kirkland, Washington",
					"type" => "textarea");



					
// Backup Options
$of_options[] = array( "name" => "Backup",
					"type" => "heading");
					
$of_options[] = array( "name" => "Backup and Restore Options",
                    "id" => "of_backup",
                    "std" => "",
                    "type" => "backup",
					"desc" => 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
					);
					
$of_options[] = array( "name" => "Transfer Theme Options Data",
                    "id" => "of_transfer",
                    "std" => "",
                    "type" => "transfer",
					"desc" => 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".
						',
					);
					
	}
}
?>
