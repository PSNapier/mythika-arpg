// [x] get table-wrapper
// [x] get child table-header count
// [x] figure out which table-cells should have the alternate row styling applied based upon table-header count
// [x] apply styling

(function() {
	const tables = document.getElementsByClassName('table-wrapper');
	for (let i = 0; i < tables.length; i++) {
		let children = tables[i].children;
		let columnCount = 0;
		for (let i = 0; i < children.length; i++) {
			if (children[i].classList.value.includes('table-header')) { columnCount += 1; }
		}
		let x = 1;
		for (let i = 0; i < children.length; i++) {
			if (x > columnCount && x < columnCount + columnCount) {
				children[i].classList.add('table-row-alternating');
				x++;
			} 
			else if (x === columnCount + columnCount) {
				children[i].classList.add('table-row-alternating');
				x = 1;
			} 
			else { x++; }
		}
	}
})();