<?php
	$thisPage="Profile";
	include_once 'header.php';
?>

<section id="temp" class="content">
	<form action="includes/sendgridTest.inc.php" method="post">
		<input type="text" name="message" placeholder="Message...">
		<input type="email" name="email" placeholder="Email...">
		<button type="submit" name="submit">Send Email</button>
	</form>
	
	<?php
		if ($_GET["confirmation"] == "emailsent") {
			echo '<p style="margin-top:1em; text-align:center">Email sent!</p>';
		}
	?>
</section>

<?php
	include_once 'footer.php';
?>