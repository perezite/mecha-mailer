<?php

$dbhost = "localhost";
$dblogin = "root";
$dbpwd = "root";
$dbname="database";
mysql_connect($dbhost, $dblogin, $dbpwd);
mysql_select_db($dbname);

?>
