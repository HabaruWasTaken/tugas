const elToggleFunc = function (el) { 
    el.classList.toggle("active"); 
}

const navbar = document.querySelector("[data-nav]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");
const overlay = document.querySelector("[data-overlay]");

const navElArr = [navOpenBtn, navCloseBtn, overlay];

for (let i = 0; i < navElArr.length; i++) {
    navElArr[i].addEventListener("click", function () {
        elToggleFunc(navbar);
        elToggleFunc(overlay);
        elToggleFunc(document.body);
    })
}

const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {
    if (window.scrollY >= 800) {
        goTopBtn.classList.add("active");
    } else {
        goTopBtn.classList.remove("active");
    }
})