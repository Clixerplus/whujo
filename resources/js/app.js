require("./bootstrap");

import EmblaCarousel from "embla-carousel";
const emblaNode = document.getElementById("embla");

const embla = EmblaCarousel(emblaNode, {
    align: "start",
});

const closeAlert = () => {
    const alert = document.getElementById("alert");
    alert.classList.add("scale-x-0");
};

const narvbar = {
    state: false,
    el: document.getElementById("navbar"),
};
const btnNavbar = document.getElementById("btnNavbar");

window.onscroll = function () {
    if (window.scrollY > 50) {
        navbar.state = false;
        navbar.classList.remove("lg:bg-transparent", "lg:text-white");
        navbar.classList.add("lg:bg-white", "lg:text-primary", "shadow-w1");
        btnNavbar.classList.remove(
            "border-white",
            "text-white",
            "hover:bg-white",
            "hover:text-secondary"
        );
        btnNavbar.classList.add(
            "border-primary",
            "text-primary",
            "hover:bg-primary",
            "hover:text-white"
        );
    } else {
        navbar.state = false;
        navbar.classList.remove("lg:bg-white", "lg:text-primary", "shadow-w1");
        navbar.classList.add("lg:bg-transparent", "lg:text-white");
        btnNavbar.classList.remove(
            "border-primary",
            "text-primary",
            "hover:bg-primary",
            "hover:text-white",
            "shadow-w1"
        );
        btnNavbar.classList.add(
            "border-white",
            "text-white",
            "hover:bg-white",
            "hover:text-secondary"
        );
    }
};
