<?php

if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');


/* Database config */

$db_host		= 'localhost';
$db_user		= 'vidhyart_mayank';
$db_pass		= 'ady1234';
$db_database	= 'vidhyart_choruslab'; 

/* End config */



$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');
mysql_select_db($db_database,$link) or die("cannot select DB");;

mysql_query("SET names UTF8") or die("error setting names in UTF8");

?>