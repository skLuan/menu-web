import plateActive from "../img/icons/iconPlateActive.svg";
import iconOpenMenu from "../img/icons/menu-open.svg";

import plate from "../img/icons/iconPlate.svg";
import { cambioPos, moveBread } from "./positionCat";

let urls;
fetch("/api/catActiveImage")
    .then((response) => {
        return response.json();
    })
    .then((data) => {
        urls = data;
    });

// ---------------- Categories selector
let categories = document.getElementById("titles").querySelectorAll(".cat");
let breadcrumbs = document
    .getElementById("breadcrumb-menu")
    .querySelectorAll(".cat");
let itemMenu = document.getElementById("swiper-menu").querySelectorAll(".cat");
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
            let title = cat.querySelector("h3");
            title.classList.remove("!text-red-navigation");
            let menuItem = itemMenu[i];
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
        } catch (error) {
            cat.classList.remove("!text-red-navigation", "!font-medium");
        }
    });
};

let cleanAll = () => {
    console.log("voy a cerrar el menu");
    let arrays = [categories, breadcrumbs, itemMenu];
    arrays.forEach((array) => {
        cleaning(array);
    });
    console.log("Cerrado");

};

try {
    categories.forEach((cat, i) => {
        let title = cat.querySelector("h3");
        let bread = breadcrumbs[i];
        let menuItem = itemMenu[i];

        cat.addEventListener("click", () => {
            cleaning(categories);
            cleaning(breadcrumbs);

            menuItem
                .querySelector(".plateIcon")
                .setAttribute("src", plateActive);
            title.classList.add("!text-red-navigation");
            bread.classList.add("!text-red-navigation", "!font-medium");

            // console.log(cat.querySelector("h3").classList);
            if (urls != undefined || urls != null) {
                menuItem
                    .querySelector(".catIcon")
                    .setAttribute("src", urls[i][1]);
            }
            cambioPos(cat, i);
            toogleDishes(cat.nextElementSibling);
            moveBread(bread, i);
            console.log(iconCloseMenu);
            closeMenuController(iconCloseMenu, iconOpenMenu);

        });

        menuItem.addEventListener("click", () => {
            cleaning(categories);
            cleaning(breadcrumbs);
            menuItem
                .querySelector(".plateIcon")
                .setAttribute("src", plateActive);

            title.classList.add("!text-red-navigation");
            bread.classList.add("!text-red-navigation", "!font-medium");

            // console.log(cat.querySelector("h3").classList);
            if (urls != undefined || urls != null) {
                menuItem
                    .querySelector(".catIcon")
                    .setAttribute("src", urls[i][1]);
            }
            cambioPos(cat, i);
            toogleDishes(cat.nextElementSibling);
            moveBread(bread, i);

        });

        bread.addEventListener("click", () => {
            cleaning(categories);
            cleaning(breadcrumbs);
            menuItem
                .querySelector(".plateIcon")
                .setAttribute("src", plateActive);

            title.classList.add("!text-red-navigation");
            bread.classList.add("!text-red-navigation", "!font-medium");

            // console.log(cat.querySelector("h3").classList);
            if (urls != undefined || urls != null) {
                menuItem
                    .querySelector(".catIcon")
                    .setAttribute("src", urls[i][1]);
            }
            cambioPos(cat, i);
            toogleDishes(cat.nextElementSibling);
            moveBread(bread, i);
        });
    });
} catch (err) {
    console.log(err);
}

export { cleanAll, closeMenuController };
