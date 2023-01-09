<?php
	// $thisPage = "adminDashboard";
	// $pageRank = "admin";
	include_once 'header.php';
	require_once 'includes/rankCheck.inc.php';
?>

<section id="temp" class="content">
	<p>Admin dashboard. 👑</p>
	<?php
		if (isset($_SESSION["usersId"])) {
			echo "<p>Logged in as... <b>rank ";
			echo $_SESSION["usersRank"];
			echo "</b></p>";
		}
	?>
</section>

<?php
	include_once 'footer.php';
?>