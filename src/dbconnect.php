<?php

	define('DBHOST', 'efof.myd.infomaniak.com');
	define('DBUSER', 'efof_lpiarch2018');
	define('DBPASS', 'LpiArch_Admin2018');
	define('DBNAME', 'efof_lpiarch2018');

	$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

	if (!$conn) {
		die("Connection failed : " . $conn->connect_error);
	}

?>
