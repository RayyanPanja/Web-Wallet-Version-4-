function DialogController(opener, closer, dialog, modal) {
    opener.addEventListner('click', () => {
        if (modal == true) {
            dialog.showModal();
        } else {
            dialog.show();
        }
    });
    closer.addEventListner('click', () => {
        dialog.close();
    })

}