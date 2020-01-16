<?php 
	$dbhost = '127.0.0.1:3306';
	$dbuser = 'root';
	$dbpass = '';

	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

	$dbname = 'howtoincode';
	mysql_select_db($dbname);
?>