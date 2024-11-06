import "./bootstrap";
import "flowbite";
import Aos from "aos";

import { DotLottie } from "@lottiefiles/dotlottie-web";

var urlAnimation =
    window.location.origin + "/assets/img/animation/loading.lottie";

const dotLottie = new DotLottie({
    autoplay: true,
    loop: true,
    canvas: document.querySelector("#loading"),
    src: urlAnimation, // replace with your .lottie or .json file URL
});

const loadingScreen = document.getElementById("loading-screen");
const content = document.getElementById("content");

window.addEventListener("load", function () {
    // Añade una pequeña transición de desvanecimiento
    loadingScreen.style.opacity = "0";
    setTimeout(() => {
        loadingScreen.style.display = "none";
        content.style.display = "block";
        Aos.init({ duration: 800, disable: "mobile" });
    }, 500);
});

document.addEventListener("update-aos", () => {
    setTimeout(() => {
        Aos.refreshHard();
    }, 250);
});
