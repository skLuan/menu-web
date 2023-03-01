import "./bootstrap";
import Alpine from "alpinejs";
import.meta.glob(["../img/**"]);
import "iconify-icon";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import "./selectCat";
import dishModal from "./dishModal";

window.Alpine = Alpine;
Alpine.start();

try {
    dishModal();
} catch (error) {}

let toggleHidden = (element) => {
    // element.classList.replace("hidden", "flex");
    element.classList.toggle("hidden")
    element.classList.toggle("flex")
};
let tabClick = document.getElementById("menuTab");
let sidebar = document.getElementById("sideBar");

tabClick.addEventListener("click", () => {
    toggleHidden(sidebar);
    tabClick.classList.toggle('!text-red-navigation');
});

var breadcrumbMenu = new Swiper("#breadcrumb-menu", {
    slidesPerView: 4,
    spaceBetween: 30,
});

var swiperMenu = new Swiper("#swiper-menu", {
    direction: "vertical",
    slidesPerView: 6,
    spaceBetween: 30,
    thumbs: {
        swiper: breadcrumbMenu,
        autoScrollOffset: 1,
    },
});

var swiperHome = new Swiper(".swiper-home", {
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

var swiperHome2 = new Swiper(".swiper-restaurante", {
    slidesPerView: 2,
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});
