<?php 

	// Display last blog posts

	// Connection to sdb
	define('DB_NAME', 'tbideasmod1');

	/** MySQL database username */
	define('DB_USER', 'tbideasmod1');

	/** MySQL database password */
	define('DB_PASSWORD', 'Xz2Ug6vN');

	/** MySQL hostname */
	define('DB_HOST', 'mysql51-66.bdb.ovh.net');

	echo("HOST = ".DB_HOST);
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	mysql_select_db(DB_NAME);

	$res = mysql_query("SELECT * from mytable");
	$str = "";
	while ( $obj = mysql_fetch_object( $res ) ) {
			$str .= "<div class=\"blog_feed\"><a href=\"#\">Consectetuer Adipiscing</a>";
			$str .= "<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>";
			$str .= "</div>";
	}
	echo($str);

?>