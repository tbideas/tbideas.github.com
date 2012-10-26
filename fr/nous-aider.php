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
					<h1><span class="colored"><strong>Merci</strong></span></h1>
					<h3>de votre intérêt pour Loochi !</h3>

					<p>Pour faire connaître Loochi à un maximum de monde, voici ci-dessous quelques actions que vous pouvez conduire pour nous aider!<BR>Et surtout n'hésitez pas à en parler autour de vous en transmettant l’adresse de notre site <a href="http://www.tbideas.com/fr">www.tbideas.com/fr</a> à vos amis qui peuvent être intéressés!<br/><br/>
						Encore merci!<br/>
						Thomas & Boris</p>
				</div>
			</div>
			<div class="row">
				<!-- FB buttons -->
				<div class="span5 offset1 slider_area block" align="center">
					<h5 style="margin-top:10px;">Vous avez un compte Facebook ?</h5>
					<div style="margin-top:5px;margin-bottom:10px;">
						<p style="margin-bottom:6px;">Likez notre <a href="http://facebook.com/tbideas/">page Facebook</a> et montrez Loochi à vos amis!</p>
						<div class="fb-like" data-href="http://www.facebook.com/tbideas" data-send="false" data-layout="button_count" data-width="160" data-show-faces="true" data-colorscheme="light" data-font="trebuchet ms" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'facebook_like_click']); return false;">
						</div>
					</div>
				</div>
				<!-- Twitter button -->
				<div class="span5 slider_area block" align="center">
					<h5 style="margin-top:10px;">Vous avez un compte Twitter ?</h5>
					<div style="margin-top:5px;margin-bottom:10px;">
						<p style="margin-bottom:6px;">Suivez-nous et tweetez notre projet!</p>
						<div>
							<a href="https://twitter.com/tb_ideas" class="twitter-follow-button" data-show-count="true" data-lang="fr">Suivre @tb_ideas</a>
							<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.tbideas.com/fr" data-lang="fr" data-text="Découvrez Loochi, la #lampe intelligente connectée à l'internet et contrôlable avec votre téléphone/tablette!">Tweetez notre projet!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
					<!-- Mailing list -->
					<div class="span10 offset1 slider_area block" align="center" >
						<h5 style="margin-top:10px;">Inscrivez-vous à la newsletter!</h5>
						<div style="margin-top:5px;margin-bottom:0px;">
							<!-- NL Subscription -->
							<form action="http://tbideas.us5.list-manage.com/subscribe/post?u=1479e36c3eaab935c86521be7&amp;id=62e69a1755" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate blue" target="_blank">
							<p>Inscrivez-vous à notre liste de diffusion pour être tenu informé des dernières évolutions de Loochi !</p>
								<div align="center" style="margin-bottom:20px">
									<input type="email" value="Votre adresse email" size="35" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Votre adresse email" onClick="this.value='';" required style="margin-top:8px">
									<input class="btn btn-info" type="submit" value="M'inscrire" name="subscribe" id="mc-embedded-subscribe"	onClick="_gaq.push(['_trackEvent', 'Mailchimp', 'click', 'email_register_click']);">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Contact -->
					<div class="span10 offset1 slider_area" align="center" style="margin-bottom:20px;">
						<h5 style="margin-top:10px;">Vous souhaitez contribuer au projet ?</h5>
						<div style="margin-top:5px;margin-bottom:10px;">
							<p style="margin-bottom:1px;">Récupérez le <a href="http://www.github.com/tbideas/" onClick="_gaq.push(['_trackEvent', 'Github', 'click', 'github_access_click']);document.location.href='http://www.github.com/tbideas/';return false;">code source</a> puis <a href="mailto:contact@tbideas.com?subject=[Loochi] Open-source contribution" onClick="_gaq.push(['_trackEvent', 'Email', 'click', 'email_helpus_click']);document.location.href='mailto:contact@tbideas.com?subject=[Loochi] Open-source contribution';return false;">contactez nous!</a></p>
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