<?php
	ob_start();

	$timezone = date_default_timezone_set("Asia/Kolkata");

	$con = mysqli_connect("localhost", "root", "", "int-301");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>