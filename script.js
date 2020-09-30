function openModal(modalName) {
	let modal = document.getElementById(modalName);
	modal.style.display = "block";
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
}
function closeModal(modalName) {
	let modal = document.getElementById(modalName);
	modal.style.display = "none";
}