require("./bootstrap");

/*import EmblaCarousel from "embla-carousel";
const servNode = document.getElementById("servCarousel");
const expeNode = document.getElementById("expeCarousel");

const servCarousel = EmblaCarousel(servNode, {
    align: "start",
    loop: true,
});

const expeCarousel = EmblaCarousel(expeNode, {
    align: "start",
    loop: true,
});*/
/** Begin Embla */
import EmblaCarousel from "embla-carousel";
import { setupPrevNextBtns, disablePrevNextBtns } from "./prevAndNextButtons";
import { parallax } from "./parallax";
import "../css/embla.css";

const wrap = document.querySelector(".embla__parallax");
const viewPort = wrap.querySelector(".embla__viewport");
const prevBtn = wrap.querySelector(".embla__button--prev");
const nextBtn = wrap.querySelector(".embla__button--next");
const embla = EmblaCarousel(viewPort, {
    align:'start',
    containScroll: "trimSnaps",
});

const disablePrevAndNextBtns = disablePrevNextBtns(prevBtn, nextBtn, embla);
setupPrevNextBtns(prevBtn, nextBtn, embla);
embla.on("init", disablePrevAndNextBtns);
embla.on("select", disablePrevAndNextBtns);

/** End Embla */

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
