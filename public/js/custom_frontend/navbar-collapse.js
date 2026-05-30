document.addEventListener("DOMContentLoaded", function () {
    const navbarCollapse = document.getElementById("navbarCollapse");
    const toggler = document.querySelector(".navbar-toggler");
    const closeBtn = document.querySelector(".navbar-close-btn");
    const overlay = document.querySelector(".navbar-overlay");

    function openNavbar() {
        navbarCollapse.classList.add("show");
        overlay.classList.add("show");

        toggler.classList.add("d-none");
        closeBtn.classList.remove("d-none");
    }

    function closeNavbar() {
        navbarCollapse.classList.remove("show");
        overlay.classList.remove("show");

        closeBtn.classList.add("d-none");
        toggler.classList.remove("d-none");
    }

    toggler.addEventListener("click", function (e) {
        e.preventDefault();
        openNavbar();
    });

    closeBtn.addEventListener("click", function () {
        closeNavbar();
    });

    overlay.addEventListener("click", function () {
        closeNavbar();
    });

    document.querySelectorAll("#navbarCollapse a").forEach((link) => {
        link.addEventListener("click", function () {
            closeNavbar();
        });
    });

    document.addEventListener("click", function (e) {
        const clickedInsideNavbar =
            navbarCollapse.contains(e.target) ||
            toggler.contains(e.target) ||
            closeBtn.contains(e.target);

        if (!clickedInsideNavbar) {
            closeNavbar();
        }
    });
});
