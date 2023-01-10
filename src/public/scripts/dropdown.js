// toggle mobile version
function dropdownButton() {
	$('#dropdown-menu').toggleClass('hidden');
}

function sizeChange(mq) {
	if (mq.matches) {
		// console.log('window width is > min');
		$('#dropdown-menu').removeClass('hidden');
	} 
	else {
		// console.log('window width is < min');
		$('#dropdown-menu').addClass('hidden');
	}
}

const mq = window.matchMedia('(min-width: 720px)');
mq.addListener(sizeChange);
sizeChange(mq);

// list of dropdowns
const listDropdowns = ['profile', 'gameplay', 'story', 'rollers', 'hubs'];

function dropdownHide() {
	for (let i = 0; i < listDropdowns.length; i++) {
		$(`#dropdown-${listDropdowns[i]}`).hide();
	}
}

// select dropdown menu
function dropdownSelect() {
	dropdownHide();
	$(`#dropdown-${this.id}`).show();
}

// hide dropdowns on mouseleave
function dropdownToggle() {
	$(this).hide();
}

// add event listeners
for (let i = 0; i < listDropdowns.length; i++) {
	$(`#${listDropdowns[i]}`).click(dropdownSelect);
	$(`#${listDropdowns[i]}`).mouseover(dropdownSelect);
	$(`#dropdown-${listDropdowns[i]}`).mouseleave(dropdownToggle);
}

$(`#dropdown-button`).click(dropdownHide);

// OLD VERSION
// let override = true;
// let openElementId = '';

// // https://stackoverflow.com/questions/152975/how-do-i-detect-a-click-outside-an-element
// document.addEventListener('click', (event) => {
// 	const target = document.querySelector('.dropdown-selected');
// 	const withinBoundaries = event.composedPath().includes(target);

// 	if (target !== null && !withinBoundaries) {
// 		override = true;
// 		handleDropdown(document.querySelector(`#${openElementId}`));
// 	}
// })

// document.addEventListener('keydown', (event) => {
// 	if (event.code !== 'Escape') { return; }

// 	override = true;
// 	handleDropdown(document.querySelector(`#${openElementId}`));
// })

// function handleDropdown(element) {
// 	const dropdown = document.getElementById(`dropdown-${element.id}`);
// 	const classHighlighted = `dropdown-highlighted`;
// 	const classSelected = `dropdown-selected`;
// 	const classUnselected = `dropdown`;
// 	const checkClass = dropdown.classList.contains(classSelected) === true ? true : false;

// 	if (openElementId !== '' && openElementId !== element.id) {
// 		const openElement = document.querySelector(`#${openElementId}`);
// 		const openDropdown = document.getElementById(`dropdown-${openElementId}`);

// 		openElement.classList.remove(classHighlighted);
// 		openDropdown.classList.add(classUnselected);
// 		openDropdown.classList.remove(classSelected);
// 		openElementId = '';
// 	}

// 	if (checkClass) {
// 		element.classList.remove(classHighlighted);
// 		dropdown.classList.add(classUnselected);
// 		dropdown.classList.remove(classSelected);
// 		openElementId = '';
// 	}
// 	else {
// 		element.classList.add(classHighlighted);
// 		dropdown.classList.add(classSelected);
// 		dropdown.classList.remove(classUnselected);
// 		override = false;
// 		openElementId = element.id;
// 	}
// }

// function closeDropdown() {
// 	// BUG: working, buttt...
// 	// dropdown.js:58 Uncaught DOMException: Failed to execute 'querySelector' on 'Document': '#' is not a valid selector.
// 	// at closeDropdown (https://abature.studio/mythika/scripts/dropdown.js:58:26)
// 	// at HTMLDivElement.onmouseleave (https://abature.studio/mythika/:29:57)

// 	if (openElementId !== '') {
// 		override = true;
// 		handleDropdown(document.querySelector(`#${openElementId}`));
// 	}
// }