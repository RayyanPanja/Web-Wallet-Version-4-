let size = Math.floor(window.screen.width);
const tick = document.querySelector('#tick');
const Htxt = document.querySelector('.success-text');
const receipt = document.querySelector('.receipt');
const audio = document.querySelector('#notify');
let flag = localStorage.getItem("theme");
audio.play();

if (flag !== 'dark') {
    receipt.style.width = 5 + "px";
    setInterval(() => {
        tick.style.transform = "translateY(-80px)";
        setInterval(() => {
            Htxt.style.fontSize = 35 + "px";
            setInterval(() => {
                if (size <= 412) {
                    receipt.style.height = 25 + "%";
                } else {
                    receipt.style.height = 30 + "%";
                }
                setInterval(() => {
                    if (size <= 412) {
                        receipt.style.width = 80 + "%";
                    } else {
                        receipt.style.width = 25 + "%";
                    }
                    audio.pause();
                }, 500);
            }, 1000);
        }, 1000);
    }, 1000);
    window.addEventListener('click', () => {
        console.log(size);
    })
} else {
    tick.style.transform = "translateY(-80px)";
    if (size <= 412) {
        receipt.style.width = 80 + "%";
        receipt.style.height = 25 + "%";
    } else {
        receipt.style.height = 30 + "%";
        receipt.style.width = 25 + "%";
        audio.pause();
    }
}
