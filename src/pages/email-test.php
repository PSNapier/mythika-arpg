<?php
	if (isset($_POST)) {
		echo $_POST["email"];
	}
?>

<section class="content">
	<form method="POST">
		<input type="email" name="email" placeholder="Email...">
		<button type="submit" name="submit">Log In</button>
	</form>
</section>