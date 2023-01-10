<?php
	include_once 'header.php';
?>

<section class="content">
	<p>An email will be sent to you with instructions on how to reset your password.</p>
	<form action="includes/passwordreset.inc.php" method="post">
		<input type="email" name="email" placeholder="Email...">
		<button type="submit" name="password-reset-submit">Reset Password</button>
	</form>
</section>

<?php
	include_once 'footer.php';
?>