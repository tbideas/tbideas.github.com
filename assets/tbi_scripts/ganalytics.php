<?php

$ga_account = "UA-31698323-1";

?>

<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', '<?php echo $ga_account ?>']);
_gaq.push(['_trackPageLoadTime']);

<?php

	// Check if current visitor is an admin
	global $_COOKIE;

	// Do some special tricks for 404 so that
	// we can spot them in Google Analytics
	// Thanks:
	// http://www.wasabi-analytics.com/trackers/google_analytics_404.js
	if (isset($GLOBALS['http_response_code']) == 404) { ?>
// Track 404
var myloc = document.location.pathname;
var myref = document.referrer;

if (myloc.length == 0) {
	myloc = "nolocation";
}
if (myref.length == 0) {
	myref = "noreferrer";
}

_gaq.push(['_trackPageview', "/404/" + myloc.replace(/\//g, "_") + "/" + myref.replace(/https*:\/\//i, "").replace(/\//g, "_")]);<?php
	}
	else
	{
		?>_gaq.push(['_trackPageview']);<?php
	}

	if (isset($_COOKIE["__utmv"]) && $_COOKIE["__utmv"] != "") {
		echo "_gaq.push(['_setCustomVar', 1, 'Admin', 'Yes', 1];\n";
	}
	else {
		echo "_gaq.push(['_setCustomVar', 1, 'Admin', 'No', 1];\n";
	}
	echo "\n";
	
	// Disable tracking in development
	global $_SERVER;
	if ($_SERVER['SERVER_ADDR'] == "127.0.0.1"
			|| $_SERVER['SERVER_ADDR'] == "::1" ) {
		echo "window['ga-disable-$ga_account'] = true;\n";
	}
?>

(function() {
	var ga = document.createElement('script');
	ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol
						? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);
})();

function gaqRecordOutboundLink(link, category, action) {
	_gat._getTrackerByName()._trackEvent(category, action);
	setTimeout('document.location = \"' + link.href + '\"', 100);
}
</script>
