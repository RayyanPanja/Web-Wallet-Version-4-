function DialogHandler(Opener,Closer,Box,Modal) {
    let Open = document.getElementById(Opener);
    let Close = document.getElementById(Closer);
    let Dialog = document.getElementById(Box);

    Open.addEventListener('click',()=>{
        if(Modal === true){
            Dialog.showModal();
        }else{
            Dialog.show();
        }
    });

    Close.addEventListener('click',()=>{
        Dialog.close();
    });    
}

DialogHandler('open-login','close-login','login-form',true);
