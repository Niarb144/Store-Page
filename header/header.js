//Dropdown Js
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".menu");

    menuToggle.addEventListener("click", function () {
        menu.classList.toggle("active");
    });

    const dropdownItems = document.querySelectorAll(".dropdown");

    dropdownItems.forEach((item) => {
        item.addEventListener("click", function () {
            item.classList.toggle("active");
        });
    });
});

