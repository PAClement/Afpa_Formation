
$(document).ready(function () {

    let request = $.ajax({
        type: "GET",
        url: "https://jsonplaceholder.typicode.com/users",
        dataType: "json",
    });

    request.done(function (response) {

        let users = '';

        response.map((target) => {
            users += `
            <div class="card m-1" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">${target.id} : ${target.username}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">${target.name}</li>
                    <li class="list-group-item">
                    ${target.address.street} ${target.address.suite} ${target.address.city} ${target.address.zipcode}<br/>
                        <a class="btn btn-danger my-1" href="https://www.google.fr/maps/place/${target.address.geo.lng},${target.address.geo.lat}" target="_blank">&#8505; Map</a>
                    </li>
                    <li class="list-group-item">${target.email}</li>
                </ul>
                <div class="card-body row">
                    <button type="button" class="btn btn-primary btn-sm mb-1">${target.phone}</button>
                    <button type="button" class="btn btn-secondary btn-sm">${target.website}</button>
                </div>
            </div>
            `;
        });

        $('#users').html(users);
    });

    request.fail(function (http_error) {
        //Code à jouer en cas d'éxécution en erreur du script du PHP

        let server_msg = http_error.responseText;
        let code = http_error.status;
        let code_label = http_error.statusText;
        alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
    });

});