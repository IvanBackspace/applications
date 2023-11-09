const openModalButton = document.getElementById('openModalButton');
const modal = document.getElementById('myModal');
const closeModal = document.getElementById('closeModal');

openModalButton.addEventListener('click', () => {
    modal.style.display = 'block';
});

closeModal.addEventListener('click', () => {
    modal.style.display = 'none';
});

window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

var closePopupButton = document.getElementById("closePopup");
closePopupButton.addEventListener("click", function () {
    popup.style.display = "none";
});

document.addEventListener("click", function (event) {
    if (event.target !== popup && !popup.contains(event.target)) {
        popup.style.display = "none";
    }
});