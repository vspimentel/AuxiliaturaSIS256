v1 = 0; v2 = 0;

pantalla_1 = document.getElementById("sec-1");
pantalla_2 = document.getElementById("sec-2");

igual = document.getElementById("igual");

botones = document.getElementsByClassName("boton");
for (var i = 0; i < botones.length; i++) {
    botones[i].onclick = function () {
        escribir(this);
    }
}

function escribir(elemento) {
    boton = elemento.innerHTML;
    switch (boton) {
        case "+":
            v1 = parseFloat(pantalla_2.innerHTML);
            pantalla_1.innerHTML = v1 + "+";
            pantalla_2.innerHTML = "";
            igual.onclick = function () {
                sumar();
            }
            break;
        case "-":
            v1 = parseFloat(pantalla_2.innerHTML);
            pantalla_1.innerHTML = v1 + "-";
            pantalla_2.innerHTML = "";
            igual.onclick = function () {
                restar();
            }
            break;
        case "x":
            v1 = parseFloat(pantalla_2.innerHTML);
            pantalla_1.innerHTML = v1 + "x";
            pantalla_2.innerHTML = "";
            igual.onclick = function () {
                multiplicar();
            }
            break;
        case "/":
            v1 = parseFloat(pantalla_2.innerHTML);
            pantalla_1.innerHTML = v1 + "/";
            pantalla_2.innerHTML = "";
            igual.onclick = function () {
                dividir();
            }
            break;
        case "DEL":
            pantalla_1.innerHTML = "";
            pantalla_2.innerHTML = "";
            break
        default:
            pantalla_2.innerHTML += boton;
            break
    }
}

function sumar() {
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML += v2;
    pantalla_2.innerHTML = v1 + v2;
}

function restar() {
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML += v2;
    pantalla_2.innerHTML = v1 - v2;
}

function multiplicar() {
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML += v2;
    pantalla_2.innerHTML = v1 * v2;
}

function dividir() {
    v2 = parseFloat(pantalla_2.innerHTML);
    pantalla_1.innerHTML += v2;
    pantalla_2.innerHTML = (v1 / v2).toFixed(2);
}
