function fetchDepartamentos() {
    var select = document.getElementById('departamentos');
    fetch("departamentos.php")
        .then(response => response.json())
        .then(data => {
            var departamentos = data;
            console.log(departamentos);
            for (let i = 0; i < departamentos.length; i++)
                select.innerHTML += `<option value="${departamentos[i].id}">${departamentos[i].nombre}</option>`;     
            fetchProvincias();
        });
}


function fetchProvincias() {
    var select = document.getElementById('provincias');
    var id_derpartamento = document.getElementById('departamentos').value;
    console.log(id_derpartamento);
    fetch(`provincias.php?id=${id_derpartamento}`)
        .then(response => response.json())
        .then(data => {
            var departamentos = data;
            select.innerHTML = '';
            for (let i = 0; i < departamentos.length; i++)
                select.innerHTML += `<option value="${departamentos[i].id}">${departamentos[i].nombre}</option>`;
        });
}

fetchDepartamentos();
