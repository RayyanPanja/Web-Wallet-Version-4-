const title = document.querySelector('#title');
const login = document.querySelector('#login');
setTimeout(() => {
    title.style.top = 40 + "%";
    setInterval(() => {
        login.style.left = 50 + "%";
    }, 500);
}, 1000);
