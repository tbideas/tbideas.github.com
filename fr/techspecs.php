<!DOCTYPE html>
<html lang="en">

    <head>
	<?php include("./assets/head.php"); ?>
    </head>

	<body>
	<?php include("./assets/top.php"); ?>
    <!--/TOP-->
    
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
                        <li><a href="index.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_home_click']);">Home</a>
                        </li>
                        <li><a href="usages.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_usages_click']);">Usages</a></li>
                        <li class="active"><a href="techspecs.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_techspecs_click']);">Tech specs</a></li>
                        <li><a href="http://www.tbideas.com/blog" target="_blank" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_blog_click']);"><span class="colored">Blog</span></a>
                    </ul>
                    </nav>
					</div>
                </div>
    		</div>
			<div class="sep_bg" style="margin-top:10px;margin-bottom:0px""> 
				<h2><span class="colored">/// Specifications</span> techniques</h2>
			</div>
    	</div>
    </div>
    <!--/PAGE HEAD-->
    
	<!-- PAGE CONTENT -->

		<!-- Tech specs v2 -->
		<section>
			<div class="container">
				<div class="span10 offset1">
					<div class="row" align="center">
						<div class="span5" align="left">
							<h3><i class="icon-eye-open icon-large"></i>&nbsp;&nbsp;LEDs</h3>
							<p>Les ampoules LEDs d'Loochi n'ont rien à voir avec les LEDs que vous avez déjà vu.<BR>Nous avons choisi <a href="http://www.ledengin.com/products/emitters#LZC">la technologie LuxiGen de LedEngin</a> qui fournit une incroyable quantité de lumière pour l'esnemble des couleurs!<BR>Pour les experts techniques, il s'agit de leds RGB LCS. Elles fournissenet 40W de puissance (pour mémo, c'est plus qu'une ampoule traditionelle de 40W).<BR>La durée de vie de ces ampoules LEDs est estimée à plus de 100.000 heures (soit presque 12 ans en continue)!</p>
							<div align="center">
								<img src="../assets/tb_pics/logo_ledengin.jpg" alt="LedEngine" title="LedEngine">
							</div>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-signal icon-large"></i>&nbsp;&nbsp;Connexion Wi-fi</h3>
							<p>802.11 a/b/g<BR>Cryptages: WEP, WPA, WPS</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-rss icon-large"></i>&nbsp;&nbsp;Connexion Bluetooth</h3>
							<p>Support norme basse consommation, permettant une configuration par simple contact entre le mobile et la lampe. interaction sans contact</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-tasks icon-large"></i>&nbsp;&nbsp;Application de commande à distance</h3>
							<p>Accèdez à tous les contrôles avancés d'Loochi directement depuis l'interface de votre smarthpone ou tablette iOS (iPhone/iPad) et Androïd et découvrez des nouvelles fonctionnalités au fil des mises à jours de l'application!</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-th-large icon-large"></i>&nbsp;&nbsp;APIs ouvertes</h3>
							<p>Contrôler vos lampes à travers Internet par exemple depuis une application ou votre browser mobile ou déclenchez par exemple ou encore déclencher des actions spécifiques comme la réception d'un email ou un retweet ,)</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-off icon-large"></i>&nbsp;&nbsp;Bouton de contrôle</h3>
							<p>Allumez et étaignez rapidement votre Loochi, qui s'éclairera automatiquement avec la dernière oculeur que vous avez utilisée.</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-time icon-large"></i>&nbsp;&nbsp;Horloge interne</h3>
							<p>Loochi embarque une horloge interne permettant de conserver embeds a real-time clock to keep accurate track of time even when working in standalone mode</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-bolt icon-large"></i>&nbsp;&nbsp;Alimentation</h3>
							<p>Plug Loochi directly into the wall, through an elegantz. There is no bulky adapter to ruin your living room or extra unpleasant wires.<BR>Loochi power supply was designed from scratch for this specific purpose. It uses power switching to efficiently convert 100-240V 50-60Hz AC power into the tension required to run the leds and the electronics efficiently. It will work as well in the US and Europe and is compliant with applicable norms (UL/CE). Of course, when you are not using it, Loochi goes into a very low consumption mode where only the radio board stays on to wait for your commands.</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-wrench icon-large"></i>&nbsp;&nbsp;Matériel compatible Arduino</h3>
							<p>La carte mère de Loochi utilise un micro-contrôleur ATmega32u4 (tout comme le modèle <a href="http://arduino.cc/en/Main/ArduinoBoardLeonardo">Arduino Leonardo</a>) et peut être programmé avec un programmateur ISP.<BR>Nous avons laisser quelques connecteurs libres afin de vous laisser la place d'intégrer les extensions que vous souhaitez nécessaires ensuite !</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-copy icon-large"></i>&nbsp;&nbsp;OpenSource hardware</h3>
							<p>Loochi hardware is completely open-source, including the most original parts: the 100-240V power-supply and the high-power current-switching led drivers.<BR>We are very happy to be part of a broad movement that brings open source to the world of hardware and can not wait to see what new objects will be built on top of our designs!</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-heart icon-large"></i>&nbsp;&nbsp;Open design</h3>
							<p>Loochi design is flexible - Even if we provide versions specifically designed for light high diffusiuon, you may also buy your own enclosure from 3D printing sites</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-group icon-large"></i>&nbsp;&nbsp;Community-based evolution</h3>
							<p>Loochi is compatible with <a href="http://en.wikipedia.org/wiki/DMX512">DMX-512 Controller</a> in order to easily include it to your great parties ;)</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Back to top -->
		<div class="span10 offset1" align="right" style="margin-bottom:20px">
			<div><a href="#top"><h5>Back to top <icon class="icon-circle-arrow-up"></h5></a></div>
		</div>

	<!--PAGE CONTENT-->

	<!--FOOTER-->
	<?php include("./assets/footer.php"); ?>

	</body>
</html>