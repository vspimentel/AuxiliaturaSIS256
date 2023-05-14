botones = document.getElementsByClassName("boton");
pantalla = document.getElementById("pantalla");
for (var i = 0; i < botones.length; i++) {
    botones[i].onclick = function() {
        escribir(this);
    }
}

function escribir(elemento){
    boton = elemento.innerHTML;
    if (boton == "=") {
        numeros = pantalla.innerHTML.split("+")
        resultado = 0
        numeros.forEach(numero => {
            resultado = resultado + parseInt(numero)
        });
        pantalla.innerHTML = resultado
    } else {
        pantalla.innerHTML = pantalla.innerHTML + boton;
    }
}