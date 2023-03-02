import "./bootstrap";
import Alpine from "alpinejs";
import.meta.glob(["../img/**"]);
import "iconify-icon";
import "./swipers"
import "./selectCat";
import tabBar from "./tabBar";
import dishModal from "./dishModal";

window.Alpine = Alpine;
Alpine.start();

try {
    dishModal();
} catch (error) {}

tabBar();
