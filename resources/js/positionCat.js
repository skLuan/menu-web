import { breadcrumbMenu, swiperMenu } from "./swipers";

let cambioPos = (cat, i) => {
    try {
        let title = document.getElementById("titles");
        let categories = document
            .getElementById("titles")
            .querySelectorAll(".cat");
        let dishesContainer = document
            .querySelector(".catContainer")
            .querySelectorAll(".dishesContainer");

        let diff = 110 * i;
        console.log();
        setTimeout(() => {
            let currentLocation = title.scrollTop;
            let pos = dishesContainer[i].offsetHeight;
            let yReference = currentLocation - pos;

            title.scrollTop = diff;
            // title.scrollTop = yReference - diff;
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
