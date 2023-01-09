<?php
	// echo "<script>console.log(". json_encode($_SESSION["usersRank"], JSON_HEX_TAG) .")</script>";
	if ($_SESSION["usersRank"] !== "admin") {
		header("location: index.php?error=rankdisparity");
		exit();
	}