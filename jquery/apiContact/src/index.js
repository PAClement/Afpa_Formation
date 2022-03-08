$(document).ready(function () {

    $(document).on("click", function (e) {
        e.target.id == "liste-contacts" ? list() : "";
        e.target.id == "nv-contact" ? formAdd() : "";
        e.target.id == "del" ? clientDelete(e.target.dataset.id) : "";
        e.target.id == "modif" ? clientModif(e.target.dataset.id) : "";

    });

    $(document).on("submit", 'form', function (e) {

        e.preventDefault();
        clientAdd();

    });

    const list = () => {
        let request = $.ajax({
            type: "GET",
            url: "http://localhost:3000/contacts",
            dataType: "json",
        });

        request.done(function (response) {

            let display = `
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>`;

            response.map((target) => {
                display += `
                <tr>
                    <th scope="row">${target.id}</th>
                    <td>${target.nom}</td>
                    <td>${target.prenom}</td>
                    <td>
                        <button type="button" data-id="${target.id}" id="modif" class="btn btn-info">Edit</button>
                        <button type="button" data-id="${target.id}" id="del" class="btn btn-danger">Delete</button>
                        <button type="button" data-id="${target.id}" id="see" class="btn btn-success">See</button>
                    </td>
                </tr>
                `;
            })

            display += `</tbody></table>`;

            $('#root').html(display);
        });

        request.fail(function (http_error) {
            //Code à jouer en cas d'éxécution en erreur du script du PHP

            let server_msg = http_error.responseText;
            let code = http_error.status;
            let code_label = http_error.statusText;
            console.log("Erreur " + code + " (" + code_label + ") : " + server_msg);
        });
    }

    const formAdd = () => {
        $('#root').html(`
            <div class="col-md-6">
                <h2 class="mb-3">Ajout de contact</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" name="nom" id="nom" />
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" name="prenom" id="prenom" />
                    </div>
                    <button type="submit" class="btn btn-primary ajout-contact">Ajouter</button>
                </form>
            </div>
        `);
    }

    const clientDelete = (id) => {
        $.ajax({
            type: 'DELETE',
            url: 'http://localhost:3000/contacts/' + id,
            success: function () {
                list();
            }
        });
    }

    const clientModif = (id) => {
        console.log(`id modif = ${id}`);
        //http://localhost:3000/contacts?id=id
    }

    const clientAdd = () => {

        $('input').each(function () {
            console.log($(this).val());
        });

    }

});