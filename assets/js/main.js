console.clear();
console.log("Javascript Loaded");
let windowsize = window.screen.width;
console.log(windowsize);
// Scroll To Top
const TopBtn = document.querySelector('#topbtn');
TopBtn.style.display = "none";
window.addEventListener('scroll', () => {
    let location = Math.floor(window.scrollY);
    if (location > 350) {
        TopBtn.style.display = "block";
    } else {
        TopBtn.style.display = "none";
    }
    // console.log(location);
});
TopBtn.addEventListener('click', () => {
    window.scrollTo(0, 0);
});

// Side Menu Bar
const SideNav = document.querySelector('#sidenav');
const ToggleBtn = document.querySelector('#toggle');
const CloseBtn = document.querySelector('#CloseSideNav');
ToggleBtn.addEventListener('click', () => {
    SideNav.show();
});
CloseBtn.addEventListener('click', () => {
    SideNav.close();
});

// All Dialog Closing On Window Double Click 
window.addEventListener('dblclick', () => {
    SideNav.close();
});


const add = (e) => {
    let amount = document.getElementById('amount');
    amount.value = amount.value + e.value;
}
