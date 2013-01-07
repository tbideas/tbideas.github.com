<!DOCTYPE html>
<html lang="en">
<?php include("./assets/head.php"); ?>
<body>
<?php include("./assets/top.php"); ?>

	<!--PAGE CONTENT-->
	<div class="container">
		<div class="row">
			<div class="span8 offset2">
				<div class="slider_area standard" onClick="_gaq.push(['_trackEvent', 'Content', 'click', 'slider_click']); return false;">
					<div class="theme-default ">
						<div id="slider" class="nivoSlider">
							 <img src="assets/tb_pics/slides/loochi-introducing.jpg" data-thumb="assets/tb_pics/slides/loochi-introducing.jpg" title="" alt="" />
							 <img src="assets/tb_pics/slides/loochi-phone.jpg" data-thumb="assets/tb_pics/slides/loochi-phone.jpg" title="" alt="" />
							 <img src="assets/tb_pics/slides/loochi-party.jpg" data-thumb="assets/tb_pics/slides/loochi-party.jpg" title="" alt="" />
							 <img src="assets/tb_pics/slides/loochi-wakeup.jpg" data-thumb="assets/tb_pics/slides/loochi-wakeup.jpg" title="" alt="" />
							 <img src="assets/tb_pics/slides/loochi-solder.jpg" data-thumb="assets/tb_pics/slides/loochi-solder.jpg" title="" alt="" />
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
						<h3><span class="colored">Simple & Open</span></h3>
						<p>Loochi is the first Bluetooth4 smart lamp - it is completely open-source from the plastic to the software!</p>
						<a href="features.php" class="btn btn-info btn-large">Find out more</a>
					</div>
				</div>
				<div class="span5">
					<div>
						<a name="features">
							<h3 class="sep_bg"><span class="colored">/// Product</span> highlights</h3>
						</a>
					</div>
					<div>
						<div>
							<h5><i class="icon-tint"></i> Control brightness and color of your light</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-facetime-video"></i> Animate lighting</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-star"></i> Loochi-nature: let nature's light into your home</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-picture"></i> Reproduce the color of your pictures</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-music"></i> Sync your light with your music</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-signal"></i> Wireless connection to your smartphone/tablet</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-th-large"></i> All components available under an OpenSource license</h5>
						</div>
						<div style="margin-top:6px">
							<h5><i class="icon-leaf"></i> Open-Source (CC-BY-SA) Base design by Jürgen Kienhofer</h5>
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