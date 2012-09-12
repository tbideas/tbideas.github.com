<?php 

	// Check if current visitor is an admin
	global $_COOKIE;

	$str.= "<script type=\"text/javascript\">";

	$str.= "	var _gaq = _gaq || [];";
	$str.= "	_gaq.push(['_setAccount', 'UA-31698323-1']);";
	$str.= "	_gaq.push(['_trackPageview']);";

	// Script - Check if visitor an admin
	if ($_COOKIE["__utmv"] != "") {
		$str .= "	_gaq.push(['_setCustomVar', 1, 'Admin', 'Yes', 1]);";
	}

	//$str.= "include("./assets/tbi_scripts/admin_check.php");?>"
	$str.= "	(function() {";
	$str.= "		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;";
	$str.= "		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';";
	$str.= "		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);";
	$str.= "	})();";

	$str.= "	function gaqRecordOutboundLink(link, category, action) {";
	$str.= "		_gat._getTrackerByName()._trackEvent(category, action);";
	$str.= "		setTimeout('document.location = "' + link.href + '"', 100);";
	$str.= "	}";
	$str.= "</script>";

	echo($str);
?>