import { cleanAll, closeMenuController } from "./selectCat";
import iconCloseMenu from "../img/icons/menu-close.svg";

export default () => {
    let toggleHidden = (element) => {
        // element.classList.replace("hidden", "flex");
        element.classList.toggle("hidden");
        element.classList.toggle("flex");
    };
    let tabClick = document.getElementById("menuTab");
    let closeMenu = document.getElementById("close-wrapper");
    let sidebar = document.getElementById("sideBar");



    closeMenu.addEventListener("click", () => {
        cleanAll();
        closeMenuController(closeMenu.firstElementChild, iconCloseMenu);
    });

    tabClick.addEventListener("click", () => {
        toggleHidden(sidebar);
        tabClick.classList.toggle("!text-red-navigation");
    });
};
