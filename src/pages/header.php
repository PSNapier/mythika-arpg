<!doctype html>
<html lang="en">
<head>
	<!-- © 2021 A.R. JONES ALL RIGHTS RESERVED -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">

	<title>Mythika ARPG</title>
	<link rel="icon" type="image/x-icon" href="/assets/favicon-32x32.png">

	<link rel="stylesheet" href="../styles/main.css?v=<?php echo time(); ?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
	<!-- <script src="/jquery-3.6.0.min.js"></script> -->

	<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
	<script src="/scripts/dropdown.js" defer></script>
</head>
<body>

<div id="test" class="banner-editing hidden">
	🚧 Site is currently being edited! ;P 🚧
</div>
	
<nav>
	<a href="/"><img src="/assets/img-header.png" alt="Headshot of a Mythikan with red banner"></a>

	<ion-icon id="dropdown-button" name="menu" onclick="dropdownButton()"></ion-icon>

	<ul id="dropdown-menu">
		<li id="profile">Profile</li>
		<li id="gameplay">Gameplay</li>
		<li id="story">Story</li>
		<li id="rollers">Rollers</li>
		<li>Events</li>
		<!-- <li id="events" onclick=(dropdownSelect(this)) onmouseover="handleDropdown(this)">Events</li> -->
		<li id="hubs">Hubs</li>
	</ul>
</nav>

<div id="header-wrapper">

	<section id="dropdown-profile" class="dropdown">
		<div class="content">
			<div class="card-wrapper">
				<div class="card logged-in">
					<h1>Main</h1>
					<ul>
						<li><a href="/profile/main/profile">Profile</a></li>
						<li><a href="/profile/main/mail">Mail</a></li>
						<li><a href="/profile/main/characters">Characters</a></li>
						<li><a href="/profile/main/inventory">Inventory</a></li>
						<li><a href="/profile/main/seeds">Seeds</a></li>
						<li><a href="/profile/main/genos">Genos</a></li>
						<li><a href="/profile/main/breeding-slots">Breeding Slots</a></li>
					</ul>
				</div>
				<div class="card">
					<h1>Logs</h1>
					<ul>
						<li><a href="/profile/logs/runebooks">Runebooks</a></li>
						<li><a href="/profile/logs/bakery-recipes">Bakery Recipes</a></li>
						<li><a href="/profile/logs/synthesis-scrolls">Synthesis Scrolls</a></li>
						<li><a href="/profile/logs/taming-logs">Taming Logs</a></li>
						<li><a href="/profile/logs/account-logs">Account Logs</a></li>
						<li><a href="/profile/logs/admin-actions-logs">Admin Actions Logs</a></li>
					</ul>
				</div>
				<div class="card">
					<h1>Account</h1>
					<ul>
						<li><a href='/profile/account/manage-profile'>Manage Profile</li></a>
						<li><a href='/profile/account/manage-media-links'>Manage Media Links</li></a>
						<li><a href='/profile/account/manage-account'>Manage Account</li></a>
						<li><a href='/includes/logout.inc.php'>Log-Out</a></li>
						<li><a href='/login'>Log-In</a></li>
						<li><a href='/signup'>Sign-Up</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="dropdown-gameplay" class="dropdown">
		<div class="content">
			<div class="card-wrapper">
				<div class="card">
					<h1>Main</h1>
					<ul>
						<li><a href="/gameplay/main/getting-started">Getting Started</a></li>
						<li><a href="/gameplay/main/geno-layout">Geno Layout</a></li>
						<li><a href="/gameplay/main/rulebook">Rulebook</a></li>
						<li><a href="/gameplay/main/lifepoints-stats-ranks">Life Points, Stats & Ranks</a></li>
						<li><a href="/gameplay/main/health-issues">Health Issues</a></li>
					</ul>
				</div>
				<div class="card">
					<h1>Guides</h1>
					<ul>
						<li><a href="/gameplay/guides/design-guide">Design Guide</a></li>
						<li><a href="/gameplay/guides/sanctuary">Sanctuary</a></li>
						<li><a href="/gameplay/guides/runes">Runes</a></li>
						<li><a href="/gameplay/guides/genetics">Genetics</a></li>
						<li><a href="/gameplay/guides/random-task-requests">Random Task Requests</a></li>
					</ul>
				</div>
				<div class="card">
					<h1>Activites</h1>
					<ul>
						<li><a href="/gameplay/activities/disciplinaries">Disciplinaries</a></li>
						<li><a href="/gameplay/activities/breeding">Breeding</a></li>
						<li><a href="/gameplay/activities/hunting">Hunting</a></li>
						<li><a href="/gameplay/activities/realm-exploring">Realm Exploring</a></li>
						<li><a href="/gameplay/activities/sorcery">Sorcery</a></li>
						<li><a href="/gameplay/activities/synthesis">Synthesis</a></li>
						<li><a href="/gameplay/activities/rivalry">Rivalry</a></li>
						<li><a href="/gameplay/activities/bakery">Bakery</a></li>
					</ul>
				</div>
				<div class="card">
					<h1>Alpha Activities</h1>
					<ul>
						<li><a href="/gameplay/alpha-activities/rivalry">Rivalry</a></li>
						<li><a href="/gameplay/alpha-activities/bounty-hunts">Bounty Hunts</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="dropdown-story" class="dropdown">
		<div class="content">
			<div class="card-wrapper">
				<div class="card">
					<h1>Overview</h1>
					<ul>
						<li><a href="/story/overview/world-lore">World Lore</a></li>
						<li><a href="/story/overview/realms">Realms</a></li>
						<li><a href="/story/overview/species">Species</a></li>
					</ul>
				</div>
				<div class="card">
					<h1>Storyline</h1>
					<ul>
						<li><a href="/story/storyline/legend-of-renshee">Legend of Ren'Shee</a></li>
						<li><a href="/story/storyline/nova-vs-nero">Nova Vs Nero</a></li>
						<li><a href="/story/storyline/evrahs-journey">Evrah's Journey</a></li>
					</ul>
				</div>
				<div class="card">
					<h1>Guardians</h1>
					<ul>
						<li><a href="/story/guardians/novas-contracts">Nova's Contracts</a></li>
						<li><a href="/story/guardians/evrahs-market">Evrah's Market</a></li>
						<li><a href="/story/guardians/neros-alpha-rituals">Nero's Alpha Rituals</a></li>
						<li><a href="/story/guardians/abandoned-pups">Abandoned Pups</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="dropdown-rollers" class="dropdown">
		<div class="content">
			<div class="card-wrapper">
				<div class="card">
					<h1>Rollers</h1>
					<ul>
						<li><a href="/breeding-roller">Breeding Roller</a></li>
						<li><a href="/lp-counter">LP Counter</a></li>
						<li><a href="/randomizer">Randomizer</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="dropdown-hubs" class="dropdown">
		<div class="content">
			<div class="card-wrapper">
				<div class="card">
					<h1>User Base</h1>
					<ul>
						<li><a href="/hubs/user-base/character-alpha-search">Character/Alpha Search</a></li>
						<li><a href="/hubs/user-base/user-search">User Search</a></li>
						<li><a href="/hubs/user-base/breeding-log-search">Breeding Log Search</a></li>
						<li><a href="/hubs/user-base/backgrounds">Backgrounds</a></li>
						<li><a href="/hubs/user-base/imports">Imports</a></li>
						<li><a href="/hubs/user-base/bounties">Bounties</a></li>
					</ul>
				</div>
				<div class="card">
					<h1>Items Hub</h1>
					<ul>
						<li><a href="/hubs/items-hub/awards">Awards</a></li>
						<li><a href="/hubs/items-hub/medical">Medical</a></li>
						<li><a href="/hubs/items-hub/breeding-items">Breeding Items</a></li>
						<li><a href="/hubs/items-hub/ancient-items">Ancient Items</a></li>
						<li><a href="/hubs/items-hub/familiars">Familiars</a></li>
						<li><a href="/hubs/items-hub/import-equippables">Import Equippables</a></li>
						<li><a href="/hubs/items-hub/hunting-items">Hunting Items</a></li>
						<li><a href="/hubs/items-hub/seeds">Seeds</a></li>
					</ul>
				</div>
				<div class="card">
					<h1>General Information</h1>
					<ul>
						<li><a href="/hubs/general-information/terminology">Terminology</a></li>
						<li><a href="/hubs/general-information/admin-guides">Admin Guides</a></li>
						<li><a href="/hubs/general-information/admin-approvals">Admin Approvals</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</div>


