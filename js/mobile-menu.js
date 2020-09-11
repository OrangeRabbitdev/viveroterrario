

var mobileMenuIcon = document.getElementById("mobile-menu-icon");
var mobileMenu = document.getElementById("mobile-menu");

mobileMenuIcon.addEventListener("click", Intercalar);

let counter = 0;

function Intercalar(){
    counter++;

    if(counter == 0){
        mobileMenu.style.cssText += "transform: translateX(-100%) !important;";
        mobileMenu.style.cssText -= "transform: translateX(0%) !important;";
    }

    if(counter == 1){
        mobileMenu.style.cssText -= "transform: translateX(-100%) !important;";
        mobileMenu.style.cssText += "transform: translateX(0%) !important;";
       counter = -1;
    }


}

// PARA SUBMENU

let elementoMobile = document.getElementById('mobile-productos');
let submenuMobile = document.getElementById('mobilesubmenu');

let counter2 = 0;

elementoMobile.addEventListener("click", MostrarSubMenu);

console.log(counter2);

function MostrarSubMenu(){
    counter2++;

    if(counter2 == 0){
        submenuMobile.style.display = "none";
    }

    if( counter2 == 1){
        submenuMobile.style.display = "flex";
        counter2 = -1;
    }
}

