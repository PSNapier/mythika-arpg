<?php

$request_headers = apache_request_headers();
$serverName = $request_headers['Host'];
$dbUsername = "client";
$dbPassword = "awz44js34g3y4vtmk7awcksv";
$dbName = "mythika";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	echo "<script>console.log(". json_encode($serverName, JSON_HEX_TAG) .")</script>";
	die("Connection failed: " . mysqli_connect_error());
}
