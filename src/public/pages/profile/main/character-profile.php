<!-- 
	[x] Mobile layout
	[x] Table layout
	[x] Automatic table-row colour alternating script 
	[x] Desktop layout
	[ ] Automatic table populating script 
-->

<?php
	$name = '[Name]';
	if (isset($_SESSION["usersId"])) { $name = $_SESSION["usersName"]; }
?>

<section class="content character-profile-grid">
	<div id="character-profile-header">
		<button class="button-left-arrow" onclick="window.location.href='/profile/main/characters';">◁ Back to <?php echo $name ?>'s Characters</button>
	</div>

	<div id="character-profile-grid">
		<img id="character-profile-hero" src="/assets/img-test-char.png">

		<div id="character-profile-links" class="table-wrapper">
			<div class="table-cell table-header"><a href="#">LINKS</a></div>
			<div class="table-cell"><a href="index.php?page=pages/profile/main/character-lp.php">> LP TRACKER</a></div>
			<div class="table-cell"><a href="#">> BREEDING SLOTS</a></div>
			<div class="table-cell"><a href="#">> AWARDS</a></div>
			<div class="table-cell"><a href="#">> FAMILIARS</a></div>
		</div>

		<div id="character-profile-lp" class="table-wrapper">
			<div class="table-cell table-header">Total LP</div>
			<div class="table-cell table-header">0</div>
		</div>

		<div id="character-profile-identity" class="table-wrapper">
			<div class="table-cell table-header">Mythikan Identity</div>
			<div class="table-cell table-header"></div>

			<div class="table-cell"><b>Mythikan's Name</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Identification Number</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Owner</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Co-Owner</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Origin</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Designer</b></div>
			<div class="table-cell">n/a</div>
		</div>

		<div id="character-profile-genetics" class="table-wrapper">
			<div class="table-cell table-header">Genetics</div>
			<div class="table-cell table-header"></div>

			<div class="table-cell"><b>Species</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Gender</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Build</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Ears</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Tail</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Bonus Trait</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Phenotype</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Genotype</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Parent 1</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Parent 2</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Birth Traits</b></div>
			<div class="table-cell">n/a</div>
		</div>

		<div id="character-profile-heriditary-traits" class="table-wrapper">
			<div class="table-cell table-header">Heriditary Traits</div>
			<div class="table-cell table-header">Date Updated</div>
			<div class="table-cell table-header">Effect</div>
			<div class="table-cell table-header"></div>

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

		<div id="character-profile-ranks-health" class="table-wrapper">
			<div class="table-cell table-header">Ranks / Health</div>
			<div class="table-cell table-header">Date Updated</div>
			<div class="table-cell table-header"></div>

			<div class="table-cell"><b>Health Issues</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>
			
			<div class="table-cell"><b>Health Points</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>
			
			<div class="table-cell"><b>Rank</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Hunt Level</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>
			
			<div class="table-cell"><b>Necro Stars</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>
			
			<div class="table-cell"><b>Runes</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>
			
			<div class="table-cell"><b>Attack</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>
			
			<div class="table-cell"><b>Defence</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>
			
			<div class="table-cell"><b>Speed</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>
		</div>

		<div id="character-profile-backstory-personality" class="table-wrapper">
			<div class="table-cell table-header">Backstory / Personality</div>

			<div class="table-cell"
			<?php
				if (isset($_SESSION["usersId"])) {
					echo 'contenteditable="true"';
				}
			?>
			>Type here...</div>
		</div>

		<div id="character-profile-accessories" class="table-wrapper">
			<div class="table-cell table-header">Accessories</div>
			<div class="table-cell table-header">Date Updated</div>

			<div class="table-cell"><b>Item 1</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Item 2</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Item 3</b></div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Item 4</b></div>
			<div class="table-cell">n/a</div>
		</div>

		<div id="character-profile-items" class="table-wrapper">
			<div class="table-cell table-header">Item Equipped</div>
			<div class="table-cell table-header">Date Updated</div>
			<div class="table-cell table-header">Item Effect</div>

			<div class="table-cell"><b>Item 1</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>
			
			<div class="table-cell"><b>Item 2</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>
			
			<div class="table-cell"><b>Item 3</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>

			<div class="table-cell"><b>Item 4</b></div>
			<div class="table-cell">n/a</div>
			<div class="table-cell">n/a</div>
		</div>
	</div>
</section>

<script src="scripts/table-row-alternating.js?v=<?php echo time(); ?>"></script>