console.log('terms Loaded');

const tick = document.getElementById('terms');
const box = document.getElementById('termbox');
tick.style.borderBottom = 2 + "px solid blue"
console.log(tick.checked);

tick.addEventListener('click', () => {
    box.showModal();
    box.style.transitionDuration = 500 + "ms";
    box.style.width = 50 + "ch";
    box.style.height = 50 + "%";
});