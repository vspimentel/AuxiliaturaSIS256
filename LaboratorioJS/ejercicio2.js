function encontrarMejorEstudiante(){
    mejor_nota = 0
    estudiantes.forEach(estadiate => {
        if(estadiate.calificiones.nota > mejor_nota){
            mejor_estudiante = estadiate
            mejor_nota = estadiate.calificiones.nota
        }
    });
    fila_estudiante = document.getElementById(mejor_estudiante.id)
    fila_estudiante.style.backgroundColor = "green"
    fila_estudiante.style.color = "white"
}

