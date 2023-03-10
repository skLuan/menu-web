import Swiper from "swiper/bundle";
import "swiper/css/bundle";

var breadcrumbMenu = new Swiper("#breadcrumb-menu", {
    slidesPerView: 4,
    spaceBetween: 30,
    scrollbar: false,
});

var swiperMenu = new Swiper("#swiper-menu", {
    direction: "vertical",
    slidesPerView: 6,
    spaceBetween: 30,
    thumbs: {
        swiper: breadcrumbMenu,
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

export { breadcrumbMenu, swiperMenu}
