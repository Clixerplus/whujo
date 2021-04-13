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
/** Begin Embla *//*
import EmblaCarousel from "embla-carousel";
import { setupPrevNextBtns, disablePrevNextBtns } from "./prevAndNextButtons";
import { parallax } from "./parallax";
import "../css/embla.css";

const servCarouselWrap = document.querySelector(
    "#servCarousel.embla__parallax"
);
const servCarouselViewPort = servCarouselWrap.querySelector(
    "#servCarousel.embla__parallax .embla__viewport"
);
const servCarouselPrevBtn = servCarouselWrap.querySelector(
    "#servCarousel.embla__parallax .embla__button--prev"
);
const servCarouselNextBtn = servCarouselWrap.querySelector(
    "#servCarousel.embla__parallax .embla__button--next"
);
const servCarouselEmbla = EmblaCarousel(servCarouselViewPort, {
    align: "start",
    containScroll: "trimSnaps",
});

const servCarouselDisablePrevAndNextBtns = disablePrevNextBtns(
    servCarouselPrevBtn,
    servCarouselNextBtn,
    servCarouselEmbla
);
setupPrevNextBtns(servCarouselPrevBtn, servCarouselNextBtn, servCarouselEmbla);
servCarouselEmbla.on("init", servCarouselDisablePrevAndNextBtns);
servCarouselEmbla.on("select", servCarouselDisablePrevAndNextBtns);


const expeCarouselWrap = document.querySelector(
    "#expeCarousel.embla__parallax"
);
const expeCarouselViewPort = expeCarouselWrap.querySelector(
    "#expeCarousel.embla__parallax .embla__viewport"
);
const expeCarouselPrevBtn = expeCarouselWrap.querySelector(
    "#expeCarousel.embla__parallax .embla__button--prev"
);
const expeCarouselNextBtn = expeCarouselWrap.querySelector(
    "#expeCarousel.embla__parallax .embla__button--next"
);
const expeCarouselEmbla = EmblaCarousel(expeCarouselViewPort, {
    align: "start",
    containScroll: "trimSnaps",
});

const expeCarouselDisablePrevAndNextBtns = disablePrevNextBtns(
    expeCarouselPrevBtn,
    expeCarouselNextBtn,
    expeCarouselEmbla
);
setupPrevNextBtns(expeCarouselPrevBtn, expeCarouselNextBtn, expeCarouselEmbla);
expeCarouselEmbla.on("init", expeCarouselDisablePrevAndNextBtns);
expeCarouselEmbla.on("select", expeCarouselDisablePrevAndNextBtns);
 */
/** End Embla */

const closeAlert = () => {
    const alert = document.getElementById("alert");
    alert.classList.add("scale-x-0");
};
const narvbar = {
    state: false,
    el: document.getElementById("navbar"),
};
