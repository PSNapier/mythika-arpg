<?php
	// if (isset($_POST)) {
	// 	echo $_POST["username"] . '<br>' . $_POST["password"];

	// 	$message = array(true, "");
	// 	$message[1] = "Test message. :P";
	// 	// $message[1] = "Username or password doesn't match our records, please try again or reset your password.";
	// 	// $message[1] = "Account has not been verified, check your email for the link.";
	// 	// $message[1] = "Password reset email has been sent!";
	// }
?>

<section class="content">
	<form action="login.inc.php" method="POST">
		<input type="text" name="username" placeholder="Username/Email...">
		<input type="password" name="password" placeholder="Password...">
		<button type="submit" name="submit">Log In</button>
		<!-- <br><br><a href="../reset">Forgot your password? Click here to go to password reset.</a> -->
	</form>
</section>