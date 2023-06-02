function agrandar(){
    cantidad = parseInt(document.getElementById("cantidad").value);
    imagen = document.getElementById("imagen");
    width = parseInt(imagen.width);
    imagen.style.width = `${cantidad+width}px`;
}

function reducir(){
    cantidad = parseInt(document.getElementById("cantidad").value);
    imagen = document.getElementById("imagen");
    width = parseInt(imagen.width);
    imagen.style.width = `${width-cantidad}px`;
}