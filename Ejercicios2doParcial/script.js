contenido = document.getElementById("contenido");

function pregunta1() {
    var ajax = new XMLHttpRequest()
    ajax.open("GET", 'tresenraya.html', false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
            addFucntion();
        }
    }
    ajax.send();
}

turno = "X";
var mensaje = document.getElementById("mensaje");
mensaje.innerHTML = "Turno de: " + turno;

function marcar(cell) {
    if (turno == "X") {
        cell.innerHTML = turno;
        turno = "O";
        mensaje.innerHTML = "Turno de: " + turno;
    } else {
        cell.innerHTML = turno;
        turno = "X";
        mensaje.innerHTML = "Turno de: " + turno;
    }
}



function addFucntion() {
    cells = document.getElementsByClassName("cell");
    for (let i = 0; i < cells.length; i++) {
        cells[i].onclick = function () {
            marcar(this);
        }
    }
}

function pregunta2() {
    var ajax = new XMLHttpRequest()
    ajax.open("GET", 'tabla_form.html', false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function createTable() {
    tablade = document.getElementById("tabla").value;
    hasta = document.getElementById("hasta").value;
    opciones = document.querySelectorAll('input[name="operacion"]');
    operacion = "";
    for (let i = 0; i < opciones.length; i++) {
        if (opciones[i].checked) {
            operacion = opciones[i].value;
            break;
        }
    }
    console.log(tablade, hasta, operacion)
    var tablas = document.getElementById("tablas");
    tablas.innerHTML = "";
    for (let i = 1; i <= parseInt(hasta); i++) {
        console.log(i)
        switch (operacion) {
            case "sumar":
                tablas.innerHTML += `${i} + ${tablade} = ${i + parseInt(tablade)} <br>`
                break
            case "restar":
                tablas.innerHTML += `${i} - ${tablade} = ${i - parseInt(tablade)} <br>`
                break
            case "multiplicar":
                tablas.innerHTML += `${i} * ${tablade} = ${i * parseInt(tablade)} <br>`
                break
            case "dividir":
                tablas.innerHTML += `${i} / ${tablade} = ${i / parseInt(tablade)} <br>`
                break
        }
    }
}

function login(){
    var mensaje = document.getElementById("mensaje");
    var form = document.getElementById("login_form");
    var datos = new FormData(form);
    var ajax = new XMLHttpRequest()
    ajax.open("POST", 'autenticar.php', false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            mensaje.innerHTML = ajax.responseText;
        }
    }
    ajax.send(datos);
}

