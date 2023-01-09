<?php

if (isset($_POST["submit"])) {
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	$username = $_POST["username"];

	$uidExists = usernameExists($conn, $username);

	// check if username is in database
	if ($uidExists === false) { 
		header("location: ../reset?error=wronglogin");
		exit();
	}

	// check if account is verified
	if ($uidExists["verified"] !== 1) {
		header("location: ../reset?error=unverified");
		exit();
	}

	// create reset information
	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);
	// $resetkey = md5(time().$username);

	$url = 'https://mythika-arpg.com/reset-new?selector=' . $selector . '&validator=' . bin2hex($token);

	$expires = date('U') + 1800;

	// set database values
	$sql = 'UPDATE users SET pwdResetSelector = ?, pwdResetToken = ?, pwdResetExpires = ? WHERE usersName = ?';
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo 'there was a database error';
		exit();
	}
	else {
		$hashedToken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, 'ssss', $selector, $hashedToken, $expires, $username);
		mysqli_stmt_execute($stmt);
	}

	mysqli_stmt_close($stmt);

	// send email
	if (sendEmail('Mythika ARPG - Password Reset', $uidExists["usersEmail"], $username, "<a href='$url'>Click here to reset your password,</a> or copy and paste this URL: $url<br><br>If you did not request this password reset email someone else might be trying to access your account.") !== false) {
		header("location: ../reset?confirmation=emailsent");
		exit();
	} 
	else {
		header("location: ../reset?error=fail");
		exit();
	}
}
else {
	header("location: ../reset?error=fail");
	exit();
}

