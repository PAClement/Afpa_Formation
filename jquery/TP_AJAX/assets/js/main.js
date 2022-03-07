
$(document).ready(function () {

    let request = $.ajax({
        type: "GET",
        url: "https://jsonplaceholder.typicode.com/todos",
        dataType: "json",
    });

    request.done(function (response) {

        let display = '';
        response.map((target) => {
            display += `
            <div class="card m-1" style="width: 18rem;">
                <div class="card-header bg-white border-0">
                    <button type="button" class="btn btn-primary">Numéro de la tâche : <span class="badge bg-white text-dark">${target.id}</span></button>
                </div>
                <div class="card-body">
                    <p class="card-text">${target.title}</p>
                </div>
                <div class="card-footer bg-white border-0">
                    ${target.completed ? `<button type="button" class="btn btn-success">Terminée</button>` : `<button type="button" class="btn btn-warning">En cours</button>`}
                </div>
            </div>
            `;
        });

        $('#root').html(display);
    });

    request.fail(function (http_error) {
        //Code à jouer en cas d'éxécution en erreur du script du PHP

        let server_msg = http_error.responseText;
        let code = http_error.status;
        let code_label = http_error.statusText;
        alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
    });

});