import { cleanAll } from "./selectCat";
import iconCloseMenu from "../img/icons/menu-close.svg";

export default () => {
    let toggleHidden = (element, c) => {
        // element.classList.replace("hidden", "flex");
        element.classList.toggle(c);
        // element.classList.toggle("flex");
    };
    let tabClick = document.getElementById("menuTab");
    let sidebar = document.getElementById("sideBar");
    let sidebarBg = document.querySelector("#sideBarBg");


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
