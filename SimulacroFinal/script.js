valor_turno = "X";
var turno
var contenido = document.getElementById("contenido");
var resultado = document.getElementById("resultado");

function pregunta1(){
    nombre = prompt("Ingrese su nombre");
    cu = prompt("Ingrese su cu");
    fecha = new Date();

    document.getElementById("nombre").innerHTML = `Nombre: ${nombre}`;
    document.getElementById("cu").innerHTML = `CU: ${cu}`;
    document.getElementById("fecha").innerHTML = `Fecha: ${fecha.getDate()}/${fecha.getMonth()+1}/${fecha.getFullYear()}`;  
}

function pregunta2() {
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

function marcar(cell) {
    if (valor_turno == "X") {
        cell.innerHTML = valor_turno;
        valor_turno = "O";
        turno.innerHTML = "Turno de: " + valor_turno;
    } else {
        cell.innerHTML = valor_turno;
        valor_turno = "X";
        turno.innerHTML = "Turno de: " + valor_turno;
    }
}

function addFucntion() {
    cells = document.getElementsByClassName("cell");
    for (let i = 0; i < cells.length; i++) {
        cells[i].onclick = function () {
            marcar(this);
        }
    }
    turno = document.getElementById("turno");
    turno.innerHTML = "Turno de: " + valor_turno;
}

function pregunta3() {
    var ajax = new XMLHttpRequest()
    ajax.open("GET", 'login.html', false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            resultado.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function login(){
    var form = document.getElementById("login_form");
    var datos = new FormData(form);
    var ajax = new XMLHttpRequest()
    ajax.open("POST", 'autenticar.php', false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send(datos);
}


function pregunta4() {
    fetch("listar.php")
        .then(response => response.text())
        .then(data => resultado.innerHTML = data);
}

function cambiarNivel(nivel, id){
    var datos = new FormData();
    datos.append("nivel", nivel);
    datos.append("id", id);
    fetch("cambiar_nivel.php", {method: 'POST', body: datos})
        .then(response => response.text())
        .then(data => {
            pregunta4();
        });
}

function pregunta5(){
    var ajax = new XMLHttpRequest()
    ajax.open("GET", 'listarnoticias.php', false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            resultado.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function getFormComentario(id){
    fetch("form_comentario.php?id="+id)
        .then(response => response.text())
        .then(data => {
            contenido.innerHTML = data;
        });
}

function insertarComentario(){
    var form = document.getElementById("form_comentario");
    var datos = new FormData(form);
    fetch("insertar_comentario.php", {method: 'POST', body: datos})
        .then(response => response.text())
        .then(data => {
            pregunta5();
        });
}