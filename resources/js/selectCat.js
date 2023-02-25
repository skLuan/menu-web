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
            if(urls != undefined || urls != null) {
                menuItem.querySelector(".catIcon").setAttribute("src", urls[i][1]);
            }
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
        });

    });
} catch (err) {
    console.log(err);
}
