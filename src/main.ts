import Gallery from "./blocks/gallery";

import "./main.scss";

import Alpine from "alpinejs";

// suggested in the Alpine docs:
// make Alpine on window available for better DX
window.Alpine = Alpine;

Alpine.data("Gallery", Gallery);

Alpine.start();
