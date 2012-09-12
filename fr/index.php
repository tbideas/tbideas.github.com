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
			<div class="sep_bg" style="margin-top:10px;margin-bottom:30px""> 
				<h2><span class="colored">/// Illuminez</span> votre vie (connectée)</h2>
			</div>
    	</div>
    </div>
    <!--/PAGE HEAD-->
    
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
                             <a href="usages.php#uc_cosyplace"><strong>Avec Loochi, décorez votre intérieur</strong></a>
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
                             <a href="usages.php#uc_touch"><strong>... et tout cela d'un seul doigt!</strong></a>
                        </div>
                    </div>
                </div>
            </div>
		</div>

		<!-- Video player [experiment] -->
		<section>
		<div class="row" style="margin-top:0px">
			<div class="span10 offset1" align="center">
				<h3 class="sep_bg" align="left"><span class="colored">/// Découvrez</span> les premiers pas de Loochi!</h3>
				<div class="hidden-phone">
					<iframe style="margin-top:10px;margin-bottom:10px;" width="560" height="315" src="http://www.youtube.com/embed/Tyh5-pyUc04?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="visible-phone">
					<iframe style="margin-top:10px;margin-bottom:10px;" width="320" height="180" src="http://www.youtube.com/embed/Tyh5-pyUc04?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		</section>	

		<!-- New features block -->
		<section>
			<div class="row" style="margin-top:0px">
				<div class="span5 offset1">
					<div class="hero-unit">
						<h3><span class="colored">Découvrez Loochi</span>, la lampe intelligente et connectée pour la meilleure ambiance dans toutes vos occasions!</h3>
						<a href="usages.php" class="btn btn-info btn-large">En savoir plus</a>&nbsp;
						<a href="sub_choice.php" class="btn btn-info btn-large">J'en veux une !</a>
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
							<h5><i class="icon-signal"></i> Connexion Wi-fi avec votre smartphone/tablette</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-th-large"></i> Connexion à l'internet via des APIs ouvertes</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-leaf"></i> Faible consommation d'energie & open-source</h5>
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