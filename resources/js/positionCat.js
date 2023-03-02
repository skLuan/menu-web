import { breadcrumbMenu, swiperMenu } from "./swipers";

let cambioPos = (cat, i) => {
    try {
        let title = document.getElementById("titles");
        let categories = document
            .getElementById("titles")
            .querySelectorAll(".cat");
        let catContainer = document
            .getElementById("titles")
            .querySelector(".catContainer");

        let currentLocation = title.scrollTop;
        let yReference = 139;

        let diff = 73 * i;
        swiperMenu.slideTo(i);
        setTimeout(() => {
            title.scrollTop = currentLocation + diff;
        }, 30);
        // console.log(yReference);
    } catch (err) {
        console.log(err);
    }
};
let moveBread = (bread, i) => {
    breadcrumbMenu.slideTo(i);
};
export { cambioPos, moveBread };
