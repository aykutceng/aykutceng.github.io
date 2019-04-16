

function log()
{
	document.getElementById('logModal').style.display = "block";
}

function closeModal()
{
	document.getElementById('logModal').style.display = "none";
}

var modal = document.getElementById('logModal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(logModal) {
    if (logModal.target == modal) {
        modal.style.display = "none";
    }
}