<!DOCTYPE html>
<html lang="en">
<?php include("./assets/head.php"); ?>
<body>

<?php include("./assets/top.php"); ?>

	<!--PAGE CONTENT-->
	<div class="container">

		<!-- Confirmation block -->
		<section>
			<div class="row" style="height:300px;">
				<div class="span6 offset3 slider_area" align="center" onLoad="_gaq.push(['_trackEvent', 'NL_sub', 'load', 'sub_confirm_load']); return false;">
					<div style="margin-top:20px;margin-bottom:20px">
						<h2><span class="colored"><strong>Merci</strong></span></h2>
						<h3>de votre intérêt pour Loochi</h3>
					</div>
					<div align="center">
						<h4 style="margin-top:0px;margin-bottom:10px;">Vous êtes désormais inscrit comme bénéficiaire de l'offre préférentiel.<BR>Maintenant, partagez ce bon plan avec vos amis ;)</h4>
						<!-- FB buttons -->
						<div class="fb-like" data-href="http://www.facebook.com/tbideas" data-send="true" data-layout="button_count" data-width="180" data-show-faces="true" data-colorscheme="light" data-font="trebuchet ms" onClick="_gaq.push(['_trackEvent', 'Social', 'click', 'facebook_likepostsub_click']); return false;"></div>
					</div>
					<div align="center" style="margin-top:30px;margin-bottom:20px">
						<a href="index.php" class="btn btn-info" onClick="_gaq.push(['_trackEvent', 'Content', 'click', 'sub_likepostsub_click']); document.location.href='index.php' return false;">Retour à l'accueil</a>
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