<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function emptyInputSignup($username, $email, $password, $passwordConfirm) {
	$result;
	if (empty($username) || empty($email) || empty($password) || empty($passwordConfirm)) { $result = true; }
	else { $result = false; }
	return $result;
}

function invalidUsername($username) {
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { $result = true; }
	else { $result = false; }
	return $result;
}

function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $result = true; }
	else { $result = false; }
	return $result;
}

function passwordMatch($password, $passwordConfirm) {
	$result;
	if ($password !== $passwordConfirm) { $result = true; }
	else { $result = false; }
	return $result;
}

function usernameExists($conn, $username) {
	$sql = "SELECT * FROM users WHERE usersName = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=databaseerror");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $username);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) { return $row; }
	else { 
		$result = false; 
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $password, $passwordConfirm) {
	// NOTE: need to add minimum password length
	// NOTE: add check for existing username
	$sql = "INSERT INTO users (usersName, usersEmail, usersPassword, usersRank, vkey) VALUES (?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup?error=databaseerror");
		exit();
	}

	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	$rank = "member";
	$vkey = md5(time().$username);

	mysqli_stmt_bind_param($stmt, "sssss", $username, $email, $hashedPassword, $rank, $vkey);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	confirmEmail($username, $email, $vkey);
	header("location: ../signup?confirmation=emailsent");
	exit();
}

function sendEmail($subject, $emailAddress, $username, $content) {
	require 'sendgrid.config.php';

	$email = new \SendGrid\Mail\Mail(); 
	$email->setFrom("mail@mythika-arpg.com", "Mythika ARPG");
	$email->setSubject($subject);
	$email->addTo($emailAddress, $username);
	$email->addContent(
		"text/html", "$content"
		// "text/html", "<a href='https://mythika-arpg.com/index.php?page=pages/verify.php&vkey=$vkey'>Click here to verify your email address,</a> or copy and paste this URL: https://mythika-arpg.com/index.php?page=pages/verify.php&vkey=$vkey"
	);

	$sendgrid = new \SendGrid(SENDGRID_API_KEY);
	try {
		echo json_encode($email, JSON_PRETTY_PRINT);
		echo json_encode("<br>", JSON_PRETTY_PRINT);
		$response = $sendgrid->send($email);
		print $response->statusCode() . "\n";
		print_r($response->headers());
		print $response->body() . "\n";
	} catch (Exception $e) {
		echo 'Caught exception: '. $e->getMessage() ."\n";
		return false;
	}
}

function confirmEmail($username, $emailAddress, $vkey) {
	require 'sendgrid.config.php';

	$email = new \SendGrid\Mail\Mail(); 
	$email->setFrom("mail@mythika-arpg.com", "Mythika ARPG");
	$email->setSubject("Mythika ARPG");
	$email->addTo($emailAddress, $username);
	$email->addContent(
		"text/html", "<a href='https://mythika-arpg.com/index.php?page=pages/verify.php&vkey=$vkey'>Click here to verify your email address,</a> or copy and paste this URL: https://mythika-arpg.com/index.php?page=pages/verify.php&vkey=$vkey"
	);

	$sendgrid = new \SendGrid(SENDGRID_API_KEY);
	try {
		echo json_encode($email, JSON_PRETTY_PRINT);
		echo json_encode("<br>", JSON_PRETTY_PRINT);
		$response = $sendgrid->send($email);
		print $response->statusCode() . "\n";
		print_r($response->headers());
		print $response->body() . "\n";
	} catch (Exception $e) {
		echo 'Caught exception: '. $e->getMessage() ."\n";
	}
}

function emptyInputLogin($username, $password) {
	$result;
	if (empty($username) || empty($password)) { $result = true; }
	else { $result = false; }
	return $result;
}

function loginUser($conn, $username, $password) {
	$uidExists = usernameExists($conn, $username, $username);
	$url = '../index.php?page=pages/profile/account/login.php';

	if ($uidExists === false) { 
		header("location: {$url}&error=wronglogin");
		exit();
	}

	$pwdHashed = $uidExists["usersPassword"];
	$checkPwd = password_verify($password, $pwdHashed);

	if ($checkPwd === false) {
		header("location: {$url}&error=wronglogin");
		exit();
	}
	else if ($checkPwd === true) {
		if ($uidExists["verified"] === 1) {
			session_start();
			$_SESSION["usersId"] = $uidExists["usersId"]; 
			$_SESSION["usersName"] = $uidExists["usersName"]; 
			$_SESSION["usersRank"] = $uidExists["usersRank"]; 

			echo '<script>console.log('. json_encode($_SESSION['usersId'], JSON_HEX_TAG) .')</script>';

			header("location: ../index.php?page=pages/landing.php&confirmation=yas");
			exit();
		} else {
			header("location: ../index.php?page=pages/profile/account/login.php&error=unverified");
			exit();
		}
	}
}