function addElemento(){
    var elemento = document.getElementById("elemento");
    var lista = document.getElementById("lista");
    var has_de = false;
    for(let i = 0; i < elemento.value.length; i++){
        if(elemento.value[i]==" " && elemento.value[i+1]=="d" && elemento.value[i+2]=="e" && elemento.value[i+3]==" "){
            has_de = true;
        }
    }
    if(has_de){
        console.log("has de")
        lista.innerHTML += `<div style="background-color: yellow"> o ${elemento.value}</div>`;
    } else {
        console.log("no has de")
        lista.innerHTML += `<div> o ${elemento.value}</div>`;
    }
    elemento.value = "";
}