<?php
	$name = '[Name]';
	if (isset($_SESSION["usersId"])) { $name = $_SESSION["usersName"]; }
?>

<section class="content">
	<div id="character-lp-header">
		<button class="button-left-arrow" onclick="window.location.href='/profile/main/characters';">◁ Back to <?php echo $name ?>'s Characters</button>
	</div>

	<div id="character-lp-lp" class="table-wrapper">
		<div class="table-cell table-header">Total LP</div>
		<div class="table-cell table-header">0</div>
	</div>
	
	<div id="character-lp-runt-rank" class="table-wrapper">
		<div class="table-title">
			<div class="table-cell table-header table-title-big">Runt Rank</div>
			<div class="table-cell table-header table-title-small">Total: 0</div>
		</div>

		<div class="table-cell table-header">Title</div>
		<div class="table-cell table-header">LP Breakdown</div>
		<div class="table-cell table-header">Mythikan ID's</div>
		<div class="table-cell table-header">Total</div>
		<div class="table-cell table-header">Admin Approved?</div>

		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>

		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>

		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
	</div>

	<div id="character-lp-omega-rank" class="table-wrapper">
		<div class="table-title">
			<div class="table-cell table-header table-title-big">Omega Rank</div>
			<div class="table-cell table-header table-title-small">Total: 0</div>
		</div>
	</div>

	<div id="character-lp-beta-rank" class="table-wrapper">
		<div class="table-title">
			<div class="table-cell table-header table-title-big">Beta Rank</div>
			<div class="table-cell table-header table-title-small">Total: 0</div>
		</div>
	</div>

	<div id="character-lp-alpha-rank" class="table-wrapper">
		<div class="table-title">
			<div class="table-cell table-header table-title-big">Alpha Rank</div>
			<div class="table-cell table-header table-title-small">Total: 0</div>
		</div>
	</div>

	<div id="character-lp-extra-lp" class="table-wrapper">
		<div class="table-title">
			<div class="table-cell table-header table-title-big">Extra LP</div>
			<div class="table-cell table-header table-title-small">Total: 0</div>
		</div>

		<div class="table-cell table-header">Title</div>
		<div class="table-cell table-header">LP Breakdown</div>
		<div class="table-cell table-header">Mythikan ID's</div>
		<div class="table-cell table-header">Total</div>

		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>

		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>

		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
		<div class="table-cell">n/a</div>
	</div>
</section>