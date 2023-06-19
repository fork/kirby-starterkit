import Alpine from "alpinejs";

// @ts-ignore
import focus from "@alpinejs/focus";
// @ts-ignore
import collapse from "@alpinejs/collapse";

import Gallery from "./blocks/gallery";
import MobileNavigation from "./blocks/mobileNavigation";

import "./main.scss";

Alpine.plugin(collapse);
Alpine.plugin(focus);
// suggested in the Alpine docs:
// make Alpine on window available for better DX
window.Alpine = Alpine;

Alpine.data("Gallery", Gallery);
Alpine.data("MobileNavigation", MobileNavigation);

Alpine.start();
