function fetchDepartamentos(){
    var select = document.getElementById('departamentos');
    var ajax = new XMLHttpRequest()
    ajax.open("GET", 'departamentos.php', false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            var departamentos = JSON.parse(ajax.responseText);
            for (let i = 0; i < departamentos.length; i++) {
                select.innerHTML += `<option value="${departamentos[i].id}">${departamentos[i].nombre}</option>`;
            }
        }
    }
    ajax.send();
}



function fetchProvincias(){
    var select = document.getElementById('provincias');
    var id_derpartamento = document.getElementById('departamentos').value;
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `provincias.php?id=${id_derpartamento}`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            var provincias = JSON.parse(ajax.responseText);
            select.innerHTML = '';
            for (let i = 0; i < provincias.length; i++) {
                select.innerHTML += `<option value="${provincias[i].id}">${provincias[i].nombre}</option>`;
            }
        }
    }
    ajax.send();
}

fetchDepartamentos();
fetchProvincias();

