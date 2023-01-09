<?php
	// $test = password_hash('$2y$10$ZlVmVlVUByOMIYr7H.LyjucuOw2YllKdzVziDUjglevKhPkeFDmEq', PASSWORD_DEFAULT);
	// $checkPwd = password_verify('test', $test);
	// echo 'console.log('. json_encode($checkPwd, JSON_HEX_TAG) .')';
?>

<section class="content">
	<form action="/includes/passwordreset.inc.php" method="post">
	<?php 
			echo '<script>console.log('. json_encode($_GET["error"], JSON_HEX_TAG) .')</script>';
			if (isset($_GET["confirmation"])) {
				if ($_GET["confirmation"] === "emailsent") {
					echo "Password reset email has been sent!";
				}
			}
			else if (isset($_GET["error"])) {
				if ($_GET["error"] === "fail") {
					echo "Password reset email failed to send, please double check your information.<br>For further assistance please contact us.";
				}
				if ($_GET["error"] === "unverified") {
					echo "Password reset email could not be sent because the account is unverified-- please verify your account and attempt to log in again.";
				}
				echo "<br><br>";
			}
		?>
		<input type="text" name="username" placeholder="Username...">
		<button type="submit" name="submit">Send Password Reset Email</button>
		<br><br><a href="../login">Click here to return to login page...</a>
	</form>
</section>