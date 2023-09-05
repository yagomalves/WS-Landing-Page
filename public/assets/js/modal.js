function iniciaModal(modalID) {
    const modal = document.getElementById(modalID);

    if (modal) {
        modal.classList.add('show');
        modal.addEventListener('click', (e) => {

            if (e.target.id == modalID || e.target.className == 'close') {
                modal.classList.remove('show');
            }

            console.log(e.target.id);

        });
    }
}

const modal = document.querySelector('.modal-btn');
modal.addEventListener('click', () => iniciaModal('modal-contact'));