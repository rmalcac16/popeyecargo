document.addEventListener("DOMContentLoaded", function () {
    // Seleccionamos los botones y el overlay
    const navButton = document.querySelector(".menu-button img");
    const closeMenuButton = document.querySelector(".close-menu-button");
    const navOverlay = document.querySelector(".w-nav-overlay");

    // Función para abrir el menú
    function openMenu() {
        navOverlay.style.display = "block";
        navOverlay.style.height = "100vh";
        navOverlay.style.width = "320px";
        navOverlay.style.position = "fixed";
        navOverlay.style.top = "0";
        navOverlay.style.backgroundColor = "rgba(0, 0, 0, 0.8)"; // Opcional, para estilo
    }

    // Función para cerrar el menú
    function closeMenu() {
        navOverlay.style.display = "none";
        navOverlay.style.height = "0";
        navOverlay.style.width = "0";
    }

    // Función para alternar el menú
    function toggleMenu() {
        const isMenuOpen = navOverlay.style.display === "block";
        if (isMenuOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    }

    // Abrir el menú al hacer clic en el botón de apertura
    if (navButton) {
        navButton.addEventListener("click", toggleMenu);
    }

    // Cerrar el menú al hacer clic en el botón de cierre
    if (closeMenuButton) {
        closeMenuButton.addEventListener("click", closeMenu);
    }

    // Slider Functionality
    const slides = document.querySelectorAll(".slider .slide");
    const leftArrow = document.querySelector(".left-arrow");
    const rightArrow = document.querySelector(".right-arrow");
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? "block" : "none";
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function previousSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    if (slides.length > 0) {
        showSlide(currentSlide);

        // Event listeners for navigation arrows
        if (rightArrow) {
            rightArrow.addEventListener("click", function () {
                nextSlide();
            });
        }

        if (leftArrow) {
            leftArrow.addEventListener("click", function () {
                previousSlide();
            });
        }
    }

    // Selecciona todos los elementos del acordeón
    const accordionItems = document.querySelectorAll(".accordion-item");

    accordionItems.forEach((item) => {
        // Selecciona el botón de toggle, el panel correspondiente y el número
        const toggle = item.querySelector(".accordion-toggle");
        const panel = item.querySelector(".accordion-list");
        const accordionNumber = item.querySelector(".accordion-number");
        const accordionIcon = item.querySelector(".accordion-icon");

        // Agrega el evento de clic al toggle
        toggle.addEventListener("click", function () {
            const isOpen = toggle.getAttribute("aria-expanded") === "true";

            // Cierra todos los acordeones abiertos
            accordionItems.forEach((otherItem) => {
                const otherToggle =
                    otherItem.querySelector(".accordion-toggle");
                const otherPanel = otherItem.querySelector(".accordion-list");
                const otherNumber =
                    otherItem.querySelector(".accordion-number");
                const otherIcon = otherItem.querySelector(".accordion-icon");

                otherToggle.setAttribute("aria-expanded", "false");
                otherPanel.style.height = "0px";
                otherNumber.style.color = "var(--dark-gray)";
                otherNumber.style.borderColor = "var(--dark-gray)";
                otherToggle.style.borderColor = "var(--dark-gray)";
                otherToggle.style.color = "var(--dark-gray)";
                otherIcon.style.transform = "rotate(0deg)";
            });

            // Si está cerrado, ábrelo
            if (!isOpen) {
                toggle.setAttribute("aria-expanded", "true");
                panel.style.height = panel.scrollHeight + "px";
                accordionNumber.style.color = "var(--primary)";
                accordionNumber.style.borderColor = "var(--primary)";
                toggle.style.borderColor = "var(--primary)";
                toggle.style.color = "var(--primary)";
                accordionIcon.style.transform = "rotate(180deg)";
            } else {
                // Si está abierto, ciérralo
                toggle.setAttribute("aria-expanded", "false");
                panel.style.height = "0px";
                accordionNumber.style.color = "var(--dark-gray)";
                accordionNumber.style.borderColor = "var(--dark-gray)";
                toggle.style.borderColor = "var(--dark-gray)";
                toggle.style.color = "var(--dark-gray)";
                accordionIcon.style.transform = "rotate(0deg)";
            }
        });
    });
});
