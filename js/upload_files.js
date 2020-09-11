
var input = document.getElementById("Imagen");

input.addEventListener("change", function(){
    var getName = input.files[0].name;

    var GetInfoDiv = document.getElementById("info");
    GetInfoDiv.innerHTML = getName;

})