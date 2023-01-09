<?php

if (isset($_POST['reset-new-submit'])) {
	$selector = $_POST['selector'];
	$validator = $_POST['validator'];
	$pwd = $_POST['pwd'];
	$pwdConfirm = $_POST['pwdConfirm'];

	if (empty($pwd) || empty($pwdConfirm)) {
		header("location: ../reset-new?selector=$selector&validator=$validator&error=empty");
		exit();
	}
	else if ($pwd != $pwdConfirm) {
		header("location: ../reset-new?selector=$selector&validator=$validator&error=mismatch");
		exit();
	}

	$currentDate = date('U');

	require 'dbh.inc.php';

	$sql = 'SELECT * FROM users WHERE pwdResetSelector = ? AND pwdResetExpires >= ?';
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo 'database error 1';
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt, 'ss', $selector, $currentDate);
		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
		if (!$row = mysqli_fetch_assoc($result)) {
			header("location: ../reset?error=expired");
			exit();
		}
		else {
			$tokenBin = hex2bin($validator);
			$tokenCheck = password_verify($tokenBin, $row['pwdResetToken']);

			if ($tokenCheck === false) {
				echo 'database error 3';
				exit();
			} 
			else if ($tokenCheck === true) {
				$sql = 'UPDATE users SET usersPassword = ? WHERE usersId = ?';
				// $sql = 'UPDATE users SET usersPassword = ? WHERE usersId = ?;';
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo 'database error 4';
					exit();
				}
				else {
					$newPwdHash = password_hash($pwd, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, 'ss', $newPwdHash, $row['usersId']);
					mysqli_stmt_execute($stmt);
				}
			}
		}
	}
}
else {
	header("location: ../reset?error=resubmit");
	exit();
}

header("location: /login");
exit();