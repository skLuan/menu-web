import plateActive from "../img/icons/iconPlateActive.svg";
import plate from "../img/icons/iconPlate.svg";
import iconOpenMenu from "../img/icons/menu-open.svg";

import { cambioPos, moveBread } from "./positionCat";
import { breadcrumbMenu, swiperMenu } from "./swipers";

let urls;
fetch("/api/catActiveImage")
    .then((response) => {
        return response.json();
    })
    .then((data) => {
        urls = data;
    });

// ---------------- Categories selector
let categories = undefined;
let breadcrumbs = undefined;
let itemMenu = undefined;
let compileControllers = [];
let iconCloseMenu = document.getElementById("icon-close-menu");

const toogleDishes = (container) => {
    container.classList.toggle("hidden");
};

let closeMenuController = (imageElement, iconMenu) => {
    imageElement.setAttribute("src", iconMenu);
};

let cleaning = (array) => {
    //---------------Metodo que remueve clases
    array.forEach((cat, i) => {
        try {
            let menuItem = itemMenu[i];
            let title = categories[i].querySelector("h3");
            title.classList.remove("!text-red-navigation");
            menuItem.querySelector(".plateIcon").setAttribute("src", plate);

            if (
                cat.parentNode.classList.contains("catContainer") &&
                !cat.nextElementSibling.classList.contains("hidden")
            ) {
                toogleDishes(cat.nextElementSibling);
            }

            if (urls != undefined || urls != null) {
                menuItem
                    .querySelector(".catIcon")
                    .setAttribute("src", urls[i][0]);
            }
            breadcrumbs[i].classList.remove(
                "!text-red-navigation",
                "!font-medium"
            );
        } catch (error) {}
    });
};

let cleanAll = () => {
    selectWrappers();
    console.log("voy a cerrar el menu");
    compileControllers.forEach((array) => {
        cleaning(array);
    });
    console.log("Cerrado");
};

let selectWrappers = () => {
    try {
        categories = document.getElementById("titles").querySelectorAll(".cat");
        breadcrumbs = document
            .getElementById("breadcrumb-menu")
            .querySelectorAll(".cat");
        // itemMenu = document
        //     .getElementById("swiper-menu")
        //     .querySelectorAll(".cat");
        itemMenu = swiperMenu.slides;
        compileControllers = [categories, breadcrumbs, itemMenu];
    } catch (error) {
        console.log("Mala seleccion compita D:");
        console.log(error);
    }
};

let controllerCategory = () => {
    selectWrappers();
    let anterior = undefined;

    try {
        let forSwipers = (swiper) => {
            cleaning(categories);
            cleaning(breadcrumbs);
            swiper.slideTo(swiper.clickedIndex);

            let i = swiper.clickedIndex;
            let selector = swiperMenu.slides[i].firstElementChild;
            let uniqueCat = selector;
            let title = categories[i].querySelector("h3");
            // console.log(itemMenu);
            console.log(i);
            if (uniqueCat === anterior) {
                anterior = undefined;
                return;
            }
            if (uniqueCat.querySelector(".plateIcon") !== null) {
                uniqueCat
                    .querySelector(".plateIcon")
                    .setAttribute("src", plateActive);
            }

            if (title !== null) title.classList.add("!text-red-navigation");

            if (urls != undefined || urls != null) {
                if (uniqueCat.querySelector(".catIcon") !== null) {
                    uniqueCat
                        .querySelector(".catIcon")
                        .setAttribute("src", urls[i][1]);
                }
            }
            breadcrumbs[i].classList.add(
                "!text-red-navigation",
                "!font-medium"
            );
            cambioPos(categories[i], i);
            if (categories[i].parentNode.classList.contains("catContainer")) {
                toogleDishes(categories[i].nextElementSibling);
            } else {
                toogleDishes(categories[i].nextElementSibling);
            }

            closeMenuController(iconCloseMenu, iconOpenMenu);
            anterior = uniqueCat;
        };
        swiperMenu.on("click", () => {
            forSwipers(swiperMenu);
            // forSwipers(swiperMenu.thumbs.swiper);
        });

        breadcrumbMenu.on("click", () => {
            forSwipers(breadcrumbMenu);
        });

        compileControllers.forEach((compile) => {
            compile.forEach((cat, i) => {
                let title = categories[i].querySelector("h3");
                let uniqueCat = itemMenu[i];

                cat.addEventListener("mousedown", (e) => {
                    cleaning(categories);
                    cleaning(breadcrumbs);
                });

                cat.addEventListener("mouseup", () => {
                    console.log(cat);
                    swiperMenu.slideTo(i);
                    if (uniqueCat === anterior) {
                        anterior = undefined;
                        return;
                    }
                    // console.log(swiperMenu.activeIndex);
                    if (uniqueCat.querySelector(".plateIcon") !== null) {
                        uniqueCat
                            .querySelector(".plateIcon")
                            .setAttribute("src", plateActive);
                    }

                    if (title !== null)
                        title.classList.add("!text-red-navigation");

                    if (urls != undefined || urls != null) {
                        if (uniqueCat.querySelector(".catIcon") !== null) {
                            uniqueCat
                                .querySelector(".catIcon")
                                .setAttribute("src", urls[i][1]);
                        }
                    }
                    breadcrumbs[i].classList.add(
                        "!text-red-navigation",
                        "!font-medium"
                    );
                    cambioPos(cat, i);
                    if (cat.parentNode.classList.contains("catContainer")) {
                        toogleDishes(cat.nextElementSibling);
                    } else {
                        toogleDishes(categories[i].nextElementSibling);
                    }

                    closeMenuController(iconCloseMenu, iconOpenMenu);
                    anterior = uniqueCat;
                });
            });
        });
    } catch (err) {
        console.log(err);
    }
};

export { cleanAll, closeMenuController, controllerCategory };
