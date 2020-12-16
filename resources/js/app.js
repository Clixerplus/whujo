require("./bootstrap");

import EmblaCarousel from "embla-carousel";
const emblaNode = document.getElementById("embla");

const embla = EmblaCarousel(emblaNode, {
    align:'start',
});

const closeAlert = () => {
    const alert = document.getElementById("alert");
    alert.classList.add("scale-x-0");
};

