import "./bootstrap";
import Alpine from "alpinejs";
import.meta.glob(["../img/**"]);
import "iconify-icon";
import "./swipers"
import { controllerCategory } from "./selectCat";
import tabBar from "./tabBar";
import dishModal from "./dishModal";

window.Alpine = Alpine;
Alpine.start();

try {
    dishModal();
} catch (error) {}
if(window.location.pathname.includes('menu') || window.location.pathname === '/menuClean') {
    controllerCategory();
}

tabBar();
