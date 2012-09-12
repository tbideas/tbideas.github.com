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
                        <li><a href="index.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_home_click']);">Accueil</a>
                        </li>
                        <li><a href="usages.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_usages_click']);">Usages</a></li>
                        <li><a href="techspecs.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_techspecs_click']);">Spécifications</a></li>
                        <li><a href="http://www.tbideas.com/blog" target="_blank" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_blog_click']);"><span class="colored">Blog</span></a>
                    </ul>
                    </nav>
					</div>
                </div>
    		</div>
			<div class="sep_bg" style="margin-top:10px;margin-bottom:30px""> 
				<h2><span class="colored">/// Confirmation</span> d'inscription</h2>
			</div>
    	</div>
    </div>
    <!--/PAGE HEAD-->
    
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