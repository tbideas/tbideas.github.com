<!DOCTYPE html>
<html lang="en">
<?php include("./assets/head.php"); ?>
<body>

<?php include("./assets/top.php"); ?>

	<!--PAGE CONTENT-->
	<div class="container">
		<div class="row">
			<div class="span10 offset1">
				<div class="slider_area standard" onClick="_gaq.push(['_trackEvent', 'Content', 'click', 'slider_click']); return false;">
					<div class="theme-default ">
						<div id="slider" class="nivoSlider" style="max-height:320px;">
							 <img src="../assets/tb_pics/slides/slide_cosyplace.jpg" data-thumb="../assets/tb_pics/slides/slide_cosyplace.jpg" title="#htmlcaption" alt="" />
							 <img src="../assets/tb_pics/slides/slide_ambiance.jpg" data-thumb="../assets/tb_pics/slides/slide_ambiance.jpg" title="#htmlcaption1" alt="" />
							 <img src="../assets/tb_pics/slides/slide_party.jpg" data-thumb="../assets/tb_pics/slides/slide_party.jpg" title="#htmlcaption2" alt="" />
							 <img src="../assets/tb_pics/slides/slide_wakeup.jpg" data-thumb="../assets/tb_pics/slides/slide_wakeup.jpg" title="#htmlcaption3" alt="" />
							 <img src="../assets/tb_pics/slides/slide_nature.jpg" data-thumb="../assets/tb_pics/slides/slide_nature.jpg" title="#htmlcaption4" alt="" />
							<img src="../assets/tb_pics/slides/slide_touch.jpg" data-thumb="../assets/tb_pics/slides/slide_touch.jpg" title="#htmlcaption5" alt="" />
						</div>
						<div id="htmlcaption" class="nivo-html-caption">
							 <a href="usages.php#uc_cosyplace"><strong>Décorez votre intérieur</strong></a>
						</div>
						<div id="htmlcaption1" class="nivo-html-caption">
						   <a href="usages.php#uc_ambiance"><strong>Choisissez la meilleure ambiance</a></strong>
						</div>
						<div id="htmlcaption2" class="nivo-html-caption">
						   <a href="usages.php#uc_party"><strong>Illuminez vos fêtes!</a></strong>
						</div>
						<div id="htmlcaption3" class="nivo-html-caption">
							<a href="usages.php#uc_wakeup"><strong>Réveillez-vous en douceur</strong></a>
						</div>
						<div id="htmlcaption4" class="nivo-html-caption">
							<a href="usages.php#uc_relaxnature"><strong>Détendez-vous!</strong></a>
						</div>
						<div id="htmlcaption5" class="nivo-html-caption">
							 <a href="usages.php#uc_touch"><strong>... et tout cela du bout des doigts!</strong></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- New features block -->
		<section>
			<div class="row" style="margin-top:0px">
				<div class="span5 offset1">
					<div class="hero-unit">
						<h3><span class="colored">Découvrez Loochi</span>, la lampe intelligente et connectée pour la meilleure ambiance dans toutes vos occasions!</h3>
						<a href="usages.php" class="btn btn-info btn-large">En savoir plus</a>&nbsp;
						<a href="get-loochi.php" class="btn btn-info btn-large">J'en veux une !</a>
					</div>
				</div>
				<div class="span5">
					<div>
						<a name="features">
							<h3 class="sep_bg"><span class="colored">/// Principales</span> fonctionnalités</h3>
						</a>
					</div>
					<div>
						<div>
							<h5><i class="icon-tint"></i> Contrôle de la luminosité et la couleur de la  lumière</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-facetime-video"></i> Séquences de couleur animées</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-star"></i> Loochi-nature: les lumières naturelles chez vous</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-picture"></i> Repoduisez les couleurs de vos photos</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-music"></i> Eclairage synchronisé avec votre musique</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-signal"></i> Connexion sans-fil avec votre smartphone/tablette</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-th-large"></i> Complètement open-source</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-leaf"></i> Faible consommation d'energie</h5>
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