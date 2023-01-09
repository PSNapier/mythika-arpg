<section class="content">
	<form action="includes/signup.inc.php" method="post">
		<input type="text" name="username" placeholder="Username...">
		<input type="text" name="email" placeholder="Email...">
		<input type="password" name="password" placeholder="Password...">
		<input type="password" name="passwordConfirm" placeholder="Confirm Password...">
		<button type="submit" name="submit">Sign Up</button>
	</form>

	<?php
		if ($_GET["confirmation"] == "emailsent") {
			echo '<p style="margin-top:1em; text-align:center; color: var(--color-dark);">Verification email sent!</p>';
		}
	?>

	<?php
		// NOTE: not working, review tutorial
		// if (isset($_GET["error"])) {
		// 	if ($_GET["error"] == "emptyinput") {
		// 		echo "<p>Fill in all fields.</p>";
		// 	}
		// 	else if ($_GET["error"] == "invalidusername") {
		// 		echo "<p>Add your username.</p>";
		// 	}
		// 	else if ($_GET["error"] == "invalidemail") {
		// 		echo "<p>Add your email address.</p>";
		// 	}
		// 	else if ($_GET["error"] == "passwordmismatch") {
		// 		echo "<p>Make sure your confirmed password matches your password.</p>";
		// 	}
		// 	else if ($_GET["error"] == "usernametaken") {
		// 		echo "<p>Username already taken.</p>";
		// 	}
		// 	else if ($_GET["error"] == "stmtfailed") {
		// 		echo "<p>Something went wrong, please try again.</p>";
		// 	}
		// 	else if ($_GET["error"] == "none") {
		// 		echo "<p>Sign-up succesful!</p>";
		// 	}
		// }
	?>
</section>