<?php 

$server = "sql209.epizy.com";
$username = "epiz_28774755";
$password = "rq8mr3Lzney";
$dbname = "epiz_28774755_officialgobinda";

$conn = mysql_connect($server, $uername, $password, $dbname);
if (!$conn) {
	die("connection failed:".mysql_connect_error());
}
 ?>