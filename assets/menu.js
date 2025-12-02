const menuIcons = document.querySelectorAll(".menu-icon");
const mobileMenu = document.querySelector(".mobile-menu");
const header = document.querySelector("header");

menuIcons.forEach((icon) => {
  icon.addEventListener("click", () => {
    mobileMenu.classList.toggle("active");
    header.classList.toggle("active");
  });
});