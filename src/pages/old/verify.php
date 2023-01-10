<?php
	include_once 'header.php';

	if (isset($_GET['vkey'])) {
		// process verification
		require_once 'includes/dbh.inc.php';
	
		$vkey = $_GET['vkey'];
	
		$sql = "SELECT verified, vkey FROM users WHERE vkey = ?";
		// $sql = "SELECT verified, vkey FROM users WHERE verified = 0 AND vkey = ? LIMIT 1;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: verify.php?error=databaseerror1");
			exit();
		}
		mysqli_stmt_bind_param($stmt, "s", $vkey);
		mysqli_stmt_execute($stmt);
		$resultData = mysqli_stmt_get_result($stmt);
		
		if ($resultData->num_rows == 1) {
			// validate
			$sql = "UPDATE users SET verified = 1 WHERE vkey = ? AND verified = 0";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("location: verify.php?error=databaseerror2");
				exit();
			}
			mysqli_stmt_bind_param($stmt, "s", $vkey);
			mysqli_stmt_execute($stmt);
			header("location: verify.php?verified=true");
			exit();
		} else {
			header("location: verify.php?error=invalidoralreadyverified");
			exit();
		}
	}
?>

<section id="temp" class="content">
	<?php
		if ($_GET['verified'] == true) {
			echo "<p>Verified! 😜</p>";
		} else {
			echo "<p>Something went wrong...</p>";
		}
	?>
</section>

<?php
	include_once 'footer.php';
?>