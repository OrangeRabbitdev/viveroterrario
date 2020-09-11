
var resolucion = screen.width;

let maxRes = 1024;

if(resolucion <= maxRes){
    
    let tarjeta = document.querySelectorAll(".wrap-card");

    let counter = 0;

    for(let i = 0; i < tarjeta.length; i++){

        tarjeta[i].classList.remove('cardhover');

        tarjeta[i].addEventListener("click", function(){


            counter++;
    
            if(counter == 0){
                tarjeta[i].classList.remove('voltearTarjeta');
            }
    
            if(counter == 1){
                tarjeta[i].classList.add('voltearTarjeta');
                counter = -1;
            }
    
            
        })
    }

    
}else{
    tarjeta.classList.add('cardhover');
}

