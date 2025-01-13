document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: false,
    });

    const navButton = document.querySelector(".menu-button img");
    const closeMenuButton = document.querySelector(".close-menu-button");
    const navOverlay = document.querySelector(".w-nav-overlay");

    function openMenu() {
        navOverlay.style.display = "block";
        navOverlay.style.height = "100vh";
        navOverlay.style.width = "320px";
        navOverlay.style.position = "fixed";
        navOverlay.style.top = "0";
        navOverlay.style.backgroundColor = "rgba(0, 0, 0, 0.8)";
    }

    function closeMenu() {
        navOverlay.style.display = "none";
        navOverlay.style.height = "0";
        navOverlay.style.width = "0";
    }

    function toggleMenu() {
        const isMenuOpen = navOverlay.style.display === "block";
        if (isMenuOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    }

    if (navButton) {
        navButton.addEventListener("click", toggleMenu);
    }

    if (closeMenuButton) {
        closeMenuButton.addEventListener("click", closeMenu);
    }

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

        if (rightArrow) {
            rightArrow.addEventListener("click", nextSlide);
        }

        if (leftArrow) {
            leftArrow.addEventListener("click", previousSlide);
        }
    }

    const accordionItems = document.querySelectorAll(".accordion-item");

    accordionItems.forEach((item) => {
        const toggle = item.querySelector(".accordion-toggle");
        const panel = item.querySelector(".accordion-list");
        const accordionNumber = item.querySelector(".accordion-number");
        const accordionIcon = item.querySelector(".accordion-icon");

        toggle.addEventListener("click", function () {
            const isOpen = toggle.getAttribute("aria-expanded") === "true";

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

            if (!isOpen) {
                toggle.setAttribute("aria-expanded", "true");
                panel.style.height = panel.scrollHeight + "px";
                accordionNumber.style.color = "var(--primary)";
                accordionNumber.style.borderColor = "var(--primary)";
                toggle.style.borderColor = "var(--primary)";
                toggle.style.color = "var(--primary)";
                accordionIcon.style.transform = "rotate(180deg)";
            } else {
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

    const tabButtons = document.querySelectorAll(".tab-button");
    const tabTitle = document.querySelector("#tab-title");
    const tabContent = document.querySelector("#tab-content");

    function activateTab(tabButton) {
        tabButtons.forEach((button) => button.classList.remove("active"));
        tabButton.classList.add("active");

        const title = tabButton.getAttribute("data-title");
        const content = tabButton.getAttribute("data-content");

        tabTitle.innerHTML = `<div data-aos="zoom-in">${title}</div>`;
        tabContent.innerHTML = `<div data-aos="fade-up">${content}</div>`;

        setTimeout(() => AOS.refresh(), 100);
    }

    if (tabButtons.length > 0) {
        activateTab(tabButtons[0]);
    }

    tabButtons.forEach((button) => {
        button.addEventListener("click", () => {
            if (!button.classList.contains("active")) {
                activateTab(button);
            }
        });
    });

    const locationTabs = document.querySelectorAll(".location-tab");
    const pane = document.querySelector(".location-tab-pane");
    const paneTitle = pane.querySelector(".location-tab-pane-title");
    const paneAddress = pane.querySelector(".paragraph-large");
    const panePhone = pane.querySelector(
        ".location-tab-pane-info .location-link"
    );
    const paneEmail = pane.querySelectorAll(
        ".location-tab-pane-info .location-link"
    )[1];

    locationTabs[0].classList.add("w--current");
    updatePaneContent(locationTabs[0]);

    locationTabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            if (tab.classList.contains("w--current")) return;

            locationTabs.forEach((tab) => tab.classList.remove("w--current"));
            tab.classList.add("w--current");
            updatePaneContent(tab);
        });
    });

    function updatePaneContent(tab) {
        const location = tab.getAttribute("data-location");
        const province = tab.getAttribute("data-province");
        const address = tab.getAttribute("data-address");
        const phone = tab.getAttribute("data-phone");
        const email = tab.getAttribute("data-email");
        const image = tab.getAttribute("data-image");

        pane.style.backgroundImage = `url('${image}')`;
        paneTitle.innerHTML = `<div data-aos="fade-up">${
            province ? `${location} - ${province}` : location
        }</div>`;
        paneAddress.innerHTML = `<div data-aos="fade-up" data-aos-delay="100">${address}</div>`;
        panePhone.innerHTML = `<div data-aos="fade-up" data-aos-delay="200">${phone}</div>`;
        panePhone.href = `tel:${phone}`;
        paneEmail.innerHTML = `<div data-aos="fade-up" data-aos-delay="300">${email}</div>`;
        paneEmail.href = `mailto:${email}`;

        setTimeout(() => AOS.refresh(), 100);
    }
});
