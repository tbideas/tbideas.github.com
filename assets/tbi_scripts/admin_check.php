<?php 

	// Check if current visitor is an admin.

	global $_COOKIE;

	if ($_COOKIE["__utmv"] != "") {
		$str = "_gaq.push(['_setCustomVar', 1, 'Admin', 'Yes', 1]);";
		echo( $str );
		// echo("[Admin detected]");
	}
?>