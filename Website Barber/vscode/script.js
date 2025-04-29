//toggle class active

const navbarNav = document.querySelector(".navbar-nav");
// ketika hamberger menu di klik
document.querySelector("#hamberger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik di luar sidebar untuk menghilangkan nav
const hamberger = document.querySelector("#hamberger-menu");

document.addEventListener("click", function (e) {
  if (!hamberger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});