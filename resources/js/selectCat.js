import plateActive from "../img/icons/iconPlateActive.svg";
import plate from "../img/icons/iconPlate.svg";


let urls;
fetch("/api/catActiveImage")
    .then((response) => {
        return response.json();
    })
    .then(data => {
        urls = data;
        console.log(urls);
    })

try {
    // ---------------- Categories selector
    let categories = document.getElementById("titles").querySelectorAll(".cat");
    let breadcrumbs = document
        .getElementById("breadcrumb-menu")
        .querySelectorAll(".cat");
    let itemMenu = document
        .getElementById("swiper-menu")
        .querySelectorAll(".cat");

    let cleaning = (array) => {
        array.forEach((cat, i) => {
            try {
                let title = cat.querySelector("h3");
                title.classList.remove("!text-red-navigation");
                let menuItem = itemMenu[i];
                menuItem.querySelector(".plateIcon").setAttribute("src", plate);

                if (urls != undefined || urls != null) {
                    menuItem
                        .querySelector(".catIcon")
                        .setAttribute("src", urls[i][0]);
                }
            } catch (error) {
                cat.classList.remove("!text-red-navigation");
            }
        });
    };

    categories.forEach((cat, i) => {
        cat.addEventListener("click", () => {
            cleaning(categories);
            cleaning(breadcrumbs);
            let title = cat.querySelector("h3");
            let bread = breadcrumbs[i];

            let menuItem = itemMenu[i];
            menuItem
                .querySelector(".plateIcon")
                .setAttribute("src", plateActive);

            if(urls != undefined || urls != null) {
                menuItem.querySelector(".catIcon").setAttribute("src", urls[i][1]);
            }

            title.classList.add("!text-red-navigation");
            bread.classList.add("!text-red-navigation");
            // console.log(cat.querySelector("h3").classList);
        });
    });
} catch (err) {
    console.log(err);
}
