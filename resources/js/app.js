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

if(window.location.pathname === '/menu' || window.location.pathname === '/menuClean') {
    console.log('/sisas');
    controllerCategory();
}

tabBar();
