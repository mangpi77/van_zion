<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("America/New_York");

	$con = mysqli_connect("162.241.217.237", "cbanaus_user", "WH8M0~5AGIEP", "cbanaus_songbook");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>