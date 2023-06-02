class Estudiante{
    constructor(id, nombre_apellidos, edad, calificiones){
        this.id = id;
        this.nombre_apellidos = nombre_apellidos;
        this.edad = edad;
        this.calificiones = calificiones;
    }
}

class Calificacion{
    constructor(materia, nota){
        this.materia = materia;
        this.nota = nota;
    }
}

function introducirEstudiantes(nro){
    nombre_apellidos = prompt(`Estudiate ${nro}: Nombre y apellidos`)
    edad = parseInt(prompt(`Estudiate ${nro}: Edad`))
    materia = prompt(`Estudiate ${nro}: Materia`)
    nota = parseInt(prompt(`Estudiate ${nro}: Nota`))
    calificacion = new Calificacion(materia, nota)
    estudiante = new Estudiante(last_id, nombre_apellidos, edad, calificacion)
    last_id++
    estudiantes.push(estudiante)
}

function mostrarEstudiantes(){
    
    tabla.innerHTML = "";
    tabla.innerHTML += 
    `<tr>
        <th>Nro.</th>
        <th>Nombre y apellidos</th>
        <th>Edad</th>
        <th>Materia</th>
        <th>Nota</th>
    </tr>`
    for (let i = 0; i < estudiantes.length; i++) {
        color = i%2 == 0? "grey" : "white"
        font_color = i%2 == 0? "white" : "black"
        tabla.innerHTML +=
        `<tr style="background-color:${color}; color:${font_color}" id="${estudiantes[i].id}">
            <td>${estudiantes[i].id}</td>
            <td>${estudiantes[i].nombre_apellidos}</td>
            <td>${estudiantes[i].edad}</td>
            <td>${estudiantes[i].calificiones.materia}</td>
            <td>${estudiantes[i].calificiones.nota}</td>
        </tr>`    
    }
}

var tabla = document.getElementById("tabla_estudiantes");
last_id = 1
estudiantes = []
cantidad = parseInt(prompt("Cantiddad de estudiantes"))
//while(cantidad < 5){
//    cantidad = parseInt(prompt("Error, la cantidad de estudiates debe ser mayor a 5"))
//}
for (let i = 0; i < cantidad; i++) {
    introducirEstudiantes(i+1)
}
mostrarEstudiantes()

