<section class="content">
<?php
	$selector = $_GET['selector'];
	$validator = $_GET['validator'];
	// echo "" . $selector . " and " . $validator;
	
	if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
		?>
		<form action="/includes/reset-new.inc.php" method="post">
			<input type="hidden" name="selector" value="<?php echo $selector; ?>">
			<input type="hidden" name="validator" value="<?php echo $validator; ?>">
			<input type="password" name="pwd" placeholder="Password...">
			<input type="password" name="pwdConfirm" placeholder="Confirm Password...">
			<button type="submit" name="reset-new-submit">Set New Password</button>
		</form>
		<?php
	}
?>
</section>

