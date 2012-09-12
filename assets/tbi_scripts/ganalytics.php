<?php 

	// Check if current visitor is an admin
	global $_COOKIE;

	$str = "<script type=\"text/javascript\">\n";

	$str.= "			var _gaq = _gaq || [];\n";
	$str.= "			_gaq.push(['_setAccount', 'UA-31698323-1']);\n";
	$str.= "			_gaq.push(['_trackPageview']);\n";

	// Script - Check if visitor an admin
	$str .= "			_gaq.push(['_setCustomVar', 1, 'Admin', '".( (isset($_COOKIE["__utmv"]) && $_COOKIE["__utmv"] != "") ? "Yes" : "No")."', 1]);\n";
	
	$str.= "			(function() {\n";
	$str.= "				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;\n";
	$str.= "				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';\n";
	$str.= "				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);\n";
	$str.= "			})();";

	$str.= "			function gaqRecordOutboundLink(link, category, action) {\n";
	$str.= "				_gat._getTrackerByName()._trackEvent(category, action);\n";
	$str.= "				setTimeout('document.location = \"' + link.href + '\"', 100);\n";
	$str.= "			}\n";
	$str.= "		</script>\n";

	echo($str);
?>