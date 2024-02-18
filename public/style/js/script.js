// Toogle class active untuk hamburger menu
const navbarNav = document.querySelector(".navbar-nav");
document.querySelector("#hamburger-menu").onclick = () => {
    navbarNav.classList.toggle("active");
};


// klik hamburger di luar sidebar menu
const hamburger = document.getElementById('hamburger-menu');
document.addEventListener('click', function(e) {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active');
    }
});
