const TopBtn = document.querySelector('#top');
window.addEventListener('scroll', () => {
    let location = Math.floor(window.scrollY);
    if (location > 350) {
        TopBtn.style.display = "block";
    } else {
        TopBtn.style.display = "none";
    }
    console.log(location);
});
TopBtn.addEventListener('click', () => {
    scroll(0, 0);
})