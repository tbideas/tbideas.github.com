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
                        <li class="active"><a href="index.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_home_click']);">Accueil</a>
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
				<h2><span class="colored">/// Nous</span> aider!</h2>
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
						<h1><span class="colored"><strong>Merci</strong></span></h1>
						<h3>de votre intérêt pour le projet Loochi !</h3>

						<p>Pour faire connaître Loochi à un maximum de monde, voici ci-dessous quelques actions que vous pouvez conduire pour nous aider!<BR>Et surtout n'hésitez pas à en parler autour de vous en transmettant l’adresse de notre site <a href="http://www.tbideas.com/fr">www.tbideas.com/fr</a> à vos amis qui peuvent être intéressés!<BR>Encore merci! Thomas & Boris</p>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:0px;">
				<!-- FB buttons -->
				<div class="span5 offset1 slider_area" align="center" style="margin-bottom:20px;">
					<h5 style="margin-top:10px;">Vous avez un compte Facebook ?</h5>
					<div style="margin-top:5px;margin-bottom:10px;">
						<p style="margin-bottom:6px;">Likez notre projet et montrez le à vos amis!</p>
						<div class="fb-like" data-href="http://www.facebook.com/tbideas" data-send="false" data-layout="button_count" data-width="160" data-show-faces="true" data-colorscheme="light" data-font="trebuchet ms" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'facebook_like_click']); return false;">
						</div>
					</div>
				</div>
				<!-- Twitter button -->
				<div class="span5 slider_area" align="center" style="margin-bottom:20px;">
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
				<!-- Vidéo player -->
				<div class="span5 offset1 slider_area" align="center" style="margin-bottom:20px;">
					<h5 style="margin-top:10px;">Visionnez les premiers pas de Loochi!</h5>
					<div style="margin-top:5px;margin-bottom:10px;">
						<p style="margin-bottom:6px;">Plus la vidéo est vue, plus elle sera mise en avant ;)</p>
						<div>
							<iframe style="margin-top:10px;margin-bottom:10px;" width="320" height="180" src="http://www.youtube.com/embed/Tyh5-pyUc04?rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="span5" align="center" style="margin-bottom:20px;">
					<!-- Sondage -->
					<div class="slider_area" align="center" style="margin-bottom:20px;">
						<h5 style="margin-top:10px;">Répondez à notre sondage !</h5>
						<div style="margin-top:5px;margin-bottom:10px;">
							<p>10 petites questions pour mieux répondre à vos attentes!</p>
							<a href="https://www.surveymonkey.com/s/loochi_fr" class="btn btn-info" target="_blank" onClick="_gaq.push(['_trackEvent', 'Survey', 'click', 'survey_access_click']); document.location.href='https://www.surveymonkey.com/s/loochi_fr'; return false;">J'accède au sondage!</a>
						</div>
					</div>
					<!-- Mailing list -->
					<div class="slider_area" align="center" style="margin-bottom:20px;">
						<h5 style="margin-top:10px;">Inscrivez-vous à la newsletter!</h5>
						<div style="margin-top:5px;margin-bottom:0px;">
							<!-- NL Subscription -->
							<form action="http://tbideas.us5.list-manage.com/subscribe/post?u=1479e36c3eaab935c86521be7&amp;id=62e69a1755" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate blue" target="_blank">
							<p>Si vous êtes intéressé par être informé des dernières évolutions de Loochi, n'hésitez pas à vous inscire à notre liste de diffusion!</p>
								<div align="center" style="margin-bottom:20px">
									<input type="email" value="Votre adresse email" size="35" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Votre adresse email" onClick="this.value='';" required style="margin-top:8px">
									<input class="btn btn-info" type="submit" value="M'inscrire" name="subscribe" id="mc-embedded-subscribe"  onClick="_gaq.push(['_trackEvent', 'Mailchimp', 'click', 'email_register_click']);">
								</div>
							</form>
						</div>
					</div>
					<!-- Contact -->
					<div class="slider_area" align="center" style="margin-bottom:20px;">
						<h5 style="margin-top:10px;">Vous souhaitez contribuer au projet ?</h5>
						<div style="margin-top:5px;margin-bottom:10px;">
							<p style="margin-bottom:1px;">Récupérez le <a href="http://www.github.com/tbideas/" onClick="_gaq.push(['_trackEvent', 'Github', 'click', 'github_access_click']);document.location.href='http://www.github.com/tbideas/';return false;">code source</a> puis <a href="mailto:contact@tbideas.com?subject=[Loochi] Open-source contribution" onClick="_gaq.push(['_trackEvent', 'Email', 'click', 'email_helpus_click']);document.location.href='mailto:contact@tbideas.com?subject=[Loochi] Open-source contribution';return false;">contactez nous!</a></p>
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