
let elemento = document.getElementById("productos");
let submenu = document.getElementById("submenu");

elemento.addEventListener("mouseover", function(){
    submenu.classList.add("animado");
})

elemento.addEventListener("mouseout", function(){
    submenu.classList.remove("animado");
})

submenu.addEventListener("mouseover", function(){
    submenu.style.display = "flex";
})

submenu.addEventListener("mouseout", function(){
    submenu.style.display = "none";
})