<?php  

$sname = "162.241.217.237";
$uname = "cbanaus_user";
$password = "WH8M0~5AGIEP";

$db_name = "cbanaus_songbook";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}