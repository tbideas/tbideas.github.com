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
						<a href="index.php" onClick="_gaq.push(['_trackEvent', 'Logo', 'click', 'logo_top_click']);document.location.href='index.php';return false;"><img src="../assets/tb_pics/tbi_logo_s_transpa.png"/></a>
						<!-- EN/FR link -->
						&nbsp;<a href="../index.php"><img src="../assets/tb_pics/flag-en.png" style="width:20px;" alt="Switch to English version" title="Switch to English version"></a>
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
						<a href="sub_choice.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'goto_subscribtion_click']); document.location.href='sub_choice.php'; return false;" class="btn btn-info btn-med" ><strong>J'en&nbsp;veux&nbsp;une!</strong></a>
					</div>
				</div>

				<div class="row-fluid visible-phone" align="center">
					<div class="span12">
						<div class="row">
							<div>
								<div>
									<a href="index.php" onClick="_gaq.push(['_trackEvent', 'Logo', 'click', 'logo_top_click']);document.location.href='index.php';return false;"><img src="../assets/tb_pics/tbi_logo_s_transpa.png"/></a>
								</div><div style="margin-left:10px;">
								<!-- EN/FR link -->
								<a href="../index.php"><img src="../assets/tb_pics/flag-en.png"></a>
								</div>
							</div>
							<div align="center" style="margin-top:10px;">
								<!-- FB buttons -->
								<div class="fb-like" data-href="http://www.facebook.com/tbideas" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false" data-colorscheme="dark" data-font="trebuchet ms" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'facebook_like_click']); return false;"></div>
								<a href="sub_choice.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'goto_subscribtion_click']); document.location.href='sub_choice.php'; return false;" class="btn btn-info btn-med" ><strong>J'en&nbsp;veux&nbsp;une!</strong></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--/TOP-->