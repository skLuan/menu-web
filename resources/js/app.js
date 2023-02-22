import './bootstrap';
import "iconify-icon";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import Alpine from 'alpinejs';
import.meta.glob(["../img/**"]);


window.Alpine = Alpine;
Alpine.start();

var zswiperMenu = new Swiper(".swiper-menu", {
    slidesPerView: 5,
    direction: 'vertical',
    spaceBetween: 30,
    freeMode: false,
});

var swiperHome = new Swiper(".swiper-home", {
    autoplay: {
        delay: 3000,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

try {

    // ---------------- Categories selector
    let categories = document.getElementById('titles').querySelectorAll('.cat');
    let breadcrumbs = document.getElementById('breadcrumb-menu').querySelectorAll('.bread');

    let cleaning = (array) => {
        array.forEach((cat) => {
            try {
                let title = cat.querySelector("h3");
                title.classList.remove("!text-red-navigation");

            } catch (error) {
                cat.classList.remove("!text-red-navigation");
            }
        });
    };

    categories.forEach((cat, i) => {

        cat.addEventListener('click', () => {
            cleaning(categories);
            cleaning(breadcrumbs)
            let title = cat.querySelector("h3");
            let bread = breadcrumbs[i];

            title.classList.add("!text-red-navigation");
            bread.classList.add("!text-red-navigation");
            // console.log(cat.querySelector("h3").classList);
        })
    });

}catch(err) {
    console.log(err);
}
// breadcrumbs.forEach(cat => {

//     cat.addEventListener('click',() => {
//         cleaning(categories);
//         cleaning(breadcrumbs)
//         let title = cat.querySelector("h3");
//         title.classList.add("!text-red-navigation");
//         console.log(cat.querySelector("h3").classList);
//     })
// });





