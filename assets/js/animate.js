let size = Math.floor(window.screen.width);

const tick = document.querySelector('#tick');
const Htxt = document.querySelector('.success-text');
const receipt = document.querySelector('#receipt');

setInterval(() => {
    tick.style.transform = "translateY(-80px)";
    setTimeout(() => {
        Htxt.style.fontSize = 35 + "px";
        setTimeout(() => {
            if (size <= 412) {
                receipt.style.width = 80 + "%";
                receipt.style.height = 25 + "%";
            } else {
                receipt.style.width = 25 + "%";
                receipt.style.height = 30 + "%";
            }
        }, 1000);
    }, 1000);
}, 1000);
window.addEventListener('click', () => {
    console.log(size);
})
