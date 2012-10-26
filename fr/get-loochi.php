<!DOCTYPE html>
<html lang="en">
<?php include("./assets/head.php"); ?>
<body>

<?php include("./assets/top.php"); ?>

	<!--PAGE CONTENT-->
	<div class="container" style="margin-bottom:50px;">

		<!-- Choice blck -->
		<section>
			<div class="row" style="margin-bottom:15px;" align="center">
				<h1><span class="colored"><strong>Que souhaitez-vous faire ?</strong></span></h1>
				<div class="hidden-phone">
					<img src="../assets/tb_pics/headers/header_choice_bottom.jpg"/>
				</div>
			</div>
			<div class="row">
				<div class="span5 offset1 slider_area">
				<a name="subscribe"></a>
					<div style="margin: 20px 20px 20px 20px;">

						<h2 style="height:90px" align="center"><span class="colored"><strong>Acheter<BR> Loochi !</strong></span></h2>

						<!-- NL Subscription -->
						<form action="http://tbideas.us5.list-manage.com/subscribe/post?u=1479e36c3eaab935c86521be7&amp;id=62e69a1755" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate blue" target="_blank">
						<B><span style="font-family: 'Pontano Sans', Arial, sans-serif !important; color:#000; text-transform:uppercase; font-size:12px;">Loochi</span></B> est en cours de développement, et sera commercialisé bientôt via Kickstarter.
						<h5>Merci de vous inscrire pour être informé du prix spécial réservé aux premiers acheteurs!</h5>
						<div align="center" style="margin-bottom:30px">
							<input type="email" value="Votre adresse e-mail" size="35" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Votre adresse e-mail" onClick="this.value='';" required style="margin-top:8px">
							<input class="btn btn-info" type="submit" value="M'inscrire" name="subscribe" id="mc-embedded-subscribe"	onClick="_gaq.push(['_trackEvent', 'Mailchimp', 'click', 'email_register_click']);">
						</div>
						</form>
						<p><B>Qu'est-ce que Kickstarter ?</B><BR><a href="http://www.kickstarter.com" onClick="_gaq.push(['_trackEvent', 'Out', 'click', 'gotout_kickstarter_click']); document.location.href='http://www.kickstarter.com'; return false;"><B>Kickstarter</B></a> est la plus grande plateforme collaborative pour les projets créatifs. Chaque projet est considéré de façon indépendante et proposé au financement d'amis, de fans et du public en échange du produit et de récompenses.<br/>
Ce type de plateforme nous permet de rassembler suffisament d'acheteurs protentiels et dépasser le stade du prototypage.<br/>En bref : des gens comme vous peuvent s'engager d'avance à acheter Loochi, nous permettant de lancer sa fabrication en série uniquement si nous atteignons le seuil d'une petite fabrication en série (environ 1000 unités). Si ce seuil n'a pas été atteint en l'espace de 30 jours, votre carte bleue n'est jamais prélevée.</p>
					</div>
				</div>
				<div class="span5 slider_area">
					<div style="margin: 20px 20px 20px 20px;">
						<h2 style="height:90px" align="center"><span class="colored"><strong>Fabriquer<BR> Loochi !</strong></span></h2>
						<h5>Loochi est complètement open-source!</h5><p>Téléchargez les schémas techniques et le code source du logiciel embarqué et des applications mobiles depuis notre <a href="http://www.github.com/tbideas/">répertoire Github</a> et suivez les <a href="http://www.tbideas.com/blog/category/build-your-own/">instructions présentées sur sur notre blog</a> pour la construire!</p>
						<div align="center" style="margin-top:10px;margin-bottom:20px">
							<a href="http://www.tbideas.com/blog/category/build-your-own/" class="btn btn-info" onClick="_gaq.push(['_trackEvent', 'Content', 'click', 'sub_makeyourown_click']); document.location.href='http://www.tbideas.com/blog/category/build-your-own/' return false;">Je me lance!</a>
						</div>
						<div align="center" style="margin-top:40px">
							<a href="http://creativecommons.org"><img class="bordered" src="../assets/tb_pics/logo_cc_by_sa_150.jpg" alt="Creative Common license (CC-BY-SA)"></a>
						</div>
						<div align="center" style="margin-top:20px">
							<a href="http://en.wikipedia.org/wiki/Open-source_hardware"><img class="bordered" src="../assets/tb_pics/logo_oh_150.png" alt="Open Hardware"></a>
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