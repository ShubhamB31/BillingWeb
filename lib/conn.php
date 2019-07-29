<?php
	error_reporting(0);
	session_start();
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_NAME','demo_billing');

	$db = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("could not connect to database <br/>");
	$sql = mysql_select_db(DB_NAME,$db) or die("Database error:call admin<br/>".mysql_error());
?>