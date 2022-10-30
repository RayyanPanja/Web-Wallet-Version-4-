function DialogHandler(open, close, dialog, isModal) {
    let Opener = document.getElementById(open);
    let Closer = document.getElementById(close);
    let Box = document.getElementById(dialog);
    Opener.addEventListener('click', () => {
        if (isModal === true) {
            Box.showModal();
        } else {
            Box.show();
        }
    });

    Closer.addEventListener('click', () => {
        Box.close();
    })
}

DialogHandler('toggle-name-btn', 'name-close-btn', 'name-box', true);
DialogHandler('toggle-email-btn', 'email-close-btn', 'email-box', true);
DialogHandler('toggle-contact-btn', 'contact-close-btn', 'contact-box', true);
