<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <title>
			<?php wp_title('|',true,'right'); ?>
            <?php bloginfo('name'); ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>" />  
        <meta name="keywords" content="<?php bloginfo('name'); ?>" />
        <meta name="author" content="TB ideas">
        
        <!-- Le styles -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/docs.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    	<link href="<?php echo get_template_directory_uri(); ?>/assets/nivo/nivo-slider.css" type="text/css" media="screen" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/prettyPhoto.css" type="text/css" media="screen" rel="stylesheet">
        
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if lte IE 8]>
    	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/ie.css" />
		<![endif]-->
        
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../..<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../..<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../..<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../../../..<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-57-precomposed.png">
        
        <?php wp_head(); ?>
        
		<!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/google-code-prettify/prettify.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-transition.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-alert.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-modal.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-dropdown.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-scrollspy.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-tab.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-tooltip.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-popover.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-button.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-collapse.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-carousel.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-typeahead.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/application.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/superfish-menu/superfish.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.nivo.slider.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/testimonialrotator.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slides.min.jquery.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.preloader.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jflickrfeed.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.waitforimages.js"></script>
    	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.isotope.min.js"></script>
        
        <?php  global $data, $post; ?>
        <!-- FOR CONTACT PAGE -->
        <script type="text/javascript">
			jQuery.noConflict()(function($){
			$(document).ready(function ()
			{ // after loading the DOM
				$("#ajax-contact-form").submit(function ()
				{
					// this points to our form
					var str = $(this).serialize(); // Serialize the data for the POST-request
					$.ajax(
					{
						type: "POST",
						url: '<?php echo get_template_directory_uri(); ?>/contact.php',
						data: str,
						success: function (msg)
						{
							$("#note").ajaxComplete(function (event, request, settings)
							{
								if (msg == 'OK')
								{
									result = '<div class="notification_ok">Message was sent to website administrator, thank you!</div>';
									$("#fields").hide();
								}
								else
								{
									result = msg;
								}
								$(this).html(result);
							});
						}
					});
					return false;
				});
			});
			});
		</script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.gmap.min.js"></script>
        <script type="text/javascript">
            jQuery.noConflict()(function($){
                var $map = $('#map');
                    google.maps.event.addDomListener(window, 'resize', function() {
                        map.setCenter(homeLatlng);
                    });
                    if( $map.length ) {
            
                        $map.gMap({
                            address: '<?php echo $data['g_map']; ?>',
                            zoom: 14,
                            markers: [
                                { 'address' : '<?php echo $data['g_map']; ?>',}
                            ]
                        });
            
                    }
            });
        </script>
        <!-- /FOR CONTACT PAGE -->
        
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
        
        <script type="text/javascript">var runFancy = true;</script>
        <!--[if IE]>
        <script type="text/javascript">
            runFancy = false;
        </script>
        <![endif]-->
        <script type="text/javascript">
            if (runFancy) {
                jQuery.noConflict()(function($){
                $(".view").preloader();
                $(".theme-default").preloader();
                });
            };
        </script>
        
        
        <script type="text/javascript">
        
			var url = window.location.pathname;
            urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
            $('#filters button').each(function () {
                if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                    $(this).parent().addClass('btn-info');
                }
                else {
                    $(this).parent().removeClass('btn-info');
                }
            });
        
        </script>
        
		<script type="text/javascript">
			(function($) {
				JQTWEET = {
					
					// Set twitter username, number of tweets & id/class to append tweets
					user: 'tb_ideas',
					numTweets: 1,
					appendTo: '#jstwitter',
				
					// core function of jqtweet
					loadTweets: function() {
						$.ajax({
							url: 'http://api.twitter.com/1/statuses/user_timeline.json/',
							type: 'GET',
							dataType: 'jsonp',
							data: {
								screen_name: JQTWEET.user,
								include_rts: true,
								count: JQTWEET.numTweets,
								include_entities: true
							},
							success: function(data, textStatus, xhr) {
				
							 //var html = '<div class="tweet" style="float:left !important">TWEET_TEXT<div class="time">AGO</div>';
							var html = '<div><table><tr><td style="vertical-align:top; margin-top:30px;"><a href="http://www.twitter.com/tb_ideas" target="_blank"><img src="./assets/img/tw.png"></a></td><td class="tweet" style="float:left !important">TWEET_TEXT<strong class="time"> - AGO</strong></td></tr></table></div>';
				
								 // append tweets into page
								 for (var i = 0; i < data.length; i++) {
									$(JQTWEET.appendTo).append(
										html.replace('TWEET_TEXT', JQTWEET.ify.clean(data[i].text))
											.replace(/USER/g, data[i].user.screen_name)
											.replace('AGO', JQTWEET.timeAgo(data[i].created_at))
											.replace(/ID/g, data[i].id_str)
									);
				
								 }					
							}	
				
						});
						
					}, 
					
						
					/**
					  * relative time calculator FROM TWITTER
					  * @param {string} twitter date string returned from Twitter API
					  * @return {string} relative time like "2 minutes ago"
					  */
					timeAgo: function(dateString) {
						var rightNow = new Date();
						var then = new Date(dateString);
						
						if ($.browser.msie) {
							// IE can't parse these crazy Ruby dates
							then = Date.parse(dateString.replace(/( \+)/, ' UTC$1'));
						}
				
						var diff = rightNow - then;
				
						var second = 1000,
						minute = second * 60,
						hour = minute * 60,
						day = hour * 24,
						week = day * 7;
				
						if (isNaN(diff) || diff < 0) {
							return ""; // return blank string if unknown
						}
				
						if (diff < second * 2) {
							// within 2 seconds
							return "right now";
						}
				
						if (diff < minute) {
							return Math.floor(diff / second) + " seconds ago";
						}
				
						if (diff < minute * 2) {
							return "about 1 minute ago";
						}
				
						if (diff < hour) {
							return Math.floor(diff / minute) + " minutes ago";
						}
				
						if (diff < hour * 2) {
							return "about 1 hour ago";
						}
				
						if (diff < day) {
							return  Math.floor(diff / hour) + " hours ago";
						}
				
						if (diff > day && diff < day * 2) {
							return "yesterday";
						}
				
						if (diff < day * 365) {
							return Math.floor(diff / day) + " days ago";
						}
				
						else {
							return "over a year ago";
						}
					}, // timeAgo()
					
					
					/**
					  * The Twitalinkahashifyer!
					  * http://www.dustindiaz.com/basement/ify.html
					  * Eg:
					  * ify.clean('your tweet text');
					  */
					ify:  {
					  link: function(tweet) {
						return tweet.replace(/\b(((https*\:\/\/)|www\.)[^\"\']+?)(([!?,.\)]+)?(\s|$))/g, function(link, m1, m2, m3, m4) {
						  var http = m2.match(/w/) ? 'http://' : '';
						  return '<a class="twtr-hyperlink" target="_blank" href="' + http + m1 + '">' + ((m1.length > 25) ? m1.substr(0, 24) + '...' : m1) + '</a>' + m4;
						});
					  },
				
					  at: function(tweet) {
						return tweet.replace(/\B[@＠]([a-zA-Z0-9_]{1,20})/g, function(m, username) {
						  return '<a target="_blank" class="twtr-atreply" href="http://twitter.com/intent/user?screen_name=' + username + '">@' + username + '</a>';
						});
					  },
				
					  list: function(tweet) {
						return tweet.replace(/\B[@＠]([a-zA-Z0-9_]{1,20}\/\w+)/g, function(m, userlist) {
						  return '<a target="_blank" class="twtr-atreply" href="http://twitter.com/' + userlist + '">@' + userlist + '</a>';
						});
					  },
				
					  hash: function(tweet) {
						return tweet.replace(/(^|\s+)#(\w+)/gi, function(m, before, hash) {
						  return before + '<a target="_blank" class="twtr-hashtag" href="http://twitter.com/search?q=%23' + hash + '">#' + hash + '</a>';
						});
					  },
				
					  clean: function(tweet) {
						return this.hash(this.at(this.list(this.link(tweet))));
					  }
					} // ify
				
					
				};
				})(jQuery);
		</script>
        
        
        
        
		<script type="text/javascript">
			jQuery.noConflict()(function($){
				$(document).ready(function(){

					$('#basicuse').jflickrfeed({
						limit: 3,
						qstrings: {
							id: '<?php echo $data['footer_w3_fl']; ?>'
						},
						itemTemplate: '<li class="span1"><div class="view view-first nolink noshadow"><img src="{{image_b}}" alt="{{title}}" /><div class="mask"><a href="{{image_b}}" rel="prettyPhoto" class="info"></a></div></div></li>'
					}, function(data) {
						$("a[rel^='prettyPhoto']").prettyPhoto({opacity:0.80,default_width:200,default_height:344,theme:'facebook',hideflash:false,modal:false});
					});
				});
			});
		</script>
        <?php wp_link_pages(); ?>

    </head>

	<body  <?php body_class( $class ); ?>>
	
    <!--TOP-->
  	<div class="top_line">
    	<div class="container">

	<!-- FB buttons load -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

   	<!--TOP-->
	<a name="top"></a>
  	<div class="navbar navbar-fixed-top"><!-- style="background-color:#333333;"> -->
    	<div class="navbar-inner">
		<div class="container-fluid">
			<div class="row-fluid hidden-phone">
				<div class="span2" align="left">
					<a href="http://www.tbideas.com" onClick="_gaq.push(['_trackEvent', 'Logo', 'click', 'logo_top_click']);document.location.href='http://www.tbideas.com';return false;"><img src="../../../../assets/tb_pics/tbi_logo_s_transpa.png"/></a>
				</div>
				<div class="span2" align="left" style="margin-top:10px;text-align:right;">
					<!-- FB buttons -->
					<div class="fb-like" data-href="http://www.facebook.com/tbideas" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false" data-colorscheme="dark" data-font="trebuchet ms" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'facebook_like_click_blog']); return false;"></div>
					</div>
					<!-- Last tweet -->					
					<div class="span6 hidden-phone" style="margin-top:6px">
						<div id="jstwitter" class="clearfix" onMouseOver="_gaq.push(['_trackEvent', 'Social', 'mouseover', 'tweets_mouseover_blog']); return false;" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'twitter_follow_click']); return false;"></div>
					</div>
					<div class="span1">
						<a href="http://www.tbideas.com/sub_choice.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'goto_subscribtion_click_blog']); document.location.href='http://www.tbideas.com/get-loochi.php'; return false;" class="btn btn-info btn-med getloochi" ><strong>Get&nbsp;one&nbsp;today!</strong></a>
					</div>
				</div>
				<div class="row-fluid visible-phone" align="center">
					<div class="span12">
						<div class="row">
							<div>
								<a href="http://www.tbideas.com" onClick="_gaq.push(['_trackEvent', 'Logo', 'click', 'logo_top_click']);document.location.href='http://www.tbideas.com';return false;"><img src="assets/tb_pics/tbi_logo_s_transpa.png"/></a>
							</div>
							<div align="center" style="margin-top:10px;">
								<!-- FB buttons -->
								<div class="fb-like" data-href="http://www.facebook.com/tbideas" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false" data-colorscheme="dark" data-font="trebuchet ms" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'facebook_like_click']); return false;"></div>
								<a href="http://www.tbideas.com/sub_choice.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'goto_subscribtion_click']); document.location.href='http://www.tbideas.com/sub_choice.php'; return false;" class="btn btn-info btn-med getloochi" ><strong>Get&nbsp;one&nbsp;today!</strong></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--/TOP-->

    	</div>
    </div>
    <!--/TOP-->
    
    <!--PAGE HEAD-->
    <div class="page_head">
    	<div class="container" style="margin-top:30px;">
        	<div class="row">
            	<div class="span4">
                	<div class="logo">
                    	<!-- 
			<a href="<?php bloginfo('url'); ?>"> <img src="<?php echo stripslashes($data['header_logo']) ?>" alt="<?php bloginfo('name'); ?>" /></a>
			-->
			<!-- Logo -->
			<a href="<?php bloginfo('url'); ?>"><h2><?php bloginfo('name');?></h2></a>

                    </div>
                </div>
                <div class="span8">
                	<nav>
                    	<?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_class' => 'menu')); ?>
                    </nav>
                </div>
    		</div>
    	</div>
    </div>
    <!--/PAGE HEAD-->
	
    <!--WELCOME AREA-->
    <!--/WELCOME AREA-->