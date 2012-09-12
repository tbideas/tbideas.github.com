<!DOCTYPE html>
<html lang="en">
    <head>
	<?php include("./assets/head.php"); ?>
    </head>

	<body>
	<?php include("./assets/top.php"); ?>
    
    <!--PAGE HEAD-->
    <div class="page_head">
    	<div class="container">
        	<div class="row" style="margin-top:50px">
				<div class="span6">				
					<div style="padding:5px;">
						<h1><strong class="colored" style="font-size:44px;"><a href="index.php" alt="Loochi">Loochi</a></strong></h1>
					</div>				
				</div>
                <div class="span6">
					<div style="margin-bottom:30px;">
                	<nav>
                	<ul id="menu">
                        <li class="active"><a href="index.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_home_click']);">Home</a>
                        </li>
                        <li><a href="usages.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_usages_click']);">Usages</a></li>
                        <li><a href="techspecs.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_techspecs_click']);">Specifications</a></li>
                        <li><a href="http://www.tbideas.com/blog" target="_blank" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_blog_click']);"><span class="colored">Blog</span></a>
                    </ul>
                    </nav>
					</div>
                </div>
    		</div>
			<div class="sep_bg" style="margin-top:10px"> 
				<h2><span class="colored">/// Help</span> us!</h2>
			</div>
    	</div>
    </div>
    <!--/PAGE HEAD-->
    
    <!--PAGE CONTENT-->
    <div class="container">

		<!-- Confirmation block -->
		<section>
			<div class="row">
				<div class="span10 offset1" align="center">
					<div style="margin-bottom:20px">
						<h1><span class="colored"><strong>Thank you</strong></span></h1>
						<h3>for your interest in the Loochi project !</h3>

						<p>To let your friends to discover also Loochi, here are a few actions you can conduct in order to help us !<BR>Do not hesitate to talk about it to your relatives by sharing our website url <a href="http://www.tbideas.com">www.tbideas.com</a> with to your friends and other people who could be interested !<BR>Thanks again ! Thomas & Boris</p>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:0px;">
				<!-- FB buttons -->
				<div name="help_fb_box" class="span5 offset1 slider_area" align="center" style="margin-bottom:20px;">
					<h5 style="margin-top:10px;">You have a Facebook account ?</h5>
					<div style="margin-top:5px;margin-bottom:10px;">
						<p style="margin-bottom:6px;">Like our project and show it to your friends !</p>
						<div class="fb-like" data-href="http://www.facebook.com/tbideas" data-send="false" data-layout="button_count" data-width="160" data-show-faces="true" data-colorscheme="light" data-font="trebuchet ms" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'facebook_like_click']); return false;">
						</div>
					</div>
				</div>
				<!-- Twitter button -->
				<div class="span5 slider_area" align="center" style="margin-bottom:20px;">
					<h5 style="margin-top:10px;">You have a Twitter account ?</h5>
					<div style="margin-top:5px;margin-bottom:10px;">
						<p style="margin-bottom:6px;">Follow-us and tweet about our project !</p>
						<div>
							<a href="https://twitter.com/tb_ideas" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @tb_ideas</a>
							<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.tbideas.com/fr" data-lang="en" data-text="Discover Loochi, the smart connected #lamp connected to the Internet and controlable from your smartphone/tablet !">Tweet about our project!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Vidéo player -->
				<div class="span5 offset1 slider_area" align="center" style="margin-bottom:20px;">
					<h5 style="margin-top:10px;">Discover Loochi's first steps !</h5>
					<div style="margin-top:5px;margin-bottom:10px;">
						<p style="margin-bottom:6px;">The more this video is watched, the more it will be promoted and visible ;)</p>
						<div>
							<iframe style="margin-top:10px;margin-bottom:10px;" width="320" height="180" src="http://www.youtube.com/embed/Tyh5-pyUc04?rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="span5" align="center" style="margin-bottom:20px;">
					<!-- Survey -->
					<div class="slider_area" align="center" style="margin-bottom:20px;">
						<h5 style="margin-top:10px;">Answer to Loochi's survey !</h5>
						<div style="margin-top:5px;margin-bottom:10px;">
							<p>Only 10 questions to better answer your expectations !</p>
							<a href="https://www.surveymonkey.com/s/loochi_en" class="btn btn-info" target="_blank" onClick="_gaq.push(['_trackEvent', 'Survey', 'click', 'survey_access_click']); document.location.href='https://www.surveymonkey.com/s/loochi_en'; return false;">Access to the survey!</a>
						</div>
					</div>
					<!-- Mailing list -->
					<div class="slider_area" align="center" style="margin-bottom:20px;">
						<h5 style="margin-top:10px;">Subscribe to our newsletter !</h5>
						<div style="margin-top:5px;margin-bottom:0px;">
							<!-- NL Subscription -->
							<form action="http://tbideas.us5.list-manage.com/subscribe/post?u=1479e36c3eaab935c86521be7&amp;id=62e69a1755" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate blue" target="_blank">
							<p>If you are interested to be informed of Loochi's latest evolutions, do not hesitate to subscribe to our newsletter!</p>
								<div align="center" style="margin-bottom:20px">
									<input type="email" value="Your email address" size="35" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" onClick="this.value='';" required style="margin-top:8px">
									<input class="btn btn-info" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"  onClick="_gaq.push(['_trackEvent', 'Mailchimp', 'click', 'email_register_click']);">
								</div>
							</form>
						</div>
					</div>
					<!-- Contact -->
					<div class="slider_area" align="center" style="margin-bottom:20px;">
						<h5 style="margin-top:10px;">You would like to contribute to the project ?</h5>
						<div style="margin-top:5px;margin-bottom:10px;">
							<p style="margin-bottom:1px;">Get the <a href="http://www.github.com/tbideas/" onClick="_gaq.push(['_trackEvent', 'Github', 'click', 'github_access_click']);document.location.href='http://www.github.com/tbideas/';return false;">source code</a> then <a href="mailto:contact@tbideas.com?subject=[Loochi] Open-source contribution" onClick="_gaq.push(['_trackEvent', 'Email', 'click', 'email_helpus_click']);document.location.href='mailto:contact@tbideas.com?subject=[Loochi] Open-source contribution';return false;">contact us!</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">

			</div>
		</section>
	</div>
	<!--PAGE CONTENT-->

	<!--FOOTER-->
	<?php include("./assets/footer.php"); ?>

	</body>
</html>