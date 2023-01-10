<section class="content">
	<form action="/includes/login.inc.php" method="post">
	<?php 
			echo '<script>console.log('. json_encode($_GET["error"], JSON_HEX_TAG) .')</script>';
			if (isset($_GET["confirmation"])) {
				if ($_GET["confirmation"] === "passwordresetemailsent") {
					echo "Password reset email has been sent!";
				}
			}
			else if (isset($_GET["error"])) {
				if ($_GET["error"] === "wronglogin") {
					echo "Username or password doesn't match our records, please try again or reset your password.";
				}
				if ($_GET["error"] === "unverified") {
					echo "Account has not been verified, check your email for the link.";
				}
				echo "<br><br>";
			}
		?>
		<input type="text" name="username" placeholder="Username/Email...">
		<input type="password" name="password" placeholder="Password...">
		<button type="submit" name="submit">Log In</button>
		<br><br><a href="../reset">Forgot your password? Click here to go to password reset.</a>
	</form>
</section>