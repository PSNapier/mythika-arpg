<head>
	<link rel="stylesheet" type="text/css" href="/stylesheets/lpcounter.css?v=<?php echo time(); ?>">
	<script>document.title = `LP Counter - ${document.title}`;</script>
</head>

<section id="lp-counter">
	<div id="wrapper" class="content">
		<div id="lp-counter-mythikan-id" class="box">
			<div class="lp-counter-header mythikan-id-cell">Mythikan ID</div>
			<input type="text" placeholder="ID 1..."></input>
			<input type="text" placeholder="ID 2..."></input>
			<input type="text" placeholder="ID 3..."></input>
			<input type="text" placeholder="ID 4..."></input>
			<input type="text" placeholder="ID 5..."></input>
		</div>

		<div id="lp-counter-main" class="box">
			<div class="box-row">
				<label class="lp-counter-header"><input type="checkbox">Artwork</input></label>
				<label class="lp-counter-header"><input type="checkbox">Literature</input></label>
			</div>
			<div class="hr"></div>
			<div class="box-row">Word Count <input id="input-word-count" type="text"></input></div>
			<div class="box-row"><label><input type="checkbox">Creature Description</input></label></div>
			<div class="box-row">
				<label><input type="checkbox">Descriptive</input></label>
				<label><input type="checkbox">Undescriptive</input></label>
			</div>
			<div class="box-row"><label><input type="checkbox">Spotlight</input></label></div>
		</div>
		
		<div id="lp-counter-bonus" class="box">
			<div class="box-row">
				<div class="lp-counter-header">Bonus Life Points</div>
			</div>
			<div class="hr"></div>
		</div>

		<div id="lp-counter-meta" class="box">
			<div>Link To Art <input type="text"></input></div>
			<div>Title / Artist <input type="text"></input></div>
		</div>
		
		<div id="output-wrapper" class="box">
			<div id="output-button-wrapper">
				<button id="buttonRoll" onclick="buttonPress()">Clear</button>
				<button id="buttonClear" onclick="reload()">Calculate</button>
			</div>
			<div id="output"></div>
		</div>
	</div>

	<!-- <script src="scripts\randomizer.js"></script> -->
</section>

<script>
	const bonusLifePoints = [
		['Mascot - Nova', 'Mascot - Nero', 'Mascot - Evrah'],
		['Realm Enviroment Lore'], 
		['Time Of Day'], 
		['Bonds'],
		['Companion Tamers'],
		['Equipped Accessories'],
		['Own Work'],
		['Collaboration'],
		['Comic Style'],
		['Familiar'],
		['Activities'],
		['Seasonsal Quest'],
		['Alpha'],
		['Starter'],
		['Fellowship'],
		['Other ARPG'],
		['Disciplinary - "New Hope"', 'Disciplinary - "Brave Warrior"', 'Disciplinary - "Mighty Hero"', 'Disciplinary - "You Were Born For This"', 'Disciplinary - Upgrade'],
	];

	function populate(array, parent) {
		array.forEach((x) => {
			let row = document.createElement('div');
			row.className = 'box-row';
			x.forEach((y) => {
				row.innerHTML += `<label><input type="checkbox">${y}</input></label>`;
			})
			document.getElementById(parent).appendChild(row);
		})
	};

	populate(bonusLifePoints, 'lp-counter-bonus')
</script>