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
				<h2><span class="colored">/// Technical</span> specifications</h2>
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
							<p>Loochi leds are nothing like the leds you have seen before.<BR>We have chosen <a href="http://www.ledengin.com/products/emitters#LZC">LedEngin's LuxiGen technology</a> which provide an amazing amount of light in all sorts of colors!<BR>For the more technically enclined, Loochi is based on the LZC RGB leds. They provide 40W of LED power (remember, this is much more than a traditional 40W lamp).<BR>Those leds are rated for over 100,000 hours lifetime which is over 11 years!</p>
							<div align="center">
								<img src="./assets/tb_pics/logo_ledengin.jpg" alt="LedEngine" title="LedEngine">
							</div>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-signal icon-large"></i>&nbsp;&nbsp;Wi-fi connectivity</h3>
							<p>802.11 a/b/g<BR>WPS</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-rss icon-large"></i>&nbsp;&nbsp;Bluetooth connectivity</h3>
							<p>Low Energy support, allowing contactless interaction without pairing or configuration</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-tasks icon-large"></i>&nbsp;&nbsp;Remote-control application for iOS (iPhone/iPad) and Android devices</h3>
							<p>Access all Loochi enhanced controls easily directly from your own smartphone or tablet and discover new cool features through the application updates!</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-th-large icon-large"></i>&nbsp;&nbsp;Open APIs</h3>
							<p>Control lights over the internet / from an app with a simple HTTP API, allowing you to simply manage your Loochi through your browser for example or even trigger specific actions such as new e-mail reception or retweet ,)</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-off icon-large"></i>&nbsp;&nbsp;Hardware button</h3>
							<p>Switch quickly your Loochi on and off, it returns automatically to the last color you had defined</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-time icon-large"></i>&nbsp;&nbsp;Real-time clock</h3>
							<p>Loochi embeds a real-time clock to keep accurate track of time even when working in standalone mode</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-bolt icon-large"></i>&nbsp;&nbsp;Power Supply</h3>
							<p>Plug Loochi directly into the wall, through an elegant tissue-covered wire. There is no bulky adapter to ruin your living room or extra unpleasant wires.<BR>Loochi power supply was designed from scratch for this specific purpose. It uses power switching to efficiently convert 100-240V 50-60Hz AC power into the tension required to run the leds and the electronics efficiently. It will work as well in the US and Europe and is compliant with applicable norms (UL/CE). Of course, when you are not using it, Loochi goes into a very low consumption mode where only the radio board stays on to wait for your commands.</p>
						</div>
						<div class="span5" align="left">
							<h3><i class="icon-wrench icon-large"></i>&nbsp;&nbsp;Arduino Compatible Hardware</h3>
							<p>Loochi motherboard uses a ATmega32u4 micro-controller (just like the <a href="http://arduino.cc/en/Main/ArduinoBoardLeonardo">Arduino Leonardo</a>) and can be programmed with an ISP programmer.<BR>We have left a few extra pins available for extension you might want to add.</p>
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