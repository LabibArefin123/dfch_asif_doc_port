document.addEventListener("DOMContentLoaded", function () {
    const phoneLinks = document.querySelectorAll(".open-phone-modal");
    const phoneModalElement = document.getElementById("phoneModal");

    if (phoneModalElement) {
        const phoneModal = new bootstrap.Modal(phoneModalElement);

        phoneLinks.forEach((link) => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                phoneModal.show();
            });
        });
    }
});
