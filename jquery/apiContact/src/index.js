$(document).ready(function () {

    const dateParser = (date) => {
        let newDate = new Date(date).toLocaleDateString("fr-FR", {
            year: "numeric",
            month: "long",
            day: "numeric",
            hour: "numeric",
            minute: "numeric"
        });

        return newDate;
    };

    $(document).on("click", function (e) {
        e.target.id == "liste-contacts" ? list() : "";
        e.target.id == "nv-contact" ? formAdd() : "";

        e.target.dataset.del == "del" ? clientDelete(e.target.dataset.id) : "";
        e.target.dataset.edit == "edit" ? formModif(e.target.dataset.id) : "";

        e.target.dataset.annuler == "annuler" ? editAnnul(e.target.dataset.id) : "";
        e.target.dataset.hide == "hideModal" ? editAnnul() : "";
    });

    $(document).on("submit", "form.add", function (e) {
        e.preventDefault();
        clientAdd();
    });

    $(document).on("click", "[data-add=addContact]", function (e) {
        clientEdit(e.target.id);
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
                <th scope="col">Category</th>
                <th scope="col">Action</th>
                <th scope="col">Modifier le</th>
                </tr>
            </thead>
            <tbody>`;

            response.map((target) => {
                display += `
                    <tr>
                        <th scope="row">${target.id}</th>
                        <td>${target.nom}</td>
                        <td>${target.prenom}</td>
                        <td>${target.category}</td>
                        <td>
                            <button type="button" data-id="${target.id}" data-see="see" class="btn btn-success" data-toggle="modal" data-target="#modal_${target.id}">Voir plus</button>
                            <button type="button" data-id="${target.id}" data-del="del" class="btn btn-danger">Supprimer</button>
                        </td>
                        <td>${target.isModify ? dateParser(Number(target.isModify)) : "Non modifié"}</td>
                    </tr>
                    <div class="modal fade" data-hide="hideModal" id="modal_${target.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Utilisateur - #${target.id}</h5>
                                    <button type="button" data-hide="hideModal" data-id="close_${target.id}" class="close" data-dismiss="modal" aria-label="Close">
                                        <span data-hide="hideModal" aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <div class="modal-body">
                                <ul data-id="client-list" class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Nom :</strong> ${target.nom}</li>
                                    <li class="list-group-item"><strong>Prénom :</strong> ${target.prenom}</li>
                                    <li class="list-group-item"><strong>Adresse :</strong> ${target.address ? target.address : "<span class=\"text-monospace text-danger\">NON FOURNIE</span>"}</li>
                                    <li class="list-group-item"><strong>mail :</strong> ${target.email}</li>
                                    <li class="list-group-item"><strong>tél :</strong> ${target.tel ? target.tel : "<span class=\"text-monospace text-danger\">NON FOURNI</span>"}</li>
                                    <li class="list-group-item"><strong>Category :</strong> ${target.category}</li>
                                </ul>
                                <div data-id="formEdit" class="d-none">
                                    <form class="edit" method="post">
                                        <div class="form-group">
                                            <label for="nom">Nom* :</label>
                                            <input type="text" class="form-control" name="nom" id="nom_${target.id}" value="${target.nom}" required/>
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom">Prénom* :</label>
                                            <input type="text" class="form-control" name="prenom" id="prenom_${target.id}" value="${target.prenom}" required/>
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom">Address :</label>
                                            <input type="text" class="form-control" name="address" id="address_${target.id}" value="${target.address}"  />
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom">Email* :</label>
                                            <input type="mail" class="form-control" name="email" id="email_${target.id}" value="${target.email}" required/>
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom">Tél :</label>
                                            <input type="tel" class="form-control" name="tel" id="tel_${target.id}" value="${target.tel}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Choose category :</label>
                                            <select id="category_${target.id}" class="custom-select">
                                                <option value="autres" selected>Autres</option>
                                                <option value="famille">Famille</option>
                                                <option value="ami">Ami</option>
                                                <option value="travail">Travail</option>
                                            </select>
                                        </div>
                                        <button type="submit" data-dismiss="modal" id="${target.id}" data-add="addContact" class="btn btn-primary ajout-contact">Ajouter</button>
                                    </form>
                                </div>
                                
                            </div>
                                <div id="onEdit" class="modal-footer">
                                    <button type="button" data-edit="edit" data-id="${target.id}" class="btn btn-primary">Edit</button>
                                    <button type="button" data-annuler="annuler" class="btn btn-primary d-none">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <form class="add" method="post">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="nom">Nom* :</label>
                            <input type="text" class="form-control" name="nom" id="nom" required />
                        </div>
                        <div class="form-group col-6">
                            <label for="prenom">Prénom* :</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" required />
                        </div>
                        <div class="form-group col-6">
                            <label for="prenom">Address :</label>
                            <input type="text" class="form-control" name="address" id="address" />
                        </div>
                        <div class="form-group col-6">
                            <label for="prenom">Email* :</label>
                            <input type="mail" class="form-control" name="email" id="email" required />
                        </div>
                        <div class="form-group col-6">
                            <label for="prenom">Tél :</label>
                            <input type="tel" class="form-control" name="tel" id="tel" />
                        </div>
                        <div class="form-group col-6">
                            <label for="category">Choose category :</label>
                            <select id="category" class="custom-select">
                                <option value="autres" selected>Autres</option>
                                <option value="famille">Famille</option>
                                <option value="ami">Ami</option>
                                <option value="travail">Travail</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ajout-contact">Ajouter</button>
                </form>
            </div>
        `);
    }

    const formModif = () => {

        $('[data-id=client-list]').hide();
        $('[data-id=formEdit]').removeClass("d-none");

        $('[data-annuler=annuler]').removeClass("d-none");
        $('[data-edit=edit]').hide();
    }

    const clientDelete = (id) => {

        if (window.confirm("Voulez-vous vraiment supprimer cet utilisateur ?")) {
            $.ajax({
                type: 'DELETE',
                url: 'http://localhost:3000/contacts/' + id,
                success: function () {
                    list();
                }
            });
        }
    }

    const clientEdit = (id) => {

        let data = {
            id: id,
            nom: $(`#nom_${id}`).val(),
            prenom: $(`#prenom_${id}`).val(),
            address: $(`#address_${id}`).val(),
            email: $(`#email_${id}`).val(),
            tel: $(`#tel_${id}`).val(),
            category: $(`#category_${id} option:selected`).text(),
            isModify: Date.now()
        };

        $('input').each(function () {
            $(this).val("");
        });

        $.ajax({
            type: 'PUT',
            url: 'http://localhost:3000/contacts/' + id,
            data: data,
            success: function () {
                editAnnul();
                setTimeout(() => list(), 100);
            }
        });
    }

    const clientAdd = () => {

        let data = {
            id: Date.now(),
            nom: $('#nom').val(),
            prenom: $('#prenom').val(),
            address: $('#address').val(),
            email: $('#email').val(),
            tel: $('#tel').val(),
            category: $("#category option:selected").text()
        };

        $('input').each(function () {
            $(this).val("");
        });

        $.ajax({
            type: 'POST',
            url: 'http://localhost:3000/contacts',
            data: data
        });

        setTimeout(() => $('#liste-contacts').trigger("click"), 100);

    }

    const editAnnul = () => {
        $('[data-id=client-list]').show();
        $('[data-id=formEdit]').addClass("d-none");

        $('[data-annuler=annuler]').addClass("d-none");
        $('[data-edit=edit]').show();
    }

});