import Swiper from "swiper/bundle";
import "swiper/css/bundle";

var breadcrumbMenu = new Swiper("#breadcrumb-menu", {
    slidesPerView: 4,
    scrollbar: false,
});
var swiperMenu = new Swiper("#swiper-menu", {
    direction: "vertical",
    autoHeight: true,
    height: 55,
    spaceBetween: 20,
    thumbs: {
        swiper: breadcrumbMenu,
        multipleActiveThumbs: false,
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
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

var swiperHome3 = new Swiper(".swiper-clientes", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

export { breadcrumbMenu, swiperMenu}
