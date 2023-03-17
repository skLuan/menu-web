import { cleanAll, closeMenuController } from "./selectCat";
import iconCloseMenu from "../img/icons/menu-close.svg";

export default () => {
    let toggleHidden = (element, c) => {
        // element.classList.replace("hidden", "flex");
        element.classList.toggle(c);
        // element.classList.toggle("flex");
    };
    let tabClick = document.getElementById("menuTab");
    let closeMenu = document.getElementById("close-wrapper");
    let sidebar = document.getElementById("sideBar");
    let sidebarBg = document.querySelector("#sideBarBg");

    closeMenu.addEventListener("click", () => {
        cleanAll();
        closeMenuController(closeMenu.firstElementChild, iconCloseMenu);
    });

    sidebarBg.addEventListener("click", (e) => {
        toggleHidden(sidebar, "-translate-x-full");
        toggleHidden(sidebarBg, "hidden");
        tabClick.classList.toggle("!text-red-navigation");

    });

    tabClick.addEventListener("click", () => {
        toggleHidden(sidebar, "-translate-x-full");
        toggleHidden(sidebarBg, "hidden");
        tabClick.classList.toggle("!text-red-navigation");
    });
};
