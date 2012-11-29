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
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
			<div class="container-fluid">
				<div class="row-fluid hidden-phone">
					<div class="span2" align="left">
						<a href="index.php" onClick="_gaq.push(['_trackEvent', 'Logo', 'click', 'logo_top_click']);document.location.href='index.php';return false;"><img src="assets/tb_pics/tbi_logo_s_transpa.png"/></a>
						<!-- EN/FR link -->
						&nbsp;<a href="fr/index.php"><img src="assets/tb_pics/flag-fr.png" style="width:20px;" alt="Voir la version française" title="Voir la version française"></a>
					</div>
					<div class="span2" align="left" style="margin-top:10px;text-align:right;">
						<!-- FB buttons -->
						<div class="fb-like" data-href="http://www.facebook.com/tbideas" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false" data-colorscheme="dark" data-font="trebuchet ms" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'facebook_like_click']); return false;"></div>
					</div>
					<!-- Last tweet -->
					<div class="span6 hidden-phone" style="margin-top:6px">
						<div id="jstwitter" class="clearfix" onMouseOver="_gaq.push(['_trackEvent', 'Social', 'mouseover', 'tweets_mouseover']); return false;" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'twitter_follow_click']); return false;"></div>
					</div>
					<div class="span1">
						<a href="get-loochi.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'goto_subscribtion_click']); document.location.href='get-loochi.php'; return false;" class="btn btn-info btn-med" ><strong>Get&nbsp;one&nbsp;today!</strong></a>
					</div>
				</div>

				<div class="row-fluid visible-phone" align="center">
					<div class="span12">
						<div class="row">
							<div>
								<a href="index.php" onClick="_gaq.push(['_trackEvent', 'Logo', 'click', 'logo_top_click']);document.location.href='index.php';return false;"><img src="assets/tb_pics/tbi_logo_s_transpa.png" alt="Voir la version française"></a>
							</div>
							<div align="center" style="margin-top:10px;">
								<!-- FB buttons -->
								<div class="fb-like" data-href="http://www.facebook.com/tbideas" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false" data-colorscheme="dark" data-font="trebuchet ms" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'facebook_like_click']); return false;"></div>
								<a href="get-loochi.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'goto_subscribtion_click']); document.location.href='get-loochi.php'; return false;" class="btn btn-info btn-med" ><strong>Get&nbsp;one&nbsp;today!</strong></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/TOP-->
	
<?php

$navitems = array(
	array(
		'href' => '/index.php',
		'title' => 'Home',
		'event' => 'menu_home_click'
	),
	array(
		'href' => '/features.php',
		'title' => 'Features',
		'event' => 'menu_features_click'
	),
	array(
		'href' => '/techspecs.php',
		'title' => 'Tech Specs',
		'event' => 'menu_techspecs_click'
	),
	array(
		'href' => '/blog/',
		'target' => '_blank',
		'title' => 'Blog',
		'event' => 'menu_blog_click',
		'span-class' => 'colored'
	)
);
?>
	<!--PAGE HEAD-->
	<div class="page_head">
		<div class="container">
			<div class="row" style="margin-top:50px">
				<div class="span6">
					<div style="padding:5px;">
						<h1><strong class="colored" style="font-size:44px;">Loochi</strong></h1>
					</div>
				</div>
				<div class="span6">
					<div style="margin-bottom:30px;">
						<nav>
							<ul id="menu">
	<?php

	foreach ($navitems as $navitem) {
	?>
								<li <?php
								if (strpos($_SERVER['PHP_SELF'], $navitem['href']) === 0) {
									?>class="active" <?php
								}
								?>><a	href="<?php echo $navitem['href'] ?>"
									onClick="_gaq.push(['_trackEvent', 'Menu', 'click', '<?php echo $navitem['event'] ?>']);" <?php
									if (isset($navitem['target'])) {
										?>target="<?php $navitem['target'] ?>" <?php
									}
									echo ">";
									if (isset($navitem['span-class'])) {
										 ?><span class="<?php echo $navitem['span-class']?>"><?php echo $navitem['title'] ?></span><?php
									} else {
										echo $navitem['title'];
									}
									?></a></li>
	<?php } ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="sep_bg" style="margin-top:10px;">
				<h2><span class="colored">/// More than a </span>smart lamp</h2>
			</div>
		</div>
	</div>
	<!--/PAGE HEAD-->
