<?php  

$sname = "ds";
$uname = "mangpi77";
$password = "0b6821eec0d930cd8367a0e50b6e8b46";

$db_name = "cbanaus_songbook";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}