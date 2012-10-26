<!DOCTYPE html>
<html lang="en">
<?php include("./assets/head.php"); ?>
<body>
<?php include("./assets/top.php"); ?>

	<!--PAGE CONTENT-->
	<div class="container">

		<!-- Confirmation block -->
		<section>
			<div class="row">
				<div class="span10 offset1 block">
					<h1><span class="colored"><strong>Thank you</strong></span></h1>
					<h3>for your interest in Loochi!</h3>

					<p>Spread the Loochi-love! Here are a few actions you can take to to help us!<br/>
						And please do share our website <a href="http://www.tbideas.com">www.tbideas.com</a> with your friends.<br/><br/>
						Thanks again!<br/>Thomas & Boris</p>
				</div>
			</div>
			
			<div class="row">
				<!-- FB buttons -->
				<div name="help_fb_box" class="span5 offset1 slider_area block" align="center">
					<h5 style="margin-top:10px;">Do you have a Facebook account?</h5>
					<div style="margin-top:5px;margin-bottom:10px;">
						<p style="margin-bottom:6px;">Like our <a href="http://facebook.com/tbideas/">facebook page</a> and show Loochi to your friends!</p>
						<div class="fb-like" data-href="http://www.facebook.com/tbideas" data-send="false" data-layout="button_count" data-width="160" data-show-faces="true" data-colorscheme="light" data-font="trebuchet ms" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'facebook_like_click']); return false;">
						</div>
					</div>
				</div>
				<!-- Twitter button -->
				<div class="span5 slider_area block" align="center">
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
				<div class="span10 offset1 block">
					<!-- Mailing list -->
					<div class="slider_area" align="center">
						<h5 style="margin-top:10px;">Subscribe to our newsletter !</h5>
						<div style="margin-top:5px;margin-bottom:0px;">
							<!-- NL Subscription -->
							<form action="http://tbideas.us5.list-manage.com/subscribe/post?u=1479e36c3eaab935c86521be7&amp;id=62e69a1755" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate blue" target="_blank">
							<p>To stay up to date with Loochi's progress, please subscribe to our newsletter!</p>
								<div align="center" style="margin-bottom:20px">
									<input type="email" value="Your email address" size="35" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" onClick="this.value='';" required style="margin-top:8px">
									<input class="btn btn-info" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"	 onClick="_gaq.push(['_trackEvent', 'Mailchimp', 'click', 'email_register_click']);">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span10 offset1 block">
					<!-- Contact -->
					<div class="slider_area" align="center">
						<h5 style="margin-top:10px;">Would you like to contribute to the project?</h5>
						<div style="margin-top:5px;margin-bottom:10px;">
							<p style="margin-bottom:1px;">Get the <a href="http://www.github.com/tbideas/" onClick="_gaq.push(['_trackEvent', 'Github', 'click', 'github_access_click']);document.location.href='http://www.github.com/tbideas/';return false;">source code</a> and <a href="mailto:contact@tbideas.com?subject=[Loochi] Open-source contribution" onClick="_gaq.push(['_trackEvent', 'Email', 'click', 'email_helpus_click']);document.location.href='mailto:contact@tbideas.com?subject=[Loochi] Open-source contribution';return false;">contact us!</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--PAGE CONTENT-->

	<!--FOOTER-->
	<?php include("./assets/footer.php"); ?>

</body>
</html>