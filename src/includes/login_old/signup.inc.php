<?php

if (isset($_POST["submit"])) {
	
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$passwordConfirm = $_POST["passwordConfirm"];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

	// NOTE: add more error handlers for verifying a good password and sanitize inputs
	if (emptyInputSignup($username, $email, $password, $passwordConfirm) !== false) {
		header("location: ../signup?error=emptyinput");
		exit();
	}
	if (invalidUsername($username) !== false) {
		header("location: ../signup?error=invalidusername");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: ../signup?error=invalidemail");
		exit();
	}
	if (passwordMatch($password, $passwordConfirm) !== false) {
		header("location: ../signup?error=passwordmismatch");
		exit();
	}
	if (usernameExists($conn, $username) !== false) {
		header("location: ../signup?error=usernametaken");
		exit();
	}

	createUser($conn, $username, $email, $password, $passwordConfirm);
}
else {
	header("location: ../signup");
	exit();
}