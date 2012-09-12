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
                        <li><a href="index.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_home_click']);">Home</a>
                        </li>
                        <li><a href="usages.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_usages_click']);">Usages</a></li>
                        <li><a href="techspecs.php" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_techspecs_click']);">Tech specs</a></li>
                        <li><a href="http://www.tbideas.com/blog" target="_blank" onClick="_gaq.push(['_trackEvent', 'Menu', 'click', 'menu_blog_click']);"><span class="colored">Blog</span></a>
                    </ul>
                    </nav>
					</div>
                </div>
    		</div>
			<div class="sep_bg" style="margin-top:10px;"> 
				<h2><span class="colored">/// Get</span> one today!</h2>
			</div>
    	</div>
    </div>
    <!--/PAGE HEAD-->
    
    <!--PAGE CONTENT-->
    <div class="container" style="margin-bottom:50px;">

		<!-- Choice blck -->
		<section>
			<div class="row" style="margin-bottom:15px;" align="center">
				<h1><span class="colored"><strong>What would you like to do ?</strong></span></h1>
				<div class="hidden-phone">
					<img src="assets/tb_pics/headers/header_choice_bottom.jpg"/>
				</div>
			</div>
			<div class="row">
				<div class="span5 offset1 slider_area">
				<a name="subscribe"></a>
					<div style="margin: 20px 20px 20px 20px;">

						<h2 style="height:90px" align="center"><span class="colored"><strong>Purchase<BR>my Loochi !</strong></span></h2>
						
						<!-- NL Subscription -->
						<form action="http://tbideas.us5.list-manage.com/subscribe/post?u=1479e36c3eaab935c86521be7&amp;id=62e69a1755" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate blue" target="_blank">
						<B><span style="font-family: 'Pontano Sans', Arial, sans-serif !important; color:#000; text-transform:uppercase; font-size:12px;">Loochi</span></B> is currently under development, and will be commercialized soon on Kickstarter.
						<h5>Please sign-up to be notified of early bird special price!</h5>
						<div align="center" style="margin-bottom:30px">
							<input type="email" value="Your email address" size="35" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" onClick="this.value='';" required style="margin-top:8px">
							<input class="btn btn-info" type="submit" value="Get notified!" name="subscribe" id="mc-embedded-subscribe"  onClick="_gaq.push(['_trackEvent', 'Mailchimp', 'click', 'email_register_click']);">
						</div>
						</form>
						<p><B>What is Kickstarter ?</B><BR><a href="http://www.kickstarter.com" onClick="_gaq.push(['_trackEvent', 'Out', 'click', 'gotout_kickstarter_click']); document.location.href='http://www.kickstarter.com'; return false;"><B>Kickstarter</B></a> is the world's largest funding platform for creative projects. Every project is independently crafted, put to all-or-nothing funding,
						and supported by friends, fans, and the public in return for rewards.<BR>
						This kind of platform allow us to gather enough backers to allow Loochi to go further than prototype stage!<BR>In short: people like you can commit to purchase in advance Loochi, allowing us to launch the production only if we reach the minimum amount of money required we have publicly pre-defined. Until the product is not fully-funded, no money changes hands!<BR>
						</p>
					</div>
				</div>
				<div class="span5 slider_area">
					<div style="margin: 20px 20px 20px 20px;">
						<h2 style="height:90px" align="center"><span class="colored"><strong>Build<BR>my Loochi !</strong></span></h2>
						<h5>Loochi is completely open-source!</h5><p>Download Loochi's hardware, firmware and applications from our <a href="http://www.github.com/tbideas/">Github repository</a> and find <a href="http://www.tbideas.com/blog/category/build-your-own/">instructions on our blog</a> on how to build it!</p>
						<div align="center" style="margin-top:10px;margin-bottom:20px">
							<a href="http://www.tbideas.com/blog/category/build-your-own/" class="btn btn-info" onClick="_gaq.push(['_trackEvent', 'Content', 'click', 'sub_makeyourown_click']); document.location.href='http://www.tbideas.com/blog/category/build-your-own/' return false;">Build your own!</a>
						</div>
						<div align="center" style="margin-top:40px">
							<a href="http://creativecommons.org"><img class="bordered" src="assets/tb_pics/logo_cc_by_sa_150.jpg" alt="Creative Common license (CC-BY-SA)"></a>
						</div>
						<div align="center" style="margin-top:20px">
							<a href="http://en.wikipedia.org/wiki/Open-source_hardware"><img class="bordered" src="assets/tb_pics/logo_oh_150.png" alt="Open Hardware"></a>
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