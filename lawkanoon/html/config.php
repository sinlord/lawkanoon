<?php
//database credentials

define('DBHOST','localhost');
define('DBUSER','abhinav_law');
define('DBPASS','abhinavlaw1982');
define('DBNAME','abhinav_lawkanoon');

$db = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
//set timezone
date_default_timezone_set('Europe/London');
 
?>
