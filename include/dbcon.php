<?php
$host = "localhost";
$username = "nounsolu_marvel" ;
$password = "2%emVjZ^0Y98Ps";
$db = "nounsolu_noun";

$con = mysqli_connect($host, $username, $password, $db);
if (!$con) {
	echo "there is a problem with the sql connection";
}
