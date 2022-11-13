const title = document.querySelector('#title');
const login = document.querySelector('#login');
const loginClose = document.querySelector('#close-login');
setTimeout(() => {
    title.style.top = 40 + "%";
    setTimeout(() => {
        login.style.left = 50 + "%";
    },500);
}, 1000);

login.addEventListener('click', () => {
    setTimeout(() => {
        login.style.left = 110 + "%";
        title.style.top = 130 + "%";
    }, 100);
})
loginClose.addEventListener('click', () => {
    setTimeout(() => {
        login.style.left = 50 + "%";
        title.style.top = 30 + "%";
    }, 100);
})