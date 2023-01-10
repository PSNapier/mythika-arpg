<?php
	$name = '[Name]';
	if (isset($_SESSION["usersId"])) { $name = $_SESSION["usersName"]; }
?>

<section class="content">
	<!-- characters... 🐉 -->

	<div id="character-gallery-header">
		<button class="button-left-arrow" onclick="window.location.href='index.php?page=pages/profile/main/profile.php';">◁ Back to <?php echo $name ?>'s Profile</button>
		
		<h2><?php echo $name ?>'s Characters</h2>
	</div>

	<div id="character-gallery-breadcrumb">« 1 »</div>

	<div id="character-gallery-wall"></div>
</section>

<script>
	const chars = ['char a', 'char b', 'char c'];

	(function() {
		chars.forEach((char) => {
			let card = document.createElement('div');
			card.className = 'character-gallery-card';
			card.innerHTML = `<img src="/assets/img-test-char.png">
			<div class="character-gallery-card-hover">
				<div class="character-gallery-card-hover-buttons">
					<button onclick="window.location.href='/profile/main/character-profile';">Profile</button>
					<button onclick="window.location.href='/profile/main/character-lp';">LP Tracker</button>
					<button>Slots</button>
					<button>Awards</button>
				</div>
				<div class="character-gallery-card-hover-info">
					<b>Name:</b> ${char}
					<br><b>ID:</b>
					<br><b>Rank:</b>
					<br><b>Level:</b>
					<br><b>Species:</b>
					<br><b>Phenotype:</b>
					<br><b>HP:</b>
					<br><b>H.I.S:</b>
				</div>
			</div>`;
			document.getElementById('character-gallery-wall').appendChild(card);
		})
	})();
</script>